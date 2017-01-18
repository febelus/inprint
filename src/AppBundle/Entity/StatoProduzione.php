<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatoProduzione
 *
 * @ORM\Table(name="stato_produzione")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatoProduzioneRepository")
 */
class StatoProduzione
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
     * @ORM\Column(name="Stato", type="string", length=255, nullable=true)
     */
    private $stato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataAssegnazione", type="datetime", nullable=true)
     */
    private $dataAssegnazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataPresaCarico", type="datetime", nullable=true)
     */
    private $dataPresaCarico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataConclusione", type="datetime", nullable=true)
     */
    private $dataConclusione;

    /**
     * @var int
     *
     * @ORM\Column(name="OperatoreId", type="integer")
     */
    private $operatoreId;

    /**
     * @var int
     *
     * @ORM\Column(name="OrdineId", type="integer")
     */
    private $ordineId;

    /**
     * @var int
     *
     * @ORM\Column(name="FaseProduzioneId", type="integer")
     */
    private $faseProduzioneId;


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
     * Set stato
     *
     * @param string $stato
     *
     * @return StatoProduzione
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
     * Set dataAssegnazione
     *
     * @param \DateTime $dataAssegnazione
     *
     * @return StatoProduzione
     */
    public function setDataAssegnazione($dataAssegnazione)
    {
        $this->dataAssegnazione = $dataAssegnazione;

        return $this;
    }

    /**
     * Get dataAssegnazione
     *
     * @return \DateTime
     */
    public function getDataAssegnazione()
    {
        return $this->dataAssegnazione;
    }

    /**
     * Set dataPresaCarico
     *
     * @param \DateTime $dataPresaCarico
     *
     * @return StatoProduzione
     */
    public function setDataPresaCarico($dataPresaCarico)
    {
        $this->dataPresaCarico = $dataPresaCarico;

        return $this;
    }

    /**
     * Get dataPresaCarico
     *
     * @return \DateTime
     */
    public function getDataPresaCarico()
    {
        return $this->dataPresaCarico;
    }

    /**
     * Set dataConclusione
     *
     * @param \DateTime $dataConclusione
     *
     * @return StatoProduzione
     */
    public function setDataConclusione($dataConclusione)
    {
        $this->dataConclusione = $dataConclusione;

        return $this;
    }

    /**
     * Get dataConclusione
     *
     * @return \DateTime
     */
    public function getDataConclusione()
    {
        return $this->dataConclusione;
    }

    /**
     * Set operatoreId
     *
     * @param integer $operatoreId
     *
     * @return StatoProduzione
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

    /**
     * Set ordineId
     *
     * @param integer $ordineId
     *
     * @return StatoProduzione
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
     * Set faseProduzioneId
     *
     * @param integer $faseProduzioneId
     *
     * @return StatoProduzione
     */
    public function setFaseProduzioneId($faseProduzioneId)
    {
        $this->faseProduzioneId = $faseProduzioneId;

        return $this;
    }

    /**
     * Get faseProduzioneId
     *
     * @return int
     */
    public function getFaseProduzioneId()
    {
        return $this->faseProduzioneId;
    }
}
