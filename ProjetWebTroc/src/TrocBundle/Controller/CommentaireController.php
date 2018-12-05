<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Commentaire;
use TrocBundle\Entity\Grosmots;
use TrocBundle\Form\CommentaireType;
use AppBundle\Entity\User;

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


    public function createcAction(Request $request)
    {
        //1-preparer le formulaire
        //1-a passer un objet vide car la methode createForm prend en parametre cet objet
        $commentaire= new Commentaire();
        //1.b creer le formulaire
        $form=$this->createForm(CommentaireType::class,$commentaire);
        $form=$form->handleRequest($request);
        $idA=$request->get('idAnnonce');
        $mots=$this->getDoctrine()->getRepository(Grosmots::class)->findAll();
        $commentaires=$this->readByAnnonceAction($idA);
        if($form->isValid()&&$form->isSubmitted())
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
                'form' => $form->createView(),'commentaires'=>$commentaires,
            ));


        }
        return $this->render('@Troc/Commentaire/createc.html.twig', array(
            'form' => $form->createView(),'commentaires'=>$commentaires,'mots'=>$mots,

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
    public function updateAction(Request $request)
    { //1-form
        //recuperer id commentaire à partir de request
        $idC=$request->get('idCommentaire');

        $em=$this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)->find($idC);
        //recuperer id de l'annonce à partir de l'objet commentaire
        $idA=$commentaire->getIdAnnonce()->getIdAnnonce();
        $form=$this->createForm(CommentaireType::class,$commentaire);
        //2
        $form=$form->handleRequest($request);
        //3
        if($form->isValid())
        {

            $em->flush();
        }

        //1.c
        return $this->redirectToRoute('annonce_single',array('idAnnonce'=>$idA));

    }
    public function topCommentaireAction()
    {
        $em=$this->getDoctrine()->getManager();
        $count=$em->getRepository(Commentaire::class)->TopCommented();
        var_dump($count[0]);
        $annonce =$em->getRepository(Annonce::class)->find($count[0][1]);
        //var_dump($annonce);
        return $this->redirectToRoute('annonce_single',array('idAnnonce'=>$annonce->getIdAnnonce()));


    }







}
