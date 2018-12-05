<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use TrocBundle\Entity\Annonce;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository(Annonce::class)->orderDate();
        $top =  $em->getRepository(Annonce::class)->topView();
       // die('dd '.$top[0]->getIdannonce());

        if (isset($_GET['Search']))
        {
            $key = $_GET['Search'];
            return $this->redirectToRoute('annonce_search', array('s' => $key ));
        }


        $pagination  = $this->get('knp_paginator')->paginate(
            $post,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            5/*nbre d'éléments par page*/
        );
        return $this->render('@App/default/index.html.twig', array(
            'annonces' => $pagination,
            'top' => $top,
        ));
    }


}
