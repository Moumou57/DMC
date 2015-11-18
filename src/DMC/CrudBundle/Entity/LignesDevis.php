<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignesDevis
 *
 * @ORM\Table(name="lignes_devis")
 * @ORM\Entity
 */
class LignesDevis
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
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="positionmaitre", type="integer", nullable=false)
     */
    private $positionmaitre;

    /**
     * @var string
     *
     * @ORM\Column(name="article", type="string", length=100, nullable=false)
     */
    private $article;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=20, nullable=false)
     */
    private $unite;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="pu_ht", type="float", precision=10, scale=0, nullable=false)
     */
    private $puHt;

    /**
     * @var float
     *
     * @ORM\Column(name="total_ht", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalHt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="souligne", type="boolean", nullable=false)
     */
    private $souligne = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gras", type="boolean", nullable=false)
     */
    private $gras = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="italique", type="boolean", nullable=false)
     */
    private $italique = '0';

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

    // Position
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }

    // PositionMaitre
    public function setPositionMaitre($positionmaitre)
    {
        $this->positionmaitre = $positionmaitre;
    }
    public function getPositionMaitre()
    {
        return $this->positionmaitre;
    }

    // Article
    public function setArticle($article)
    {
        $this->article = $article;
    }
    public function getArticle()
    {
        return $this->article;
    }

    // Libelle
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    public function getLibelle()
    {
        return $this->libelle;
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

    // Quantite
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }
    public function getQuantite()
    {
        return $this->quantite;
    }

    // PU_HT
    public function setPU_HT($puHt)
    {
        $this->puHt = $puHt;
    }
    public function getPU_HT()
    {
        return $this->puHt;
    }

    // Total_HT
    public function setTotal_HT($totalHt)
    {
        $this->totalHt = $totalHt;
    }
    public function getTotal_HT()
    {
        return $this->totalHt;
    }

    // Souligne
    public function setSouligne($souligne)
    {
        $this->souligne = $souligne;
    }
    public function getSouligne()
    {
        return $this->souligne;
    }

    // Gras
    public function setGras($gras)
    {
        $this->gras = $gras;
    }
    public function getGras()
    {
        return $this->gras;
    }

    // Italique
    public function setItalique($italique)
    {
        $this->italique = $italique;
    }
    public function getItalique()
    {
        return $this->italique;
    }
}

