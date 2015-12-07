<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnteteDevis
 *
 * @ORM\Table(name="entete_devis")
 * @ORM\Entity
 */
class EnteteDevis
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
     * @ORM\Column(name="numeroclient", type="integer", nullable=false)
     */
    private $numeroclient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomclient", type="string", length=100, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseclient", type="string", length=100, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="intituledevis", type="string", length=100, nullable=false)
     */
    private $intituledevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateimpression", type="datetime", nullable=false)
     */
    private $dateimpression;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuimpression", type="string", length=100, nullable=false)
     */
    private $lieuimpression;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_societe", type="integer", nullable=false)
     */
    private $idSociete;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return EnteteDevis
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
     * @return EnteteDevis
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
     * Set numeroclient
     *
     * @param integer $numeroclient
     *
     * @return EnteteDevis
     */
    public function setNumeroclient($numeroclient)
    {
        $this->numeroclient = $numeroclient;

        return $this;
    }

    /**
     * Get numeroclient
     *
     * @return integer
     */
    public function getNumeroclient()
    {
        return $this->numeroclient;
    }

    /**
     * Set nomclient
     *
     * @param string $nomclient
     *
     * @return EnteteDevis
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set adresseclient
     *
     * @param string $adresseclient
     *
     * @return EnteteDevis
     */
    public function setAdresseclient($adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get adresseclient
     *
     * @return string
     */
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set intituledevis
     *
     * @param string $intituledevis
     *
     * @return EnteteDevis
     */
    public function setIntituledevis($intituledevis)
    {
        $this->intituledevis = $intituledevis;

        return $this;
    }

    /**
     * Get intituledevis
     *
     * @return string
     */
    public function getIntituledevis()
    {
        return $this->intituledevis;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return EnteteDevis
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return EnteteDevis
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateimpression
     *
     * @param \DateTime $dateimpression
     *
     * @return EnteteDevis
     */
    public function setDateimpression($dateimpression)
    {
        $this->dateimpression = $dateimpression;

        return $this;
    }

    /**
     * Get dateimpression
     *
     * @return \DateTime
     */
    public function getDateimpression()
    {
        return $this->dateimpression;
    }

    /**
     * Set lieuimpression
     *
     * @param string $lieuimpression
     *
     * @return EnteteDevis
     */
    public function setLieuimpression($lieuimpression)
    {
        $this->lieuimpression = $lieuimpression;

        return $this;
    }

    /**
     * Get lieuimpression
     *
     * @return string
     */
    public function getLieuimpression()
    {
        return $this->lieuimpression;
    }

    /**
     * Set idSociete
     *
     * @param integer $idSociete
     *
     * @return EnteteDevis
     */
    public function setIdSociete($idSociete)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete
     *
     * @return integer
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
