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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\DateTime;
use TrocBundle\Entity\Event;
use EventBundle\Entity\Participant;

class EventController extends Controller
{
    public function listEventAction(Request $request)
    {
        $error = null;
        if ($this->getUser() != null) {
            $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
            //$events = $this->getDoctrine()->getRepository(Participant::class)->CountEvents();
            $current = new \DateTime ("now");
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $events, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10 /*limit per page*/);

            if (isset($_GET['join']))
            {
                $idEvent = $_GET['id'];
                $reserve = new Participant();

                $verify = $this->getDoctrine()->getManager()->getRepository(Participant::class)
                    ->verifyJoin($this->getUser()->getId(), $idEvent);
                if ($verify == null)
                {
                    //die('does not exist');
                    $reserve->setIdUser($this->getUser()->getId());
                    //$reserve->getIdUser()
                    $event = $this->getDoctrine()->getRepository(Event::class)->find($idEvent);

                    $reserve->setIdEvent($event);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($reserve);
                    $em->flush();
                    $em = $this->getDoctrine()->getManager();
                    $event = $em->getRepository(Event::class)->find($idEvent);
                    $event->setNbr($event->getNbr()-1);

                    $em->flush();
                    $error = 1;

                } else
                    {
                    $error = 2;
                }
            }
            return $this->render('@Event/Event/list.html.twig', array(
                'events' => $pagination,
                'error' => $error,
                'current' => $current,

            ));

        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }
    public function listEventMAction()
    {

        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();

//        $query = $this->getDoctrine()->getManager()->createQuery("Select R from TrocBundle:Event R where R.date >= :today");
//        $query = $this->getDoctrine()->getManager()->createQuery("Select R from TrocBundle:Event R where R.date >= :today");
//        $query->setParameter('today', new \DateTime());


        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($events);
        return new JsonResponse($formatted);

    }

    public function createEventAction(Request $request)
    {
        if ($this->getUser() != null) {
            $event = new Event();
            $userID = $this->getUser()->getId();
            $form = $this->createForm(EventType::class, $event);
            $form = $form->handleRequest($request);
            if ($form->isValid()) {
                /**
                 * @var UploadedFile $file
                 */
                $file = $event->getImage();
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($this->getParameter('image_directory'), $fileName);
                $event->setImage($fileName);
                $em = $this->getDoctrine()->getManager();
                $event->setCreatedby($userID);
                $event->setNbr($event->getMax());
                $em->persist($event);
                $em->flush();

            }
            return $this->render('@Event/Event/CreateEvent.html.twig', array('form' => $form->createView()));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }

    public function deleteEventAction($id)
    {
        if ($this->getUser() != null) {
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository(Event::class)->find($id);
            $em->remove($event);
            $em->flush();

            return $this->redirectToRoute('event_listEvent');
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }

    public function deleteEventMAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($id);
        $em->remove($event);
        $em->flush();

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($event);
        return new JsonResponse($formatted);

    }

    public function choiceHomeAction()
    {
        if ($this->getUser() != null) {
            return $this->render('@Event/Event/choiceHome.html.twig');
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }

    }


    public function participateAction(Request $request, Event $event)
    {

        $user = $this->getUser();
        $idUser = $user->getId();
        $idEvent = $event->getId();

        $partic = new Participant();
        $partic->setIdEvent($idEvent);
        $partic->setIdUser($idUser);
        if ($user != null) {
            $form = $this->getDoctrine()->getManager();
            $form->persist($partic);
            $form->flush();

        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function myEventAction(Request $request)
    {
        if ($this->getUser() != null)
        {
            $id = $this->getUser()->getId();
            $events = $this->getDoctrine()->getRepository(Event::class)->findByGetMyEvents($id);
//            die('sd: '.$events);
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $events, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                5 /*limit per page*/);

            return $this->render('@Event/Event/myEvents.html.twig', array(
                'events' => $pagination));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function myEventMAction($id)
    {
        $events = $this->getDoctrine()->getRepository(Event::class)->findByMyEvent($id);

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($events);
        return new JsonResponse($formatted);
    }


    public function goingToAction()
    {
        if ($this->getUser() != null)
        {
            $user = $this->getUser()->getId();
            $events = $this->getDoctrine()->getRepository(Event::class)->getMyListEvents($user);
            $part = $this->getDoctrine()->getRepository(Participant::class)->findAll();
            return $this->render('@Event/Event/goingTo.html.twig', array('events' => $events, 'part'=>$part));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function goingToMAction($id)
    {
        $events = $this->getDoctrine()->getRepository(Participant::class)->findByGetGoing($id);
//        $part = $this->getDoctrine()->getRepository(Participant::class)->findAll();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($events);
        return new JsonResponse($formatted);
    }

    public function deleteParticipant($id)
    {
        $em=$this->getDoctrine()->getManager();
        $disjoin=$em->getRepository(Participant::class)->find($id);
        $em->remove($disjoin);
        $em->flush();
        return $this->redirectToRoute('event_goingTo');
    }

    public function updateEventAction($id, Request $request)
    {
        if ($this->getUser() != null)
        {
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository(Event::class)->find($id);
            $form = $this->createForm(EventUpdateType::class, $event);
            $form = $form->handleRequest($request);
            if ($form->isValid()) {

                $em->flush();
            }
            return $this->render('@Event/Event/update.html.twig', array('form' => $form->createView()));
        } else {
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function updateEventMAction($id,Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->findOneBy(array('id'=> $id));
//        die(print_r($event));
        $titre = $request->get('titre');
        $description = $request->get('description');
        $max= $request->get('max');
        $location= $request->get('location');
        $date= $request->get('date');
        $image= $request->get('image');
//        die(print_r($description));

        $event->setTitre($titre);
        $event->setDescription($description);
        $event->setMax($max);
        $event->setLocation($location);
        $event->setDate($date);
        $event->setImage($image);

        $em->flush();

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($event);
        return new JsonResponse($formatted);
    }

    public function updateEventNbrAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->findOneBy(array('id'=> $id));
        $event->setNbr($event->getNbr()-1);
        $em->flush();

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($event);
        return new JsonResponse($formatted);
    }

    public function updateEventNbr1Action($id)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->findOneBy(array('id'=> $id));
        $event->setNbr($event->getNbr()+1);
        $em->flush();

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($event);
        return new JsonResponse($formatted);
    }

    public function updatePartAction($id, Request $request)
    {
        if ($this->getUser() != null)
        {
            $em = $this->getDoctrine()->getManager();
            $event = $em->getRepository(Event::class)->find($id);
            $event->setNbr($event->getNbr()-1);

                $em->flush();
            }

    }

    public function searchEventAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $name=$request->get('srch');

            $events=$this->getDoctrine()->getRepository(Event::class)->findBy(array('titre'=>$name));

            //SERIALISATION
            //initialisation
            $se=new Serializer(array(new ObjectNormalizer()));
            //normalize de la liste
            $data=$se->normalize($events);
            return new JsonResponse($data);

        }

        return $this->render('@Event/Event/searchEvent.html.twig');
    }

    public function newCreateAction (Request $request)
    {
        $titre = $request->get('titre');
        $description = $request->get('description');
        $max= $request->get('max');
        $nbr= $request->get('nbr');
        $location= $request->get('location');
        $date= $request->get('date');
        $image= $request->get('image');
        $createdBy = $request->get('createdby');
        $event = new Event();

        $event->setTitre($titre);
        $event->setDescription($description);
        $event->setMax($max);
        $event->setNbr($nbr);
        $event->setLocation($location);
        $event->setDate($date);
        $event->setImage($image);
        $event->setCreatedby($createdBy);

        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();

        $se=new Serializer(array(new ObjectNormalizer()));
        $data=$se->normalize($event);
        return new JsonResponse($data);
    }



}