<?php

namespace Bienes\MueblesBundle\Entity;

/**
 * Prestamos
 */
class Prestamos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var bool
     */
    private $atendido;

    /**
     * @var string
     */
    private $ubicacion;


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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Prestamos
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
     * @return Prestamos
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
     * Set atendido
     *
     * @param boolean $atendido
     *
     * @return Prestamos
     */
    public function setAtendido($atendido)
    {
        $this->atendido = $atendido;

        return $this;
    }

    /**
     * Get atendido
     *
     * @return bool
     */
    public function getAtendido()
    {
        return $this->atendido;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Prestamos
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
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
     * @var \Inventario\Bundle\Entity\equipo
     */
    private $equipo;


    /**
     * Set alumnos
     *
     * @param \reporteBundle\Entity\alumnos $alumnos
     *
     * @return Prestamos
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
     * @return Prestamos
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
     * @return Prestamos
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
