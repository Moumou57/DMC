<?php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassificationsRessources
 *
 * @ORM\Table(name="classifications_ressources")
 * @ORM\Entity
 */
class ClassificationsRessources
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
     * @ORM\Column(name="designation", type="string", length=100, nullable=false)
     */
    private $designation;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFamille", type="integer", nullable=true)
     */
    private $idfamille;

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
     * Set designation
     *
     * @param string $designation
     *
     * @return ClassificationsRessources
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set idfamille
     *
     * @param integer $idfamille
     *
     * @return ClassificationsRessources
     */
    public function setIdfamille($idfamille)
    {
        $this->idfamille = $idfamille;

        return $this;
    }

    /**
     * Get idfamille
     *
     * @return integer
     */
    public function getIdfamille()
    {
        return $this->idfamille;
    }
}
