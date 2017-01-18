<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordine
 *
 * @ORM\Table(name="ordine")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdineRepository")
 */
class Ordine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantita", type="integer", nullable=true)
     */
    private $quantita;

    /**
     * @var int
     *
     * @ORM\Column(name="Sconto", type="integer", nullable=true)
     */
    private $sconto;

    /**
     * @var string
     *
     * @ORM\Column(name="Commento", type="string", length=255, nullable=true)
     */
    private $commento;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="trackNumber", type="string", length=255, nullable=true)
     */
    private $trackNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="BozzaGrafica", type="integer",nullable=true)
     */
    private $bozzaGrafica;

    /**
     * @var int
     *
     * @ORM\Column(name="PrinkinoId", type="integer", nullable=true)
     */
    private $prinkinoId;

    /**
     * @var int
     *
     * @ORM\Column(name="ClienteId", type="integer", nullable=true)
     */
    private $clienteId;

    /**
     * @var int
     *
     * @ORM\Column(name="GraficaId", type="integer", nullable=true)
     */
    private $graficaId;

    /**
     * @var int
     *
     * @ORM\Column(name="ArticoloId", type="integer", nullable=true)
     */
    private $articoloId;
    
    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Ordine
     */
    public function setId($id)
    {
         $this->id=$id;
         return $this;
    }
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Ordine
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
     * Set quantita
     *
     * @param integer $quantita
     *
     * @return Ordine
     */
    public function setQuantita($quantita)
    {
        $this->quantita = $quantita;

        return $this;
    }

    /**
     * Get quantita
     *
     * @return int
     */
    public function getQuantita()
    {
        return $this->quantita;
    }

    /**
     * Set sconto
     *
     * @param integer $sconto
     *
     * @return Ordine
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return int
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set commento
     *
     * @param string $commento
     *
     * @return Ordine
     */
    public function setCommento($commento)
    {
        $this->commento = $commento;

        return $this;
    }

    /**
     * Get commento
     *
     * @return string
     */
    public function getCommento()
    {
        return $this->commento;
    }
    
    
    /**
     * Set trackNumber
     *
     * @param string $trackNumber
     *
     * @return Ordine
     */
    public function settrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;

        return $this;
    }

    /**
     * Get trackNumber
     *
     * @return string
     */
    public function gettrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Set bozzaGrafica
     *
     * @param string $bozzaGrafica
     *
     * @return Ordine
     */
    public function setBozzaGrafica($bozzaGrafica)
    {
        $this->bozzaGrafica = $bozzaGrafica;

        return $this;
    }

    /**
     * Get bozzaGrafica
     *
     * @return string
     */
    public function getBozzaGrafica()
    {
        return $this->bozzaGrafica;
    }

    /**
     * Set prinkinoId
     *
     * @param integer $prinkinoId
     *
     * @return Ordine
     */
    public function setPrinkinoId($prinkinoId)
    {
        $this->prinkinoId = $prinkinoId;

        return $this;
    }

    /**
     * Get prinkinoId
     *
     * @return int
     */
    public function getPrinkinoId()
    {
        return $this->prinkinoId;
    }

    /**
     * Set clienteId
     *
     * @param integer $clienteId
     *
     * @return Ordine
     */
    public function setClienteId($clienteId)
    {
        $this->clienteId = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return int
     */
    public function getClienteId()
    {
        return $this->clienteId;
    }

    /**
     * Set graficaId
     *
     * @param integer $graficaId
     *
     * @return Ordine
     */
    public function setGraficaId($graficaId)
    {
        $this->graficaId = $graficaId;

        return $this;
    }

    /**
     * Get graficaId
     *
     * @return int
     */
    public function getGraficaId()
    {
        return $this->graficaId;
    }

    /**
     * Set articoloId
     *
     * @param integer $articoloId
     *
     * @return Ordine
     */
    public function setArticoloId($articoloId)
    {
        $this->articoloId = $articoloId;

        return $this;
    }

    /**
     * Get articoloId
     *
     * @return int
     */
    public function getArticoloId()
    {
        return $this->articoloId;
    }

}
