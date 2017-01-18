<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="CodiceFiscale", type="string", length=20, unique=true)
     */
    private $codiceFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=255)
     */
    private $telefono;

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
     * @ORM\Column(name="CAP", type="integer")
     */
    private $cAP;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=20, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=25, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Note", type="string", length=255)
     */
    private $note;
    
    /**
     * @var int
     *
     * @ORM\Column(name="Fax", type="string", length=255)
     */
    private $fax;
    
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Set via
     *
     * @param string $via
     *
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Set cAP
     *
     * @param integer $cAP
     *
     * @return Cliente
     */
    public function setCAP($cAP)
    {
        $this->cAP = $cAP;

        return $this;
    }

    /**
     * Get cAP
     *
     * @return int
     */
    public function getCAP()
    {
        return $this->cAP;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Cliente
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
     * @return Cliente
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Cliente
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
     * Set note
     *
     * @param string $note
     *
     * @return Cliente
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
    
    /**
     * Set fax
     *
     * @param string $fax     *
     * @return Cliente
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
}
