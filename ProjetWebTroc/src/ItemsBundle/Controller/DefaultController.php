<?php

namespace ItemsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TrocBundle\Entity\Items;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository(Items::class)->findAll();

        return $this->render('@Items/items/index.html.twig', array(
            'items' => $items,
        ));
       // return $this->render('@Items/Default/index.html.twig');
    }
}
