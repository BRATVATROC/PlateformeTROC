<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SigninController extends Controller
{  public function indexAction()
{
    return $this->render('@Troc/Connexion/signin.html.twig');
}
}
