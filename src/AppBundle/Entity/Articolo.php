<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articolo
 *
 * @ORM\Table(name="articolo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticoloRepository")
 */
class Articolo
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
     * @var string
     *
     * @ORM\Column(name="Denominazione", type="string", length=255)
     */
    private $denominazione;

    /**
     * @var float
     *
     * @ORM\Column(name="PrezzoVendita", type="float")
     */
    private $prezzoVendita;

    /**
     * @var float
     *
     * @ORM\Column(name="PrezzoPrinkino", type="float")
     */
    private $prezzoPrinkino;

    /**
     * @var int
     *
     * @ORM\Column(name="ProducibileId", type="integer")
     */
    private $producibileId;


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
     * Set denominazione
     *
     * @param string $denominazione
     *
     * @return Articolo
     */
    public function setDenominazione($denominazione)
    {
        $this->denominazione = $denominazione;

        return $this;
    }

    /**
     * Get denominazione
     *
     * @return string
     */
    public function getDenominazione()
    {
        return $this->denominazione;
    }

    /**
     * Set prezzoVendita
     *
     * @param float $prezzoVendita
     *
     * @return Articolo
     */
    public function setPrezzoVendita($prezzoVendita)
    {
        $this->prezzoVendita = $prezzoVendita;

        return $this;
    }

    /**
     * Get prezzoVendita
     *
     * @return float
     */
    public function getPrezzoVendita()
    {
        return $this->prezzoVendita;
    }

    /**
     * Set prezzoPrinkino
     *
     * @param float $prezzoPrinkino
     *
     * @return Articolo
     */
    public function setPrezzoPrinkino($prezzoPrinkino)
    {
        $this->prezzoPrinkino = $prezzoPrinkino;

        return $this;
    }

    /**
     * Get prezzoPrinkino
     *
     * @return float
     */
    public function getPrezzoPrinkino()
    {
        return $this->prezzoPrinkino;
    }

    /**
     * Set producibileId
     *
     * @param integer $producibileId
     *
     * @return Articolo
     */
    public function setProducibileId($producibileId)
    {
        $this->producibileId = $producibileId;

        return $this;
    }

    /**
     * Get producibileId
     *
     * @return int
     */
    public function getProducibileId()
    {
        return $this->producibileId;
    }

}
