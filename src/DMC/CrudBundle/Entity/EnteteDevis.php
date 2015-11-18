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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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

    // NumeroClient
    public function setNumeroClient($numeroclient)
    {
        $this->numeroclient = $numeroclient;
    }
    public function getNumeroClient()
    {
        return $this->numeroclient;
    }

    // NomClient
    public function setNomClient($nomclient)
    {
        $this->nomclient = $nomclient;
    }
    public function getNomClient()
    {
        return $this->nomclient;
    }

    // AdresseClient
    public function setAdresseClient($adresseclient)
    {
        $this->adresseclient = $adresseclient;
    }
    public function getAdresseClient()
    {
        return $this->adresseclient;
    }

    // IntituleDevis
    public function setIntituleDevis($intituledevis)
    {
        $this->intituledevis = $intituledevis;
    }
    public function getIntituleDevis()
    {
        return $this->intituledevis;
    }

    // DateCreation
    public function setDateCreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }
    public function getDateCreation()
    {
        return $this->datecreation;
    }

    // Date
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }

    // DateImpression
    public function setDateImpression($dateimpression)
    {
        $this->dateimpression = $dateimpression;
    }
    public function getDateImpression()
    {
        return $this->dateimpression;
    }

    // LieuImpression
    public function setLieuImpression($lieuimpression)
    {
        $this->lieuimpression = $lieuimpression;
    }
    public function getLieuImpression()
    {
        return $this->lieuimpression;
    }
}

