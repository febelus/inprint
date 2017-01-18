<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gruppo_Attributi
 *
 * @ORM\Table(name="gruppo__attributi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Gruppo_AttributiRepository")
 */
class Gruppo_Attributi
{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="GruppoId", type="integer")
     */
    private $gruppoId;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="AttributoId", type="integer")
     */
    private $attributoId;

    /**
     * Set gruppoId
     *
     * @param integer $gruppoId
     *
     * @return Gruppo_Attributi
     */
    public function setGruppoId($gruppoId)
    {
        $this->gruppoId = $gruppoId;

        return $this;
    }

    /**
     * Get gruppoId
     *
     * @return int
     */
    public function getGruppoId()
    {
        return $this->gruppoId;
    }

    /**
     * Set attributoId
     *
     * @param integer $attributoId
     *
     * @return Gruppo_Attributi
     */
    public function setAttributoId($attributoId)
    {
        $this->attributoId = $attributoId;

        return $this;
    }

    /**
     * Get attributoId
     *
     * @return int
     */
    public function getAttributoId()
    {
        return $this->attributoId;
    }
}
