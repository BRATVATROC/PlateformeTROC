<?php

namespace TrocBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class  ProfileController extends Controller
{
    public function indexAction()
    {
        $iduser = new User();
        $iduser = $this->getUser()->getId();
        $user = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('@Troc/Default/profile.html.twig',array('user'=>$user));
    }
}