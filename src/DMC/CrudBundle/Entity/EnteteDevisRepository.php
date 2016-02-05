<?php
// src/DMC/CrudBundle/Entity/EnteteDevisRepository.php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EnteteDevisRepository extends EntityRepository
{
  
  public function findAll()
  {
    // Méthode 1 : en passant par l'EntityManager
    /*$queryBuilder = $this->_em->createQueryBuilder()
      ->select('a')
      ->from($this->_entityName, 'a')
    ;*/
    // Dans un repository, $this->_entityName est le namespace de l'entité gérée
    // Ici, il vaut donc OC\PlatformBundle\Entity\Advert

    // Méthode 2 : en passant par le raccourci (je recommande)
    $queryBuilder = $this->createQueryBuilder('a');

    // On n'ajoute pas de critère ou tri particulier, la construction
    // de notre requête est finie

    // On récupère la Query à partir du QueryBuilder
    $query = $queryBuilder->getQuery();

    // On récupère les résultats à partir de la Query
    $results = $query->getResult();

    // On retourne ces résultats
    return $results;
  }

  public function getLastNumDevis($societe){
    
    $query = $this->_em
            ->createQuery('SELECT a.numDevis 
                            FROM DMCCrudBundle:EnteteDevis a 
                            WHERE a.idSociete = :societe
                            ORDER BY a.numDevis DESC')
            ->setParameter('societe', $societe)
            ->setMaxResults(1);
    return $query->getOneOrNullResult();
  }
}