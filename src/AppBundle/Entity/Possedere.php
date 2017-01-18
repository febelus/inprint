<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Possedere
 *
 * @ORM\Table(name="possedere")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PossedereRepository")
 */
class Possedere
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="OrdineId", type="integer")
     */
    private $ordineId;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="StatoId", type="integer")
     */
    private $statoId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;    

    /**
     * Set ordineId
     *
     * @param integer $ordineId
     *
     * @return Possedere
     */
    public function setOrdineId($ordineId)
    {
        $this->ordineId = $ordineId;

        return $this;
    }

    /**
     * Get ordineId
     *
     * @return int
     */
    public function getOrdineId()
    {
        return $this->ordineId;
    }

    /**
     * Set statoId
     *
     * @param integer $statoId
     *
     * @return Possedere
     */
    public function setStatoId($statoId)
    {
        $this->statoId = $statoId;

        return $this;
    }

    /**
     * Get statoId
     *
     * @return int
     */
    public function getStatoId()
    {
        return $this->statoId;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Possedere
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Possedere
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }    
}
