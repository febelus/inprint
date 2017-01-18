<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prinkino
 *
 * @ORM\Table(name="prinkino")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrinkinoRepository")
 */
class Prinkino
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
     * @ORM\Column(name="Mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="string", length=255, unique=true)
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
     * @ORM\Column(name="Fac", type="string", length=255, unique=true)
     */
    private $fac;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="PIva", type="string", length=255, unique=true)
     */
    private $pIva;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="CAP", type="integer")
     */
    private $cAP;


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
     * @return Prinkino
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Prinkino
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Prinkino
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
     * @return Prinkino
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
     * @return Prinkino
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
     * @return Prinkino
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
     * Set fac
     *
     * @param string $fac
     *
     * @return Prinkino
     */
    public function setFac($fac)
    {
        $this->fac = $fac;

        return $this;
    }

    /**
     * Get fac
     *
     * @return string
     */
    public function getFac()
    {
        return $this->fac;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Prinkino
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
     * Set pIva
     *
     * @param string $pIva
     *
     * @return Prinkino
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
     * Set password
     *
     * @param string $password
     *
     * @return Prinkino
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
     * Set cAP
     *
     * @param integer $cAP
     *
     * @return Prinkino
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
}
