<?php

namespace Daniel\TonerBundle\Entity;

/**
 * Tonerdaniel
 */
class Tonerdaniel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $noToner;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $fechaEntrega;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set noToner
     *
     * @param integer $noToner
     *
     * @return Tonerdaniel
     */
    public function setNoToner($noToner)
    {
        $this->noToner = $noToner;

        return $this;
    }

    /**
     * Get noToner
     *
     * @return int
     */
    public function getNoToner()
    {
        return $this->noToner;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Tonerdaniel
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechaEntrega
     *
     * @param string $fechaEntrega
     *
     * @return Tonerdaniel
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return string
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }
    /**
     * @var \reporteBundle\Entity\alumnos
     */
    private $alumnos;

    /**
     * @var \reporteBundle\Entity\encargado
     */
    private $encargado;


    /**
     * Set alumnos
     *
     * @param \reporteBundle\Entity\alumnos $alumnos
     *
     * @return Tonerdaniel
     */
    public function setAlumnos(\reporteBundle\Entity\alumnos $alumnos = null)
    {
        $this->alumnos = $alumnos;

        return $this;
    }

    /**
     * Get alumnos
     *
     * @return \reporteBundle\Entity\alumnos
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    /**
     * Set encargado
     *
     * @param \reporteBundle\Entity\encargado $encargado
     *
     * @return Tonerdaniel
     */
    public function setEncargado(\reporteBundle\Entity\encargado $encargado = null)
    {
        $this->encargado = $encargado;

        return $this;
    }

    /**
     * Get encargado
     *
     * @return \reporteBundle\Entity\encargado
     */
    public function getEncargado()
    {
        return $this->encargado;
    }
}
