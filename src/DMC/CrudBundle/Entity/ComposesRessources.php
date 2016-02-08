<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComposesRessources
 *
 * @ORM\Table(name="composes_ressources")
 * @ORM\Entity
 */
class ComposesRessources
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
     * @var \Ressources
     *
     * @ORM\ManyToOne(targetEntity="Ressources", inversedBy="lignesArticles")
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var \Ressources
     *
     * @ORM\ManyToOne(targetEntity="Ressources", inversedBy="id")
     * @ORM\Column(name="id_composant", type="integer", nullable=false)
     */
    private $idComposant;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantite;


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
     * Set idArticle
     *
     * @param \DMC\CrudBundle\Entity\Ressources $idArticle
     *
     * @return ComposesRessources
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return \DMC\CrudBundle\Entity\Ressources
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idComposant
     *
     * @param \DMC\CrudBundle\Entity\Ressources $idComposant
     *
     * @return ComposesRessources
     */
    public function setIdComposant($idComposant)
    {
        $this->idComposant = $idComposant;

        return $this;
    }

    /**
     * Get idComposant
     *
     * @return \DMC\CrudBundle\Entity\Ressources
     */
    public function getIdComposant()
    {
        return $this->idComposant;
    }

    /**
     * Set quantite
     *
     * @param float $quantite
     *
     * @return ComposesRessources
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

}
