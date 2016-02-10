<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use \Doctrine\Common\Collections\ArrayCollection as ArrayCollection;
/**
 * Ressources
 *
 * @ORM\Table(name="ressources")
 * @ORM\Entity(repositoryClass="DMC\CrudBundle\Entity\RessourcesRepository")
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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="ComposesRessources", mappedBy="idArticle", cascade={"persist"})
     */
    private $lignesArticles;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="ComposesRessources", mappedBy="idComposant", cascade={"persist"})
     */
    private $lignesComposants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lignesArticles = new ArrayCollection();
        $this->lignesComposants = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Ressources
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Ressources
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Ressources
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Ressources
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set estcompose
     *
     * @param boolean $estcompose
     *
     * @return Ressources
     */
    public function setEstcompose($estcompose)
    {
        $this->estcompose = $estcompose;

        return $this;
    }

    /**
     * Get estcompose
     *
     * @return boolean
     */
    public function getEstcompose()
    {
        return $this->estcompose;
    }

    /**
     * Add lignesArticles
     *
     * @param \DMC\CrudBundle\Entity\ComposesRessources $lignesArticles
     *
     * @return Ressources
     */
    public function addLignesArticle(\DMC\CrudBundle\Entity\ComposesRessources $lignesArticle)
    {
        $this->lignesArticles[] = $lignesArticle;

        $lignesArticle->setIdArticle($this);

        return $this;
    }

    /**
     * Remove lignesArticles
     *
     * @param \DMC\CrudBundle\Entity\ComposesRessources $lignesArticles
     */
    public function removeLignesArticle(\DMC\CrudBundle\Entity\ComposesRessources $lignesArticle)
    {
        $this->lignesArticles->removeElement($lignesArticle);
    }
    
    /**
     * Get lignesArticles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLignesArticles()
    {
        return $this->lignesArticles;
    }
    
    /**
     * Add lignesComposants
     *
     * @param \DMC\CrudBundle\Entity\ComposesRessources $lignesComposants
     *
     * @return Ressources
     */
    public function addlignesComposant(\DMC\CrudBundle\Entity\ComposesRessources $lignesComposant)
    {
        $this->lignesComposants[] = $lignesComposant;

        $lignesComposant->setIdComposant($this);

        return $this;
    }

    /**
     * Remove lignesComposants
     *
     * @param \DMC\CrudBundle\Entity\ComposesRessources $lignesComposants
     */
    public function removelignesComposant(\DMC\CrudBundle\Entity\ComposesRessources $lignesComposant)
    {
        $this->lignesComposants->removeElement($lignesComposant);
    }
    
     /**
     * Get lignesComposants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getlignesComposants()
    {
        return $this->lignesComposants;
    }
}
