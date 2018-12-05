<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TrocBundle\Entity\Allocoursier ;
use TrocBundle\Form\AllocoursierType ;
use Symfony\Component\HttpFoundation\Request;


class AllocoursierController extends Controller
{
    public function AlloCoursierCreateAction(Request $request)
    {//1-form
        //1-a: objet vide
        $allocoursiers=new Allocoursier();
        //1.b-create form
        $form=$this->createForm(AllocoursierType::class,$allocoursiers);
        //2-les données
        $form=$form->handleRequest($request);
        if($form->isValid()){
            //3-cnx avec la BD
            $em=$this->getDoctrine()->getManager();
            $em->persist($allocoursiers);
            $em->flush();

        }
        //1-c-envoit de form à notre view
        return $this->render('@Troc/Allocoursier/AlloCoursierCreate.html.twig', array(
            'form'=>$form->createView()

        ));
    }
    public function AlloCoursierReadAction()
    {   $allocoursiers=$this->getDoctrine()->getRepository(Allocoursier::class)->findAll();
        return $this->render('@Troc/Allocoursier/AlloCoursierRead.html.twig', array('liste'=>$allocoursiers

        ));
    }
    public function AlloCoursierDeleteAction(Request $request,$idalloservice)
    {
        $al=$this->getDoctrine()->getManager();
        $allo=$this->getDoctrine()->getRepository(Allocoursier::class)->find($idalloservice);
        $al->remove($allo);
        $al->flush();
        return $this->redirectToRoute('AlloCoursierRead');

    }
    public function AlloCoursierUpdateAction(Request $request,$idalloservice)
    {
        $al=$this->getDoctrine()->getManager();
        $allo=$this->getDoctrine()->getRepository(Allocoursier::class)->find($idalloservice);
        $form=$this->createForm(AllocoursierType::class,$allo);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {$al->flush();
            return $this->redirectToRoute('AlloCoursierRead');}

        return $this->render('@Troc/Allocoursier/AlloCoursierUpdate.html.twig', array(
            'form'=>$form->createView()
        ));

    }
    public function AlloCoursierCancelAction()
    {
        return ("cancel !!");
    }
}
