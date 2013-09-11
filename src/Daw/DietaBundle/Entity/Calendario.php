<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendario
 */
class Calendario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Daw\DietaBundle\Entity\Usuario
     */
    private $usuario;


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
     * Set usuario
     *
     * @param \Daw\DietaBundle\Entity\Usuario $usuario
     * @return Calendario
     */
    public function setUsuario(\Daw\DietaBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Daw\DietaBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
