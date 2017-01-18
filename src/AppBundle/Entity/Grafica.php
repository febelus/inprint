<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grafica
 *
 * @ORM\Table(name="grafica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GraficaRepository")
 */
class Grafica
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
     * @var text
     *
     * @ORM\Column(name="Bozza", type="text")
     */
    private $bozza;
    
    /**
     * @var string
     *
     * @ORM\Column(name="File", type="string", length=255)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="Stato", type="string", length=255)
     */
    private $stato;

    /**
     * @var int
     *
     * @ORM\Column(name="GraficoId", type="integer")
     */
    private $graficoId;
    
      /**
     * @var int
     *
     * @ORM\Column(name="StudioGraficoId", type="integer")
     */
    private $studioGraficoId;


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
     * Set file
     *
     * @param string $file
     *
     * @return Grafica
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * Set file
     *
     * @param string $bozza
     *
     * @return Grafica
     */
    public function setBozza($bozza)
    {
        $this->bozza = $bozza;

        return $this;
    }

    /**
     * Get bozza
     *
     * @return text
     */
    public function getBozza()
    {
        return $this->bozza;
    }
    
    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return Grafica
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
     * Set graficoId
     *
     * @param integer $graficoId
     *
     * @return Grafica
     */
    public function setGraficoId($graficoId)
    {
        $this->graficoId = $graficoId;

        return $this;
    }

    /**
     * Get graficoId
     *
     * @return int
     */
    public function getGraficoId()
    {
        return $this->graficoId;
    }
    

    /**
     * Set studioGraficoId
     *
     * @param integer $studioGraficoId
     *
     * @return Grafica
     */
    public function setStudioGraficoId($studioGraficoId)
    {
        $this->studioGraficoId = $studioGraficoId;

        return $this;
    }

    /**
     * Get studioGraficoId
     *
     * @return integer
     */
    public function getStudioGraficoId()
    {
        return $this->studioGraficoId;
    }
}
