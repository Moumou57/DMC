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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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


}

