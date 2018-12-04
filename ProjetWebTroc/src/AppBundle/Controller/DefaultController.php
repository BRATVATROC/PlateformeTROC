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

        $post = $em->getRepository(Annonce::class)->findAll();

        return $this->render('@App/Default/index.html.twig', array(
            'annonces' => $post
        ));
    }
}
