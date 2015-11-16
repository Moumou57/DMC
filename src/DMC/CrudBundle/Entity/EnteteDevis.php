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


}

