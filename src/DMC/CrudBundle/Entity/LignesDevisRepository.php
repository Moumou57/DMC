<?php
// src/DMC/CrudBundle/Entity/LignesDevissRepository.php

namespace DMC\CrudBundle\Entity;

use Doctrine\ORM\EntityRepository;

class LignesDevisRepository extends EntityRepository
{
  
    public function findAll()
    {
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
    
    public function findByEnteteDevisId($enteteDevisId)
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->where('a.idEntete = :enteteDevisId')
            ->setParameter('enteteDevisId', $enteteDevisId);

        $results = $queryBuilder->getQuery()->getResult();

        // On retourne ces résultats
        return $results;
    }
}