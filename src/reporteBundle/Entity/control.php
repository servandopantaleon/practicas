<?php

namespace reporteBundle\Entity;

/**
 * control
 */
class control
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var \reporteBundle\Entity\alumnos
     */
    private $alumnos;

    /**
     * @var \reporteBundle\Entity\encargado
     */
    private $encargado;

    /**
     * @var \Inventario\Bundle\Entity\equipo
     */
    private $equipo;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return control
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return control
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return control
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return control
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set alumnos
     *
     * @param \reporteBundle\Entity\alumnos $alumnos
     *
     * @return control
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
     * @return control
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

    /**
     * Set equipo
     *
     * @param \Inventario\Bundle\Entity\equipo $equipo
     *
     * @return control
     */
    public function setEquipo(\Inventario\Bundle\Entity\equipo $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return \Inventario\Bundle\Entity\equipo
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}

