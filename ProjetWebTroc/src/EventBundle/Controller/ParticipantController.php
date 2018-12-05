<?php

namespace EventBundle\Controller;


use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EventBundle\Repository\ParticipantRepository;
use TrocBundle\Entity\Event;
use EventBundle\Entity\Participant;

class ParticipantController extends Controller
{

    public function listParticipantAction()
    {
        $var= $this->getDoctrine()->getManager();
        $events  = $var->getRepository(Event::class)->findAll();

        $participants = $this->getDoctrine()->getRepository(Participant::class)->findAll();

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('@Event/Participant/participantEvent.html.twig',
            array('participants'=>$participants,'events'=>$events, 'users'=>$users));
    }

    public function deleteParticipant($id)
    {
        $em=$this->getDoctrine()->getManager();
        $disjoin=$em->getRepository(Participant::class)->find($id);
        $em->remove($disjoin);
        $em->flush();
        $this->redirectToRoute('listParticipant');
    }

    public function adminParticipantAction()
    {
        $var= $this->getDoctrine()->getManager();
        $events  = $var->getRepository(Event::class)->findAll();

        $participants = $this->getDoctrine()->getRepository(Participant::class)->findAll();

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('@Event/Participant/adminParticipant.html.twig',
            array('participants'=>$participants,'events'=>$events, 'users'=>$users));
    }
}