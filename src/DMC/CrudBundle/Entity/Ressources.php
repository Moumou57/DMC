<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressources
 *
 * @ORM\Table(name="ressources")
 * @ORM\Entity
 */
class Ressources
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=100, nullable=false)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=10, nullable=false)
     */
    private $unite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estcompose", type="boolean", nullable=false)
     */
    private $estcompose = false;

    //------------------------------------ Getter / Setter
    // ID
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    // Designation
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }
    public function getDesignation()
    {
        return $this->designation;
    }

    // Famille
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }
    public function getFamille()
    {
        return $this->famille;
    }

    // Unite
    public function setUnite($unite)
    {
        $this->unite = $unite;
    }
    public function getUnite()
    {
        return $this->unite;
    }

    // Prix
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    // EstComposé
    public function setEstCompose($estcompose)
    {
        $this->estcompose = $estcompose;
    }
    public function getEstCompose()
    {
        return $this->estcompose;
    }
}

