<?php

namespace TrocBundle\Controller;

use Proxies\__CG__\TrocBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use TrocBundle\Entity\Signaler;
use TrocBundle\Form\SignalerType;

class SignalerController extends Controller
{
    public function readsAction()
    {
        $signales = $this->getDoctrine()->getRepository(Signaler::class)->findAll();
        $sign=$this->getDoctrine()->getRepository(Signaler::class)->countReport();

        return $this->render('@Troc/Signaler/reads.html.twig', array('signales' => $sign
        ));

    }

    public function  createsAction(Request $request)
    {
        $signale = new Signaler();
        $form = $this->createForm(SignalerType::class,$signale);
        //recuperer id comment a partir de request
        $idCommentaire=$request->get('idCommentaire');
        $form = $form->handleRequest($request);
        //if ($form->isValid()) {
            $comment=$this->getDoctrine()->getRepository(Commentaire::class)->find($idCommentaire);
            $id=$comment->getIdCommentaire();
        $idA=$comment->getIdAnnonce()->getIdAnnonce();
            $user=$this->getUser();
            //$client=$this->getDoctrine()->getRepository(User)->find($user);
            //var_dump($client);
            //die();
            $signale->setIdCommentaire($comment);
            $signale->setIdUser($user);
            $tz = new \DateTimeZone('Europe/Paris');
            $date = new \DateTime("2018-11-04", $tz);
            $signale ->setDateSignale($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($signale);

            $em->flush();
        //}
        return $this->redirectToRoute("annonce_single",array("idAnnonce"=>$idA));

        return $this->render('@Troc/Signaler/creates.html.twig', array(
            //'form' => $form->createView(),
            'idCommentaire'=>$idCommentaire
            // ...
        ));


    }
    public function deletesAction(Request $request)
    {    $id=$request->get('idSignale');
        $em=$this->getDoctrine()->getManager();
        $signale=$this->getDoctrine()->getRepository(Signaler::class)->find($id);

        $em->remove($signale);
        $em->flush();
        return $this->redirectToRoute('read_signaler');

    }

}
