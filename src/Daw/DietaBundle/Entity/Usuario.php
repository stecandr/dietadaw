<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var \DateTime
     */
    private $fechanac;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var float
     */
    private $altura;

    /**
     * @var float
     */
    private $peso;

    /**
     * @var float
     */
    private $bmi;

    /**
     * @var \DateTime
     */
    private $fecharegistro;

    /**
     * @var boolean
     */
    private $estaactivo;

    /**
     * @var string
     */
    private $role;

    public function __construct()
    {
        $this->estaactivo = 1;
        $this->salt = md5(uniqid(null, true));
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechanac
     *
     * @param \DateTime $fechanac
     * @return Usuario
     */
    public function setFechanac($fechanac)
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    /**
     * Get fechanac
     *
     * @return \DateTime 
     */
    public function getFechanac()
    {
        return $this->fechanac;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
        $this->username = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set altura
     *
     * @param float $altura
     * @return Usuario
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return float 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set peso
     *
     * @param float $peso
     * @return Usuario
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set bmi
     *
     * @param float $bmi
     * @return Usuario
     */
    public function setBmi()
    {
        $this->bmi = ($this->peso)/($this->altura * $this->altura * 0.0001);

        return $this;
    }

    /**
     * Get bmi
     *
     * @return float 
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * Set fecharegistro
     *
     * @param \DateTime $fecharegistro
     * @return Usuario
     */
    public function setFecharegistro()
    {
        $this->fecharegistro = new \DateTime();

        return $this;
    }

    /**
     * Get fecharegistro
     *
     * @return \DateTime 
     */
    public function getFecharegistro()
    {
        return $this->fecharegistro;
    }

    /**
     * Set estaactivo
     *
     * @param boolean $estaactivo
     * @return Usuario
     */
    public function setEstaactivo()
    {
        $this->estaactivo = 1;

        return $this;
    }

    /**
     * Get estaactivo
     *
     * @return boolean 
     */
    public function getEstaactivo()
    {
        return $this->estaactivo;
    }

     /**
     * Set role
     *
     * @return Usuario
     */
    public function setRole()
    {
        if($this->id==1){$this->role = 'ROLE_ADMIN';}else{$this->role = 'ROLE_USER';}

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->correo;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->role);
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id, $this->correo, $this->password, $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id, $this->correo, $this->password, $this->salt
        ) = unserialize($serialized);
    }

}
