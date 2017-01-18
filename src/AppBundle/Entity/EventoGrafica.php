<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventoGrafica
 *
 * @ORM\Table(name="evento_grafica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventoGraficaRepository")
 */
class EventoGrafica
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
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="GraficaId", type="integer")
     */
    private $graficaId;


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
     * @return EventoGrafica
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
     * @return EventoGrafica
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
     * @return EventoGrafica
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
     * Set graficaId
     *
     * @param integer $graficaId
     *
     * @return EventoGrafica
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
}
