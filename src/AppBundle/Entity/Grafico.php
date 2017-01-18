<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grafico
 *
 * @ORM\Table(name="grafico")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GraficoRepository")
 */
class Grafico
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
     * @ORM\Column(name="Nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataNascita", type="date")
     */
    private $dataNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="CodiceFiscale", type="string", length=255, unique=true)
     */
    private $codiceFiscale;

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
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="StudioGraficoID", type="integer")
     */
    private $studioGraficoID;


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
     * Set nome
     *
     * @param string $nome
     *
     * @return Grafico
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Grafico
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set dataNascita
     *
     * @param \DateTime $dataNascita
     *
     * @return Grafico
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;

        return $this;
    }

    /**
     * Get dataNascita
     *
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     *
     * @return Grafico
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;

        return $this;
    }

    /**
     * Get codiceFiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Grafico
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
     * @return Grafico
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Grafico
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Grafico
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Grafico
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set studioGraficoID
     *
     * @param integer $studioGraficoID
     *
     * @return Grafico
     */
    public function setStudioGraficoID($studioGraficoID)
    {
        $this->studioGraficoID = $studioGraficoID;

        return $this;
    }

    /**
     * Get studioGraficoID
     *
     * @return int
     */
    public function getStudioGraficoID()
    {
        return $this->studioGraficoID;
    }
}
