<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dia
 */
class Dia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $horario;

    /**
     * @var \Daw\DietaBundle\Entity\Calendario
     */
    private $calendario;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Dia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set horario
     *
     * @param string $horario
     * @return Dia
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set calendario
     *
     * @param \Daw\DietaBundle\Entity\Calendario $calendario
     * @return Dia
     */
    public function setCalendario(\Daw\DietaBundle\Entity\Calendario $calendario = null)
    {
        $this->calendario = $calendario;

        return $this;
    }

    /**
     * Get calendario
     *
     * @return \Daw\DietaBundle\Entity\Calendario 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }
}
