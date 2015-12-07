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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $version = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="ligne_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ligneId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

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

    /**
     * @var boolean
     *
     * @ORM\Column(name="affprix", type="boolean", nullable=false)
     */
    private $affprix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affqte", type="boolean", nullable=false)
     */
    private $affqte;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return LignesDevis
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set version
     *
     * @param integer $version
     *
     * @return LignesDevis
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set ligneId
     *
     * @param integer $ligneId
     *
     * @return LignesDevis
     */
    public function setLigneId($ligneId)
    {
        $this->ligneId = $ligneId;

        return $this;
    }

    /**
     * Get ligneId
     *
     * @return integer
     */
    public function getLigneId()
    {
        return $this->ligneId;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return LignesDevis
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return LignesDevis
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set positionmaitre
     *
     * @param integer $positionmaitre
     *
     * @return LignesDevis
     */
    public function setPositionmaitre($positionmaitre)
    {
        $this->positionmaitre = $positionmaitre;

        return $this;
    }

    /**
     * Get positionmaitre
     *
     * @return integer
     */
    public function getPositionmaitre()
    {
        return $this->positionmaitre;
    }

    /**
     * Set article
     *
     * @param string $article
     *
     * @return LignesDevis
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return LignesDevis
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return LignesDevis
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
     * Set quantite
     *
     * @param float $quantite
     *
     * @return LignesDevis
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

    /**
     * Set puHt
     *
     * @param float $puHt
     *
     * @return LignesDevis
     */
    public function setPuHt($puHt)
    {
        $this->puHt = $puHt;

        return $this;
    }

    /**
     * Get puHt
     *
     * @return float
     */
    public function getPuHt()
    {
        return $this->puHt;
    }

    /**
     * Set totalHt
     *
     * @param float $totalHt
     *
     * @return LignesDevis
     */
    public function setTotalHt($totalHt)
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * Get totalHt
     *
     * @return float
     */
    public function getTotalHt()
    {
        return $this->totalHt;
    }

    /**
     * Set souligne
     *
     * @param boolean $souligne
     *
     * @return LignesDevis
     */
    public function setSouligne($souligne)
    {
        $this->souligne = $souligne;

        return $this;
    }

    /**
     * Get souligne
     *
     * @return boolean
     */
    public function getSouligne()
    {
        return $this->souligne;
    }

    /**
     * Set gras
     *
     * @param boolean $gras
     *
     * @return LignesDevis
     */
    public function setGras($gras)
    {
        $this->gras = $gras;

        return $this;
    }

    /**
     * Get gras
     *
     * @return boolean
     */
    public function getGras()
    {
        return $this->gras;
    }

    /**
     * Set italique
     *
     * @param boolean $italique
     *
     * @return LignesDevis
     */
    public function setItalique($italique)
    {
        $this->italique = $italique;

        return $this;
    }

    /**
     * Get italique
     *
     * @return boolean
     */
    public function getItalique()
    {
        return $this->italique;
    }

    /**
     * Set affprix
     *
     * @param boolean $affprix
     *
     * @return LignesDevis
     */
    public function setAffprix($affprix)
    {
        $this->affprix = $affprix;

        return $this;
    }

    /**
     * Get affprix
     *
     * @return boolean
     */
    public function getAffprix()
    {
        return $this->affprix;
    }

    /**
     * Set affqte
     *
     * @param boolean $affqte
     *
     * @return LignesDevis
     */
    public function setAffqte($affqte)
    {
        $this->affqte = $affqte;

        return $this;
    }

    /**
     * Get affqte
     *
     * @return boolean
     */
    public function getAffqte()
    {
        return $this->affqte;
    }
}
