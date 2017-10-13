<?php

namespace Adir\DanielBundle\Entity;

/**
 * Profesores
 */
class Profesores
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombres;

    /**
     * @var int
     */
    private $tel;

    /**
     * @var string
     */
    private $eMail;


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
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Profesores
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Profesores
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Profesores
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }
}
