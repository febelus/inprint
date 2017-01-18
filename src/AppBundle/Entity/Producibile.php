<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producibile
 *
 * @ORM\Table(name="producibile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProducibileRepository")
 */
class Producibile
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
     * @ORM\Column(name="Immagine", type="string", length=255)
     */
    private $immagine;

    /**
     * @var int
     *
     * @ORM\Column(name="GruppoId", type="integer")
     */
    private $gruppoId;
    
    /**
     * @var int
     *
     * @ORM\Column(name="CategoriaId", type="integer", nullable=true)
     */
    private $categoriaId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Descrizione", type="string", length=255)
     */
    private $descrizione;

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
     * @return Producibile
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
     * Set immagine
     *
     * @param string $immagine
     *
     * @return Producibile
     */
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    /**
     * Get immagine
     *
     * @return string
     */
    public function getImmagine()
    {
        return $this->immagine;
    }

    /**
     * Set gruppoId
     *
     * @param integer $gruppoId
     *
     * @return Producibile
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
     * Get CategoriaId
     *
     * @return int
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set CategoriaId
     *
     * @param int CategoriaId
     *
     * @return Producibile
     */
    public function setCategoriaId($categoria)
    {
        $this->categoriaId = $categoria;

        return $this;
    }
    
    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Producibile
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

}
