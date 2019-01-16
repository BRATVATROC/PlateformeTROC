<?php

namespace EventBundle\Controller;


use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Event;
use EventBundle\Entity\Participant;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ParticipantController extends Controller
{

    public function listParticipantAction()
    {
        $var= $this->getDoctrine()->getManager();
        $events  = $var->getRepository(Event::class)->findAll();

        $participants = $this->getDoctrine()->getRepository(Participant::class)->findAll();

        $users = $this->getDoctrine()->getRepository(\AppBundle\Entity\User::class)->findAll();




        return $this->render('@Event/Participant/participantEvent.html.twig',
            array('participants'=>$participants,'events'=>$events, 'users'=>$users));
    }

    public function listParticipantMAction()
    {
        $var= $this->getDoctrine()->getManager();
        $participants = $this->getDoctrine()->getRepository(Participant::class)->findAll();


        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize(($participants));
        return new JsonResponse($formatted);
    }

    public function deleteParticipantAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $disjoin=$em->getRepository(Participant::class)->find($id);
        $em->remove($disjoin);
        $em->flush();
        return $this->redirectToRoute('event_goingTo');
    }

    public function deleteParticipantMAction($id, Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $disjoin=$em->getRepository(Participant::class)->find($id);
        $em->remove($disjoin);
        $em->flush();
        $participant = new Participant();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($participant);
        return new JsonResponse($formatted);
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



    public function joinAction(Request $request)
    {
        $idUser = $request->get('user');
        $idevent = $request->get("event");

        $event = $this->getDoctrine()->getRepository(Event::class)->findOneBy(['id' => $idevent]);
        $participated = $this->getDoctrine()->getRepository(Participant::class)->verifyJoin($idUser, $idevent);

//        die(print_r($event));

        $nb = $event->getNbr();
        $max = $event->getMax();


        if($participated == null)
        {
            if((int)$nb < (int)$max)
            {
                $event->setNbr((int)$nb +1);

                $participant = new Participant();
                $participant->setIdEvent($event);
                $participant->setIdUser($idUser);

                $em = $this->getDoctrine()->getManager();
                $em->persist($participant);
                $em->flush();

                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($participant);
                return new JsonResponse($formatted);
            }
            else
            {
                $participant = new Participant();
                $participant->setId(0);
                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($participant);
                return new JsonResponse($formatted);
            }
        }
        else
        {
            $participant = new Participant();
            $participant->setId(-1);
            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($participant);
            return new JsonResponse($formatted);
        }
    }

    public function getParticipantAction(Request $request)
    {
        $idUser = $request->get('idUser');
        $idEvent = $request->get('idEvent');
        $var= $this->getDoctrine()->getManager();
        $participant  = $var->getRepository(Participant::class)->findByParticipant($idUser,$idEvent);

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($participant);
        return new JsonResponse($formatted);
    }

}

