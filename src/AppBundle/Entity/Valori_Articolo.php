<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valori_Articolo
 *
 * @ORM\Table(name="valori__articolo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Valori_ArticoloRepository")
 */
class Valori_Articolo
{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="ArticoloId", type="integer")
     */
    private $articoloId;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="ValoreId", type="integer")
     */
    private $valoreId;

    /**
     * Set articoloId
     *
     * @param integer $articoloId
     *
     * @return Valori_Articolo
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

    /**
     * Set valoreId
     *
     * @param integer $valoreId
     *
     * @return Valori_Articolo
     */
    public function setValoreId($valoreId)
    {
        $this->valoreId = $valoreId;

        return $this;
    }

    /**
     * Get valoreId
     *
     * @return int
     */
    public function getValoreId()
    {
        return $this->valoreId;
    }
}
