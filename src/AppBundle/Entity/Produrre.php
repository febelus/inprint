<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produrre
 *
 * @ORM\Table(name="produrre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProdurreRepository")
 */
class Produrre
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
     * @var int
     *
     * @ORM\Column(name="FaseProduzioneId", type="integer")
     */
    private $faseProduzioneId;

    /**
     * @var int
     *
     * @ORM\Column(name="ArticoloId", type="integer")
     */
    private $articoloId;


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
     * Set faseProduzioneId
     *
     * @param integer $faseProduzioneId
     *
     * @return Produrre
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

    /**
     * Set articoloId
     *
     * @param integer $articoloId
     *
     * @return Produrre
     */
    public function setArticoloId($articoloId)
    {
        $this->articoloId = $articoloId;

        return $this;
    }

    /**
     * Get articoloId
     *
     * @return int
     */
    public function getArticoloId()
    {
        return $this->articoloId;
    }
}
