<?php

namespace TrocBundle\Repository;

/**
 * ReclamationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReclamationRepository extends \Doctrine\ORM\EntityRepository
{
    public function countRec()
    {
        $query=$this->getEntityManager()->createQuery("select COUNT(r.idRec) as nbr ,
          r as obj from TrocBundle:Reclamation as r INNER JOIN AppBundle:User as u where r.idUser=u GROUP BY r.idUser");
        return $query->getResult();
    }
}
