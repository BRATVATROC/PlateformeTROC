<?php

namespace EventBundle\Controller;

use AppBundle\Entity\User;
use ClassesWithParents\E;
use EventBundle\Form\EventType;
use EventBundle\Form\EventUpdateFormType;
use EventBundle\Form\EventUpdateType;
use EventBundle\Repository\ParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Event;
use EventBundle\Entity\Participant;

class EventController extends Controller
{
    public function listEventAction(Request $request)
    {
        $error = null;
        if ($this->getUser() != null) {
            $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $events, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                5 /*limit per page*/);

            if(isset($_GET['join']))
            {
                $idEvent = $_GET['id'];
                $reserve = new Participant();

                $verify = $this->getDoctrine()
                                ->getManager()
                                ->getRepository(Participant::class)
                                ->verifyJoin($this->getUser()->getId(), $idEvent);
                if($verify == null)
                {
                    //die('does not exist');
                    $reserve->setIdUser($this->getUser()->getId());
                    //$reserve->getIdUser()
                    $reserve->setIdEvent($idEvent);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($reserve);
                    $em->flush();

                    $error = 1;

                }
                else{
                    $error =2;
                }
            }
            return $this->render('@Event/Event/list.html.twig', array(
                'events' => $pagination,
                'error' => $error,

            ));

        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function createEventAction(Request $request)
    {
        $event = new Event();
        $userID = $this->getUser()->getId();
        $form = $this->createForm(EventType::class, $event);
        $form = $form->handleRequest($request);
        if ($form->isValid()) {
            /**
             * @var UploadedFile $file
             */
            $file=$event->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$fileName);
            $event->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $event->setCreatedby($userID);
            $em->persist($event);
            $em->flush();
        }
        return $this->render('@Event/Event/CreateEvent.html.twig', array('form' => $form->createView()));

    }

    public function deleteEventAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Event::class)->find($id);
        $em->remove($event);
        $em->flush();

        return $this->redirectToRoute('event_listEvent');
    }

    public function choiceHomeAction ()
    {
        return $this->render('@Event/Event/choiceHome.html.twig');
    }


    public function participateAction(Request $request, Event $event)
    {

        $user = $this->getUser();
        $idUser = $user->getId();
        $idEvent =  $event->getId();
        die('RR: '.$idEvent );
        $partic = new Participant();
        $partic->setIdEvent($idEvent);
        $partic->setIdUser($idUser);
        if ($user != null) {
            $form = $this->getDoctrine()->getManager();
            $form->persist($partic);
            $form->flush();

        }
        else
        {
            return $this->redirectToRoute('troc_signin');
        }
    }

    public function myEventAction(Request $request)
    {
        if ($this->getUser() != null) {
            $id = $this->getUser()->getId();
            $events = $this->getDoctrine()->getRepository(Event::class)->findBygetMyEvents($id);
//            die('sd: '.$events);
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $events, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                5 /*limit per page*/);

            return $this->render('@Event/Event/myEvents.html.twig', array(
                'events' => $pagination));
        }
        else
        {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function goingToAction ()
    {

        $user = $this->getUser()->getId();
        $events= $this->getDoctrine()->getRepository(Event::class)->getMyListEvents($user);
        return $this->render('@Event/Event/goingTo.html.twig',array('events'=>$events));
    }

    public function updateEventAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Event::class)->find($id);
        $form=$this->createForm(EventUpdateType::class,$event);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {

            $em->flush();
        }
        return $this->render('@Event/Event/update.html.twig', array('form'=>$form->createView()
        // ...
        ));
    }

    public function searchEventAction()
    {
        return $this->render('@Event/Event/searchEvent.html.twig');
    }
}