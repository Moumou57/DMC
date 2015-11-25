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
     * @ORM\Column(name="capitalsocial", type="string", length=50, nullable=false)
     */
    private $capitalsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="iblc", type="string", length=50, nullable=false)
     */
    private $iblc;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="string", length=50, nullable=false)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="bcee", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="codepostal", type="string", length=10, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

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

    /**
     * @var string
     *
     * @ORM\Column(name="imagepath", type="string", length=1024, nullable=false)
     */
    private $imagepath;



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
     * Set nomsociete
     *
     * @param string $nomsociete
     *
     * @return Societes
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set nomlegal
     *
     * @param string $nomlegal
     *
     * @return Societes
     */
    public function setNomlegal($nomlegal)
    {
        $this->nomlegal = $nomlegal;

        return $this;
    }

    /**
     * Get nomlegal
     *
     * @return string
     */
    public function getNomlegal()
    {
        return $this->nomlegal;
    }

    /**
     * Set capitalsocial
     *
     * @param string $capitalsocial
     *
     * @return Societes
     */
    public function setCapitalsocial($capitalsocial)
    {
        $this->capitalsocial = $capitalsocial;

        return $this;
    }

    /**
     * Get capitalsocial
     *
     * @return string
     */
    public function getCapitalsocial()
    {
        return $this->capitalsocial;
    }

    /**
     * Set iblc
     *
     * @param string $iblc
     *
     * @return Societes
     */
    public function setIblc($iblc)
    {
        $this->iblc = $iblc;

        return $this;
    }

    /**
     * Get iblc
     *
     * @return string
     */
    public function getIblc()
    {
        return $this->iblc;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Societes
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set bcee
     *
     * @param string $bcee
     *
     * @return Societes
     */
    public function setBcee($bcee)
    {
        $this->bcee = $bcee;

        return $this;
    }

    /**
     * Get bcee
     *
     * @return string
     */
    public function getBcee()
    {
        return $this->bcee;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societes
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set boitepostale
     *
     * @param string $boitepostale
     *
     * @return Societes
     */
    public function setBoitepostale($boitepostale)
    {
        $this->boitepostale = $boitepostale;

        return $this;
    }

    /**
     * Get boitepostale
     *
     * @return string
     */
    public function getBoitepostale()
    {
        return $this->boitepostale;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Societes
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Societes
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Societes
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Societes
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     *
     * @return Societes
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Societes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set imagepath
     *
     * @param string $imagepath
     *
     * @return Societes
     */
    public function setImagepath($imagepath)
    {
        $this->imagepath = $imagepath;

        return $this;
    }

    /**
     * Get imagepath
     *
     * @return string
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }
}
