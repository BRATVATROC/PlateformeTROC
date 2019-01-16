<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SigninController extends Controller
{  public function indexAction()
{
    return $this->render('@Troc/Connexion/signin.html.twig');
}


    public function loginmAction(Request $request)
    {

        $em =$this->getDoctrine()->getManager();
        $username = $request->get('username');
        $password = $request->get('password');

        $user= $em->getRepository(User::class)->findOneBy(["username" => $username]);

        if($user)
        {
            $encoder_service = $this->get('security.encoder_factory');
            $encoder = $encoder_service->getEncoder($user);

            if($encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt()))
            {

                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($user);
                return new JsonResponse($formatted);
            }

            else
            {

                $incorrect = new User();
                $incorrect->setId(-1);

                $serializer=new Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($incorrect);
                return new JsonResponse($formatted);
            }
        }
        else
        {
            //username incorrect
            $empty = new User();
            $empty->setId(0);

            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($empty);
            return new JsonResponse($formatted);
        }
    }
}
