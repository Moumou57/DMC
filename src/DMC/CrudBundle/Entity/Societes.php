<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societes
 *
 * @ORM\Table(name="societes")
 * @ORM\Entity
 */
class Societes
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
     * @ORM\Column(name="nomsociete", type="string", length=100, nullable=false)
     */
    private $nomsociete;

    /**
     * @var string
     *
     * @ORM\Column(name="nomlegal", type="string", length=100, nullable=false)
     */
    private $nomlegal;

    /**
     * @var string
     *
     * @ORM\Column(name="capitalsocial", type="string", length=5, nullable=false)
     */
    private $capitalsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="iblc", type="string", length=5, nullable=false)
     */
    private $iblc;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", precision=10, scale=0, nullable=false)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="bcee", type="string", length=5, nullable=false)
     */
    private $bcee;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="boitepostale", type="string", length=20, nullable=false)
     */
    private $boitepostale;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=100, nullable=false)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

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

    // NomSociete
    public function setNomSociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;
    }
    public function getNomSociete()
    {
        return $this->nomsociete;
    }

    // NomLegal
    public function setNomLegal($nomlegal)
    {
        $this->nomlegal = $nomlegal;
    }
    public function getNomLegal()
    {
        return $this->nomlegal;
    }

    // CapitalSocial
    public function setCapitalSocial($capitalsocial)
    {
        $this->capitalsocial = $capitalsocial;
    }
    public function getCapitalSocial()
    {
        return $this->capitalsocial;
    }

    // IBLC
    public function setIBLC($iblc)
    {
        $this->iblc = $iblc;
    }
    public function getIBLC()
    {
        return $this->iblc;
    }

    // TVA
    public function setTVA($tva)
    {
        $this->tva = $tva;
    }
    public function getTVA()
    {
        return $this->tva;
    }

    // BCEE
    public function setBCEE($bcee)
    {
        $this->bcee = $bcee;
    }
    public function getBCEE()
    {
        return $this->bcee;
    }

    // Adresse
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    // BoitePostale
    public function setBoitePostale($boitepostale)
    {
        $this->boitepostale = $boitepostale;
    }
    public function getBoitePostale()
    {
        return $this->boitepostale;
    }

    // Telephone
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }

    // Fax
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    public function getFax()
    {
        return $this->fax;
    }

    // SiteWeb
    public function setSiteWeb($siteweb)
    {
        $this->siteweb = $siteweb;
    }
    public function getSiteWeb()
    {
        return $this->siteweb;
    }

    // Email
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

