<?php

namespace EventBundle\Repository;

class ParticipantRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUserPerEvent($eventID)
    {
        $query=$this->getEntityManager()->createQuery("select u from EventBundle:Participant u where u.idEvent='$eventID'");
            return $query->getResult();
    }

    public function verifyJoin($idUser, $idEvent)
    {
        $query=$this->getEntityManager()->createQuery("select u from EventBundle:Participant u WHERE u.idEvent= :idevent AND u.idUser= :iduser");
        $query->setParameter(':idevent',$idEvent);
        $query->setParameter(':iduser', $idUser);

        return $query->getResult();
    }

    public function getMeId($idevent,$iduser)
    {
        $query=$this->getEntityManager()->createQuery("select u from EventBundle:Participant u WHERE u.idEvent= '$idevent' AND u.idUser='$iduser'");
        return $query->getResult();
    }

    public function countParticipants($idevent)
    {
        $query=$this->getEntityManager()->createQuery("select count(u.idUser) as n from EventBundle:Participant u where u.idEvent='$idevent' group by ");
        return $query->getResult();
    }

    public function getMyEvents($id)
    {
        $query=$this->getEntityManager()->createQuery("select u from EventBundle:Participant u where u.idUser='$id'");
        return $query->getResult();
    }
    public function CountEvents()
    {
        $query=$this->getEntityManager()->createQuery("select count(u.idUser) as nbr,u as ev from EventBundle:Participant u group by u.idEvent");
        return $query->getResult();
    }
    public function CountByEvent($id)
    {
        $query=$this->getEntityManager()->createQuery("select count(u.idUser) as nbr from EventBundle:Participant u where u.idEvent=$id ");
        return $query->getResult();
    }


}
