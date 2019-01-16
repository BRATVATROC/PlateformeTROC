<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Commentaire;
use TrocBundle\Entity\Grosmots;
use TrocBundle\Form\Commentaire1Type;
use TrocBundle\Form\CommentaireType;
use AppBundle\Entity\User;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CommentaireController extends Controller
{
    public function  readcAction()
    {
        $commentaires=$this->getDoctrine()->getRepository(Commentaire::class)->findAll();
        return $commentaires;
    }
    public function  readByAnnonceAction($idA)
    {
        $commentaires=$this->getDoctrine()->getRepository(Commentaire::class)->getByAnnonce($idA);
        return $commentaires;
    }
    public function  readByAnnonceMAction(Request $request)
    {
        $idA=$request->get('id');
        $commentaires=$this->getDoctrine()->getRepository(Commentaire::class)->getByAnnonce($idA);
        //return $commentaires;
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);
    }


    public function createcAction(Request $request)
    {
        //1-preparer le formulaire
        //1-a passer un objet vide car la methode createForm prend en parametre cet objet
        $commentaire= new Commentaire();
        //1.b creer le formulaire
        $comm=$request->get('contenu');
        if($comm !=null)
        {$commentaire->setCommentaire($comm);
        $commentaire->setIdCommentaire($request->get('idCommentaire'));

        }
        $idC=$request->get('idCommentaire');

        $form=$this->createForm(CommentaireType::class,$commentaire);
        $form=$form->handleRequest($request);
        $idA=$request->get('idAnnonce');
        $mots=$this->getDoctrine()->getRepository(Grosmots::class)->findAll();
        $commentaires=$this->readByAnnonceAction($idA);
        if($form->isValid()&&$form->isSubmitted()&&$comm==null)
        {   //Recuperer Id Annonce


            $annonce=$this->getDoctrine()->getRepository(Annonce::class)->find($idA);
            $commentaire->setIdAnnonce($annonce);
            $user=$this->getUser();
            $commentaire->setIdUser($user);
            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            $a=$this->getDoctrine()->getRepository(Annonce::class);
            $commentaires=$this->readByAnnonceAction($idA);
            //vider le formulaire apres l'ajout dans la DB
            $vide=new Commentaire();
            $form=$this->createForm(CommentaireType::class,$vide);
            return $this->render('@Troc/Commentaire/createc.html.twig', array(
                'form' => $form->createView(),'commentaires'=>$commentaires,'update'=>$comm,'idCommentaire'=>$idC
            ));


        }
        return $this->render('@Troc/Commentaire/createc.html.twig', array(
            'form' => $form->createView(),'commentaires'=>$commentaires,'mots'=>$mots,'update'=>$comm,'idCommentaire'=>$idC

        ));

    }
    public function deleteAction(Request $request )
    {   //recuperer id commentaire à partir de request
        $idC=$request->get('idCommentaire');
        $em=$this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idC);
        //recuperer id de l'annonce à partir de l'objet commentaire
        $idA=$commentaire->getIdAnnonce()->getIdAnnonce();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('annonce_single',array('idAnnonce'=>$idA));

    }
    public function updateAction($idCommentaire,Request $request)
    { //1-form
        //recuperer id commentaire à partir de request
        $em=$this->getDoctrine()->getManager();
        $idC=$request->get('idCommentaire');
        $comm=$request->get('contenu');

        if(isset($_GET['nc']))
        {
            $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idC);
            $commentaire->setCommentaire($_GET['nc']);
            $em->flush();
        }

        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idC);
        //recuperer id de l'annonce à partir de l'objet commentaire
        $idA=$commentaire->getIdAnnonce()->getIdAnnonce();

        $form=$this->createForm(CommentaireType::class,$commentaire);
        //2
        $form=$form->handleRequest($request);
        //3

            if($form->isValid())
        {
            $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idC);

            $em->flush();

        }

if($comm!=null)
{

    return $this->redirectToRoute('annonce_single',array('idAnnonce'=>$idA,'contenu'=>$comm,'idCommentaire'=>$idCommentaire));}
        //1.c

        return $this->redirectToRoute('annonce_single',array('idAnnonce'=>$idA,));

    }

    public function newcAction( Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $comment= new Commentaire();


        // récupérer les paramètres passé dans la requête
        $comment->setCommentaire($request->get('commentaire'));
        $time = new \DateTime("now");
        $comment->setDateCommentaire($time);
        // $user=$this->getUser();
        // $comment->setIdUser($user);

        $idu=$request->get('id');

        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('AppBundle:User')->find($idu);
        $comment->setIdUser($user);


        //$user=$this->getDoctrine()->getRepository(FosUser::class)->find(4);
        //$comment->setIdUser(4);
        $annonce=$this->getDoctrine()->getRepository('TrocBundle:Annonce')->find($request->get('idA'));

        //un problème au niveau annonce
        $comment->setIdAnnonce($annonce);
        $em->persist($comment);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($comment);
        return new JsonResponse($formatted);

    }

    public function showcAction()
    {
        $comments=$this->getDoctrine()->getManager()->getRepository('TrocBundle:Commentaire')
            ->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($comments);
        return new JsonResponse($formatted);
    }

    public function deletecAction(Commentaire $commentaire)
    {
        $em = $this->getDoctrine()->getManager();

        $comment=$em->getRepository('TrocBundle:Commentaire')->find($commentaire->getIdCommentaire());
        $em->remove($comment);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($comment);
        return new JsonResponse($formatted);

    }

    public function editcAction(Request $request,$idCommentaire)
    {
        $em=$this->getDoctrine()->getManager();

        $comment=$em->getRepository('TrocBundle:Commentaire')->find($idCommentaire);


        $comment->setCommentaire($request->get('commentaire'));

        $time = new \DateTime("now");
        $comment->setDateCommentaire($time);

        $em->persist($comment);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($comment);
        return new JsonResponse($formatted);




    }
    public function loginmAction(Request $request)
    {
        $em =$this->getDoctrine()->getManager();
        $username = $request->get('username');
        $password = $request->get('password');

        $user= $em->getRepository(FosUser::class)->findOneBy(["username" => $username]);

        if($user)
        {
            $encoder_service = $this->get('security.encoder_factory');
            $encoder = $encoder_service->getEncoder($user);

            if($encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt()))
            {

                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($user);
                return new JsonResponse($formatted);
            }

            else
            {

                $incorrect = new User();
                $incorrect->setId(-1);

                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($incorrect);
                return new JsonResponse($formatted);
            }
        }
        else
        {
            //username incorrect
            $empty = new User();
            $empty->setId(0);

            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($empty);
            return new JsonResponse($formatted);
        }
    }





}
