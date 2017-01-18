<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventoRichiesta
 *
 * @ORM\Table(name="evento_richiesta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventoRichiestaRepository")
 */
class EventoRichiesta
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
     * @ORM\Column(name="Tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="datetime")
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="OrdineId", type="integer")
     */
    private $ordineId;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return EventoRichiesta
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return EventoRichiesta
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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return EventoRichiesta
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
     * Set ordineId
     *
     * @param integer $ordineId
     *
     * @return EventoRichiesta
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
}
