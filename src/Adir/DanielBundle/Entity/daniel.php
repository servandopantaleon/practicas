<?php

namespace Adir\DanielBundle\Entity;

/**
 * daniel
 */
class daniel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaInicio;

    /**
     * @var \DateTime
     */
    private $horaFin;

    /**
     * @var string
     */
    private $software;

    /**
     * @var int
     */
    private $totalAlumnos;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \DateTime
     */
    private $fecha;


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
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     *
     * @return daniel
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     *
     * @return daniel
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;

        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set software
     *
     * @param string $software
     *
     * @return daniel
     */
    public function setSoftware($software)
    {
        $this->software = $software;

        return $this;
    }

    /**
     * Get software
     *
     * @return string
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Set totalAlumnos
     *
     * @param integer $totalAlumnos
     *
     * @return daniel
     */
    public function setTotalAlumnos($totalAlumnos)
    {
        $this->totalAlumnos = $totalAlumnos;

        return $this;
    }

    /**
     * Get totalAlumnos
     *
     * @return int
     */
    public function getTotalAlumnos()
    {
        return $this->totalAlumnos;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return daniel
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return daniel
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
     * @var \Adir\DanielBundle\Entity\Materia
     */
    private $Materia;

    /**
     * @var \Adir\DanielBundle\Entity\Profesores
     */
    private $Profesores;


    /**
     * Set materia
     *
     * @param \Adir\DanielBundle\Entity\Materia $materia
     *
     * @return daniel
     */
    public function setMateria(\Adir\DanielBundle\Entity\Materia $materia = null)
    {
        $this->Materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \Adir\DanielBundle\Entity\Materia
     */
    public function getMateria()
    {
        return $this->Materia;
    }

    /**
     * Set profesores
     *
     * @param \Adir\DanielBundle\Entity\Profesores $profesores
     *
     * @return daniel
     */
    public function setProfesores(\Adir\DanielBundle\Entity\Profesores $profesores = null)
    {
        $this->Profesores = $profesores;

        return $this;
    }

    /**
     * Get profesores
     *
     * @return \Adir\DanielBundle\Entity\Profesores
     */
    public function getProfesores()
    {
        return $this->Profesores;
    }
}
