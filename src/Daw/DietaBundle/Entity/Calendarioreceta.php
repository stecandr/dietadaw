<?php

namespace Daw\DietaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendarioreceta
 */
class Calendarioreceta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Daw\DietaBundle\Entity\Receta
     */
    private $idreceta;

    /**
     * @var \Daw\DietaBundle\Entity\Calendario
     */
    private $idcalend;


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
     * Set idreceta
     *
     * @param \Daw\DietaBundle\Entity\Receta $idreceta
     * @return Calendarioreceta
     */
    public function setIdreceta(\Daw\DietaBundle\Entity\Receta $idreceta = null)
    {
        $this->idreceta = $idreceta;

        return $this;
    }

    /**
     * Get idreceta
     *
     * @return \Daw\DietaBundle\Entity\Receta 
     */
    public function getIdreceta()
    {
        return $this->idreceta;
    }

    /**
     * Set idcalend
     *
     * @param \Daw\DietaBundle\Entity\Calendario $idcalend
     * @return Calendarioreceta
     */
    public function setIdcalend(\Daw\DietaBundle\Entity\Calendario $idcalend = null)
    {
        $this->idcalend = $idcalend;

        return $this;
    }

    /**
     * Get idcalend
     *
     * @return \Daw\DietaBundle\Entity\Calendario 
     */
    public function getIdcalend()
    {
        return $this->idcalend;
    }
}
