<?php

namespace TrocBundle\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Feedback;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Opinion;

/**
 * Feedback controller.
 *
 * @Route("feedback")
 */
class FeedbackController extends Controller
{
    /**
     * Creates a new feedback entity.
     *
     * @Route("/new", name="feedback_new")
     * @Method({"GET", "POST"})
     */

    public function addLikeAction(Request $request)
    {
        $user=$this->getUser();
         //RECUPERATION DE L'id de l'annonce
            $idA=$request->get('idAnnonce');
                // REcherche de l'annonce
            //Recherche Annonce et utilisateur
            $feed=$this->getDoctrine()->getRepository(Feedback::class)
                ->findBy(array('idUser'=>$user,'idAnnonce'=>$idA));
            $em = $this->getDoctrine()->getManager();
            if($feed==null)
            {
                $annonce=$this->getDoctrine()->getRepository(Annonce::class)->myfindall($idA);


                $feedback = new Feedback();
                $feedback->setNote(0);
                $feedback->setIdUser($user);
                $feedback->setIdAnnonce($annonce);
                $feedback->setLikeFeed(0);
                $feedback->setDislike(0);
                $em->persist($feedback);
                $em->flush();

            }

                $a=$this->getDoctrine()->getRepository(Feedback::class)->find($feed[0]->getIdFeed());
                $b=$request->get('dislike');

                if(($a->getLikeFeed()==0) && !(isset($b)))
                {

                    $a->setLikeFeed(1);
                    $a->setDislike(0);
                    $em->persist($a);
                    $em->flush();
                } else if(($a->getDislike()==0) && (isset($b)) ){
                    if($a->getDislike()==0)
                    {
                        $a->setDislike(1);
                        $a->setLikeFeed(0);
                        $em->persist($a);
                        $em->flush();
                    }
                }
         $status=$this->getDoctrine()
            ->getRepository(Feedback::class)->LikeDislike($idA);
            $se=new Serializer(array(new ObjectNormalizer()));
            //normalize de la liste
            $data=$se->normalize($status);

            return new JsonResponse($data);

    }
    public function addLike($id)
    {
        $feed=new Feedback();

        $feed=$this->getDoctrine()->getRepository(Feedback::class)->find($id);
        $feed->setLikeFeed($feed->getLikeFeed()+1);
        $em->flush();
    }
    public function CountLikeAction(Request $request)
    {

        $id=$request->get('idAnnonce');
        $annonce=$this->getDoctrine()->getRepository(Annonce::class)->find($id[0]);

        $feed=$this->getDoctrine()->getRepository(Feedback::class)->LikeDislike(1);
        $a=$feed[0]['nbl'];

        return $this->render('@Troc/Feedback/likedislike.html.twig',
            array('nbl'=>$a,'nbd'=>$feed['0']['nbd'],'annonce'=>$annonce,));
    }


}