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
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_composant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idComposant;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantite;


    //------------------------------------ Getter / Setter
    // IdArticle
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    // IdComposant
    public function setIdComposant($idComposant)
    {
        $this->idComposant = $idComposant;
    }
    public function getIdComposant()
    {
        return $this->idComposant;
    }

    // Quantite
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
    public function getQuantite()
    {
        return $this->quantite;
    }

}

