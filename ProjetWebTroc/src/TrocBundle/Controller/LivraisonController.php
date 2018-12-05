<?php

namespace TrocBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use TrocBundle\Entity\Allocoursier;
use TrocBundle\Entity\Commentaire;
use TrocBundle\Entity\Livraison;
use TrocBundle\Form\LivraisonType;
use Symfony\Component\HttpFoundation\Request;


class LivraisonController extends Controller
{

    public function LivraisonCreateAction(Request $request)
    {
        $list=new Livraison();
        //1.b-create form
        $form=$this->createForm(LivraisonType::class,$list);
        //2-les données
        $form=$form->handleRequest($request);
        if($form->isValid()){
            //3-cnx avec la BD
            $em=$this->getDoctrine()->getManager();
            $em->persist($list);
            $em->flush();}
        //1-c-envoit de form à notre view
        return $this->render('@Troc/Livraison/LivraisonCreate.html.twig', array(
            'form'=>$form->createView()

        ));
    }
    public function LivraisonReadAction()
    {

        $l1=$this->getDoctrine()->getRepository(User::class)->AfficherClientLivraison();
        $l2=$this->getDoctrine()->getRepository(User::class)->AfficherCoursierLivraison();
        $l3=$this->getDoctrine()->getRepository(Livraison::class)->AfficherLivraison();
        $l4=$this->getDoctrine()->getRepository(User::class)->countLivraison();


        $l5=$this->getDoctrine()->getRepository(User::class)->AfficherClientAllocoursier();
        $l6=$this->getDoctrine()->getRepository(User::class)->AfficherCoursierAllocoursier();
        $l7=$this->getDoctrine()->getRepository(Livraison::class)->AfficherAllo();
        $l8=$this->getDoctrine()->getRepository(Livraison::class)->AfficherAlloCoursier();
        $l9=$this->getDoctrine()->getRepository(User::class)->countAllocoursier();
        $l10=$this->getDoctrine()->getRepository(User::class)->countCoursier();

        $nb=$l4['nb']-1;
        $nbr=$l9['nb']-1;

        return $this->render('@Troc/Livraison/LivraisonRead.html.twig', array('liste1'=>$l1,'liste2'=>$l2,'liste3'=>$l3,'nbr'=>$nb,'liste5'=>$l5,'liste6'=>$l6,'liste7'=>$l7,'liste10'=>$l10,'liste8'=>$l8,'nb'=>$nbr));
    }
    public function LivraisonDeleteAction(Request $request,$idLivraison)
    {
        $al=$this->getDoctrine()->getManager();
        $allo=$this->getDoctrine()->getRepository(Livraison::class)->find($idLivraison);

        $al->remove($allo);
        $al->flush();
        return $this->redirectToRoute('LivraisonRead');

    }
    public function LivraisonUpdateAction(Request $request,$idLivraison)
    {
        $al=$this->getDoctrine()->getManager();
        $allo=$this->getDoctrine()->getRepository(Livraison::class)->find($idLivraison);
        $form=$this->createForm(LivraisonType::class,$allo);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {$al->flush();
            return $this->redirectToRoute('LivraisonRead');}

        return $this->render('@Troc/Livraison/LivraisonUpdate.html.twig', array(
            'form'=>$form->createView()
        ));

    }
    public function LivraisonCancelAction(Request $request,$idLivraison)
    {
        if($allo=$this->getDoctrine()->getRepository(Livraison::class)->find($idLivraison))
        {return $this->redirectToRoute('LivraisonRead');}
        return $this->render('@Troc/Livraison/LivraisonUpdate.html.twig');
    }
    public function ValiderLivraisonAction(Request $request,$idLivraison)
    {   $al=$this->getDoctrine()->getManager();
       $allo=$this->getDoctrine()->getRepository(Livraison::class)->ValiderLivraison($idLivraison);
        $al->flush($allo);
        return $this->redirectToRoute('LivraisonRead');}

        public function CancelLivraisonAction(Request $request,$idLivraison)
    {   $al=$this->getDoctrine()->getManager();
       $allo=$this->getDoctrine()->getRepository(Livraison::class)->CancelLivraison($idLivraison);
        $al->flush($allo);
        return $this->redirectToRoute('LivraisonRead');}
    public function idCommentAction()
    {
        $l1=$this->getDoctrine()->getRepository(Commentaire::class)->idComment();
         var_dump($l1);
         die();
        return $this->render('@Troc/Livraison/test.html.twig', array('liste1'=>$l1));
    }
    public function showcoursierAction()
    {        $liste=$this->getDoctrine()->getRepository(User::class)->countCoursier();

        return $this->render('@Troc/Livraison/showcoursier.html.twig', array('liste1'=>$liste));
    }
    public function livraisondateAction()
    {
            $liste=$this->getDoctrine()->getRepository(User::class)->countDate();
            $liste1=$this->getDoctrine()->getRepository(User::class)->countDateCanceled();


        return $this->render('@Troc/Livraison/livraisondate.html.twig', array('liste'=>$liste,'liste1'=>$liste1));
    }
    public function LivraisonReadCoursierAction()
    {
        $id=$this->getUser()->getId();


            $l1=$this->getDoctrine()->getRepository(User::class)->AfficherClientLivraisonCoursier( $id);// true
            $l2=$this->getDoctrine()->getRepository(Livraison::class)->AfficherLivraisonCoursier($id);// true

            $l4=$this->getDoctrine()->getRepository(User::class)->AfficherClientAllocoursierCoursier($id);
            $l5=$this->getDoctrine()->getRepository(Livraison::class)->AfficherAlloCoursierCoursier($id);
            $l8=$this->getDoctrine()->getRepository(Livraison::class)-> AfficherLivraisonAlloCoursier($id);

            $l3=$this->getDoctrine()->getRepository(User::class)->countLivraisonCoursier($id);// true
            $l6=$this->getDoctrine()->getRepository(User::class)->countOrders($id);
            $l7=$this->getDoctrine()->getRepository(User::class)->countOrdersAllo($id);
            $tot=$l6['nbr'];
            $nbr=$l7['num']-1;
            $nb=$l3['nb']-1;
        return $this->render('@Troc/Coursier/LivraisonCoursier.html.twig', array('liste1'=>$l1,'liste2'=>$l2,'nb'=>$nb,'liste4'=>$l4,'liste5'=>$l5,'nbr'=>$nbr,'tot'=>$tot,'liste8'=>$l8));

    }
    public function LivraisonValideCoursierAction(Request $request,$idLivraison)
    {   $al=$this->getDoctrine()->getManager();
        $allo=$this->getDoctrine()->getRepository(Livraison::class)->ValiderLivraison($idLivraison);
        $al->flush($allo);
        return $this->redirectToRoute('LivraisonReadCoursier');}

}

