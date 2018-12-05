<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TrocBundle\Entity\Grosmots;

class GrosmotController extends Controller
{
    public function  showGrosmot()
    {
        $mots=$this->getDoctrine()->getRepository(Grosmots::class)->findAll();
        return $mots;
    }
}
