<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Commentaire;
use TrocBundle\Form\CommentaireType;
use AppBundle\Entity\User;

class CommentaireController extends Controller
{
    public function  readcAction()
    {
        $commentaires=$this->getDoctrine()->getRepository(Commentaire::class)->findAll();
        return $commentaires;
    }



    public function createcAction(Request $request)
    {
        $annonce=$request->get('annonce');

        //1-preparer le formulaire
        //1-a passer un objet vide car la methode createForm prend en parametre cet objet
        $commentaire= new Commentaire();
        //1.b creer le formulaire
        $form=$this->createForm(CommentaireType::class,$commentaire);
        $form=$form->handleRequest($request);
        $commentaires=$this->readcAction();
     // test si le formulaire est remplie
        if($form->isValid())
        {

            $user=$this->getUser();
            $commentaire->setIdUser($user);

            $commentaire->setIdAnnonce();

            //connex bdd et sauvegarde de notre objet dans la base gràce à la méthode flush
            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);

            $em->flush();
            $commentaires=$this->readcAction();
            //appel à la View de formulaire CreateCommentaire et affichage des commentaires
            return $this->render('@Troc/Commentaire/createc.html.twig', array(
                'form' => $form->createView(),'commentaires'=>$commentaires,
                // ...
            ));

        }
        // si le formulaire est vide
        return $this->render('@Troc/Commentaire/createc.html.twig', array(
            'form' => $form->createView(),'commentaires'=>$commentaires,
            // ...
        ));
    }

    public function deleteAction(Request $request , $idCommentaire)
    {
        $em=$this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idCommentaire);

        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('create_commentaire');

    }
    public function updateAction(Request $request,$idCommentaire)
    { //1-form
        //1-a
        $em=$this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idCommentaire);
        //1-b
        $form=$this->createForm(CommentaireType::class,$commentaire);
        //2
        $form=$form->handleRequest($request);
        //3
        if($form->isValid())
        {

            $em->flush();
        }

        //1.c
        return $this->render('@Troc/Commentaire/update.html.twig', array(
            'form'=>$form->createView()
            // ...
        ));
    }


    public function  signalerAction()
    {


    }

    public function topCommentaire()
    {
        $commentaires=$this->getDoctrine()->getRepository(Commentaire::class)->TopCommented();
        return $this->render('@Troc/Commentaire/createc.html.twig', array('commentaires'=>$commentaires,
        ));
    }





}
