<?php

namespace Inventario\Bundle\Entity;

/**
 * equipo
 */
class equipo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $noInventario;

    /**
     * @var string
     */
    private $sO;

    /**
     * @var string
     */
    private $ethernet;

    /**
     * @var string
     */
    private $mac;


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
     * Set noInventario
     *
     * @param integer $noInventario
     *
     * @return equipo
     */
    public function setNoInventario($noInventario)
    {
        $this->noInventario = $noInventario;

        return $this;
    }

    /**
     * Get noInventario
     *
     * @return int
     */
    public function getNoInventario()
    {
        return $this->noInventario;
    }

    /**
     * Set sO
     *
     * @param string $sO
     *
     * @return equipo
     */
    public function setSO($sO)
    {
        $this->sO = $sO;

        return $this;
    }

    /**
     * Get sO
     *
     * @return string
     */
    public function getSO()
    {
        return $this->sO;
    }

    /**
     * Set ethernet
     *
     * @param string $ethernet
     *
     * @return equipo
     */
    public function setEthernet($ethernet)
    {
        $this->ethernet = $ethernet;

        return $this;
    }

    /**
     * Get ethernet
     *
     * @return string
     */
    public function getEthernet()
    {
        return $this->ethernet;
    }

    /**
     * Set mac
     *
     * @param string $mac
     *
     * @return equipo
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }

                public function __toString()
    {
        return (string) $this->noInventario;
    }
}

