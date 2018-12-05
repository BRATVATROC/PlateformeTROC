<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Annonce;

class AnnonceController extends Controller
{
    public function readAction(Request $request)
    {   $user=$this->getUser();
        $id=$request->get('id');
        $annonce=$this->getDoctrine()->getRepository(Annonce::class)->myfindAll($id);
        return $this->render('@Annonce/annonce/single.html.twig', array('annonce'=>$annonce,'user' => $user,
            'id'=>$id
        ));
    }

}
