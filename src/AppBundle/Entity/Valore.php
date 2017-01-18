<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valore
 *
 * @ORM\Table(name="valore")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ValoreRepository")
 */
class Valore
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
     * @var int
     *
     * @ORM\Column(name="AttributoId", type="integer")
     */
    private $attributoId;


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
     * @return Valore
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
     * Set attributoId
     *
     * @param integer $attributoId
     *
     * @return Valore
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
