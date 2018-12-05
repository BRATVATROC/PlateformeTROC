<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Troc/Default/index.html.twig');
    }
    public function profileAction()
    {
        return $this->render('@Troc/Default/profile.html.twig');
    }

}
