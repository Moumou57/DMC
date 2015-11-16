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
     * @ORM\Column(name="id_famille", type="integer", nullable=false)
     */
    private $idFamille;


}

