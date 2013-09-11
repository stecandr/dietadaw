<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receta
 */
class Receta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

     /**
     * @var string
     */
    private $ingredientes;

    /**
     * @var string
     */
    private $preparacion;

    /**
     * @var integer
     */
    private $calorias;

    /**
     * @var \DateTime
     */
    private $fechapub;

    /**
     * @var string
     */
    private $img;

    /**
     * @var \Daw\DietaBundle\Entity\Usuario
     */
    private $autor;


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
     * Set titulo
     *
     * @param string $titulo
     * @return Receta
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set ingredientes
     *
     * @param string $ingredientes
     * @return Receta
     */
    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    /**
     * Get ingredientes
     *
     * @return string 
     */
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    /**
     * Set preparacion
     *
     * @param string $preparacion
     * @return Receta
     */
    public function setPreparacion($preparacion)
    {
        $this->preparacion = $preparacion;

        return $this;
    }

    /**
     * Get preparacion
     *
     * @return string 
     */
    public function getPreparacion()
    {
        return $this->preparacion;
    }

    /**
     * Set calorias
     *
     * @param integer $calorias
     * @return Receta
     */
    public function setCalorias($calorias)
    {
        $this->calorias = $calorias;

        return $this;
    }

    /**
     * Get calorias
     *
     * @return integer 
     */
    public function getCalorias()
    {
        return $this->calorias;
    }

    /**
     * Set fechapub
     *
     * @param \DateTime $fechapub
     * @return Receta
     */
    public function setFechapub()
    {
        $this->fechapub = new \DateTime();

        return $this;
    }

    /**
     * Get fechapub
     *
     * @return \DateTime 
     */
    public function getFechapub()
    {
        return $this->fechapub;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Receta
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set autor
     *
     * @param \Daw\DietaBundle\Entity\Usuario $autor
     * @return Receta
     */
    public function setAutor(\Daw\DietaBundle\Entity\Usuario $autor = null)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return \Daw\DietaBundle\Entity\Usuario 
     */
    public function getAutor()
    {
        return $this->autor;
    }
}
