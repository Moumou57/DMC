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


}

