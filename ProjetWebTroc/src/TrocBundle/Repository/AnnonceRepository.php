<?php

namespace TrocBundle\Repository;

/**
 * AnnonceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{
    public function myfindall($id)
    {
        $query=$this->getEntityManager()->createQuery("select a from TrocBundle:Annonce a where a.idAnnonce=$id");

        return $query->getResult();
    }

    public function findMyCart($id)
    {
        $query=$this->getEntityManager()->createQuery("select a from TrocBundle:Annonce a where a.idcommande=$id");

        return $query->getResult();
    }

    public function calculAnnoncesPosté($idClient){
        $query=$this->getEntityManager()->createQuery("select count (a) from TrocBundle:Annonce a inner join 
        TrocBundle:Items i where i.idUser=$idClient and a.iditems=i.iditems");
        return $query->getResult();
    }

    public function calculAnnoncesVendu($idClient){
        $query=$this->getEntityManager()->createQuery("select count (a) from TrocBundle:Annonce a inner join 
        TrocBundle:Items i where i.idUser=$idClient and a.iditems=i.iditems and a. idcommande != 0 ");
        return $query->getResult();
    }

    public function findMyAnnonces($id)
    {
        $query=$this->getEntityManager()->createQuery("select a from TrocBundle:Annonce a where a.idcommande IS NULL ");

        return $query->getResult();
    }

}
