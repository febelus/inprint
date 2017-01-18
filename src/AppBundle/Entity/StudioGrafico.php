<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudioGrafico
 *
 * @ORM\Table(name="studio_grafico")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudioGraficoRepository")
 */
class StudioGrafico
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
     * @ORM\Column(name="Denominazione", type="string", length=255, unique=true)
     */
    private $denominazione;

    /**
     * @var string
     *
     * @ORM\Column(name="PIva", type="string", length=255, unique=true)
     */
    private $pIva;

    /**
     * @var string
     *
     * @ORM\Column(name="Via", type="string", length=255)
     */
    private $via;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroCivico", type="string", length=255)
     */
    private $numeroCivico;

    /**
     * @var string
     *
     * @ORM\Column(name="Citta", type="string", length=255)
     */
    private $citta;

    /**
     * @var int
     *
     * @ORM\Column(name="Cap", type="integer")
     */
    private $cap;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=255, unique=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255, nullable=true, unique=true)
     */
    private $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="Capacita", type="integer")
     */
    private $capacita;

    /**
     * @var int
     *
     * @ORM\Column(name="Voto", type="integer")
     */
    private $voto;


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
     * @return StudioGrafico
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
     * Set pIva
     *
     * @param string $pIva
     *
     * @return StudioGrafico
     */
    public function setPIva($pIva)
    {
        $this->pIva = $pIva;

        return $this;
    }

    /**
     * Get pIva
     *
     * @return string
     */
    public function getPIva()
    {
        return $this->pIva;
    }

    /**
     * Set via
     *
     * @param string $via
     *
     * @return StudioGrafico
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set numeroCivico
     *
     * @param string $numeroCivico
     *
     * @return StudioGrafico
     */
    public function setNumeroCivico($numeroCivico)
    {
        $this->numeroCivico = $numeroCivico;

        return $this;
    }

    /**
     * Get numeroCivico
     *
     * @return string
     */
    public function getNumeroCivico()
    {
        return $this->numeroCivico;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return StudioGrafico
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set cap
     *
     * @param integer $cap
     *
     * @return StudioGrafico
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return int
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return StudioGrafico
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return StudioGrafico
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return StudioGrafico
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set capacita
     *
     * @param integer $capacita
     *
     * @return StudioGrafico
     */
    public function setCapacita($capacita)
    {
        $this->capacita = $capacita;

        return $this;
    }

    /**
     * Get capacita
     *
     * @return int
     */
    public function getCapacita()
    {
        return $this->capacita;
    }

    /**
     * Set voto
     *
     * @param integer $voto
     *
     * @return StudioGrafico
     */
    public function setVoto($voto)
    {
        $this->voto = $voto;

        return $this;
    }

    /**
     * Get voto
     *
     * @return int
     */
    public function getVoto()
    {
        return $this->voto;
    }
}
