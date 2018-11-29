<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Annonce;

class AnnonceController extends Controller
{
    public function readAction(Request $request)
    { $id=$request->get('id');
        $annonce=$this->getDoctrine()->getRepository(Annonce::class)->myfindAll($id);
        return $this->render('@Troc/Default/index.html.twig', array('annonce'=>$annonce,
            'id'=>$id
        ));
    }

}
