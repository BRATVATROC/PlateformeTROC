<?php

namespace TrocBundle\Repository;

use Symfony\Component\Validator\Constraints\DateTime;

class EventRepository extends \Doctrine\ORM\EntityRepository
{

    public function findBygetMyEvents ($id)
    {
        $query=$this->getEntityManager()->createQuery("select u from TrocBundle:Event u where u.createdby='$id' order by u.date DESC ");
        return $query->getResult();
    }

    public function findByGoingTo($id)
    {
        $query=$this->getEntityManager()->createQuery("select u from EventBundle:Participant u where u.idUser='$id' and u.idEvent");
        return $query->getResult();
    }

    public function getMyListEvents($id)
    {
        $query=$this->getEntityManager()->createQuery("select e from EventBundle:Participant e where e.idUser =$id");
//            ->setParameter(':id', $id);
        return $query->getResult();
    }
}