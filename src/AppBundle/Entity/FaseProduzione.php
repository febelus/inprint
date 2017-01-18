<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaseProduzione
 *
 * @ORM\Table(name="fase_produzione")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FaseProduzioneRepository")
 */
class FaseProduzione
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
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="Stato", type="string", length=255)
     */
    private $stato;

    /**
     * @var int
     *
     * @ORM\Column(name="OperatoreId", type="integer")
     */
    private $operatoreId;


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
     * @return FaseProduzione
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return FaseProduzione
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

    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return FaseProduzione
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set operatoreId
     *
     * @param integer $operatoreId
     *
     * @return FaseProduzione
     */
    public function setOperatoreId($operatoreId)
    {
        $this->operatoreId = $operatoreId;

        return $this;
    }

    /**
     * Get operatoreId
     *
     * @return int
     */
    public function getOperatoreId()
    {
        return $this->operatoreId;
    }
}
