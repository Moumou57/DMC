<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=20, nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=100, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="boitepostal", type="string", length=20, nullable=false)
     */
    private $boitepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=false)
     */
    private $telephone;

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

    // Nom
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
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

    // Ville
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    public function getVille()
    {
        return $this->ville;
    }

    // CodePostal
    public function setCodePostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }
    public function getCodePostal()
    {
        return $this->codepostal;
    }

    // Pays
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
    public function getPays()
    {
        return $this->pays;
    }

    // BoitePostale
    public function setBoitePostal($boitepostal)
    {
        $this->boitepostal = $boitepostal;
    }
    public function getBoitePostal()
    {
        return $this->boitepostal;
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

