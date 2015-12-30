<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnteteDevis
 *
 * @ORM\Table(name="entete_devis", uniqueConstraints={@ORM\UniqueConstraint(name="U_id_societe", columns={"id_societe", "num_devis", "version"})}, indexes={@ORM\Index(name="numcommande", columns={"num_devis"}), @ORM\Index(name="version", columns={"version"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_societe", columns={"id_societe"})})
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
     * @ORM\Column(name="num_devis", type="integer", nullable=false)
     */
    private $numDevis;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="smallint", nullable=false)
     */
    private $version = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="nomclient", type="string", length=100, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseclient", type="string", length=200, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="villeclient", type="string", length=100, nullable=false)
     */
    private $villeclient;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostalclient", type="string", length=20, nullable=false)
     */
    private $codepostalclient;

    /**
     * @var string
     *
     * @ORM\Column(name="paysclient", type="string", length=100, nullable=false)
     */
    private $paysclient;

    /**
     * @var string
     *
     * @ORM\Column(name="boitepostaleclient", type="string", length=20, nullable=false)
     */
    private $boitepostaleclient;

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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \Societes
     *
     * @ORM\ManyToOne(targetEntity="Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe", referencedColumnName="id")
     * })
     */
    private $idSociete;



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
     * Set numDevis
     *
     * @param integer $numDevis
     *
     * @return EnteteDevis
     */
    public function setNumDevis($numDevis)
    {
        $this->numDevis = $numDevis;

        return $this;
    }

    /**
     * Get numDevis
     *
     * @return integer
     */
    public function getNumDevis()
    {
        return $this->numDevis;
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
     * Set villeclient
     *
     * @param string $villeclient
     *
     * @return EnteteDevis
     */
    public function setVilleclient($villeclient)
    {
        $this->villeclient = $villeclient;

        return $this;
    }

    /**
     * Get villeclient
     *
     * @return string
     */
    public function getVilleclient()
    {
        return $this->villeclient;
    }

    /**
     * Set codepostalclient
     *
     * @param string $codepostalclient
     *
     * @return EnteteDevis
     */
    public function setCodepostalclient($codepostalclient)
    {
        $this->codepostalclient = $codepostalclient;

        return $this;
    }

    /**
     * Get codepostalclient
     *
     * @return string
     */
    public function getCodepostalclient()
    {
        return $this->codepostalclient;
    }

    /**
     * Set paysclient
     *
     * @param string $paysclient
     *
     * @return EnteteDevis
     */
    public function setPaysclient($paysclient)
    {
        $this->paysclient = $paysclient;

        return $this;
    }

    /**
     * Get paysclient
     *
     * @return string
     */
    public function getPaysclient()
    {
        return $this->paysclient;
    }

    /**
     * Set boitepostaleclient
     *
     * @param string $boitepostaleclient
     *
     * @return EnteteDevis
     */
    public function setBoitepostaleclient($boitepostaleclient)
    {
        $this->boitepostaleclient = $boitepostaleclient;

        return $this;
    }

    /**
     * Get boitepostaleclient
     *
     * @return string
     */
    public function getBoitepostaleclient()
    {
        return $this->boitepostaleclient;
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return EnteteDevis
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set idClient
     *
     * @param \DMC\CrudBundle\Entity\Clients $idClient
     *
     * @return EnteteDevis
     */
    public function setIdClient(\DMC\CrudBundle\Entity\Clients $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \DMC\CrudBundle\Entity\Clients
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idSociete
     *
     * @param \DMC\CrudBundle\Entity\Societes $idSociete
     *
     * @return EnteteDevis
     */
    public function setIdSociete(\DMC\CrudBundle\Entity\Societes $idSociete = null)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete
     *
     * @return \DMC\CrudBundle\Entity\Societes
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
