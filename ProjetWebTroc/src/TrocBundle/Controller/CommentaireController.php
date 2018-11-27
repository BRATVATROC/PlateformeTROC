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
        //1-preparer le formulaire
        //1-a passer un objet vide car la methode createForm prend en parametre cet objet
        $commentaire= new Commentaire();
        //1.b creer le formulaire
        $form=$this->createForm(CommentaireType::class,$commentaire);
        $form=$form->handleRequest($request);
        $commentaires=$this->readcAction();

        if($form->isValid())
        {
            $user=$this->getUser();
            $commentaire->setIdUser($user);

            $em=$this->getDoctrine()->getManager();
            $em->persist($commentaire);

            $em->flush();
            $a=$this->getDoctrine()->getRepository(Annonce::class);

            return $this->render('@Troc/Default/index.html.twig',
                array('id'=>2));

            // ... further modify the response or return it directly

            return $response;
        }
        return $this->render('@Troc/Commentaire/createc.html.twig', array(
            'form' => $form->createView(),'commentaires'=>$commentaires,
            // ...
        ));

    }





    public function searchAnnonceAction(Request $request)
    {    $id=$request->get('id');
        if(isset($id))
        {
            $commentaires=$this->getDoctrine()->getRepository(Modele::class)->getByAnnonce($id);
            return $this->render('@Troc/Commentaire/createc.html.twig', array('commentaires'=>$commentaires
            ));
        }
        return $this->render('@EspritParc/Modele/searchAnnonce.html.twig'

        // ...
        );
    }
}
