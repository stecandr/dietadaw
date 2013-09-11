<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 */
class Articulo
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
    private $descripcion;

    /**
     * @var integer
     */
    private $tipo;

    /**
     * @var string
     */
    private $fuente;

    /**
     * @var \DateTime
     */
    private $fechapub;

    /**
     * @var string
     */
    private $img;


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
     * @return Articulo
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Articulo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Articulo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fuente
     *
     * @param string $fuente
     * @return Articulo
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;

        return $this;
    }

    /**
     * Get fuente
     *
     * @return string 
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * Set fechapub
     *
     * @param \DateTime $fechapub
     * @return Articulo
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
     * @return Articulo
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
}
