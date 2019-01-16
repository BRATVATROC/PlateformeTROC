<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use TrocBundle\Entity\Annonce;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository(Annonce::class)->orderDate();
        $top = $em->getRepository(Annonce::class)->topView();
        // die('dd '.$top[0]->getIdannonce());

        if (isset($_GET['Search'])) {
            $key = $_GET['Search'];
            return $this->redirectToRoute('annonce_search', array('s' => $key));
        }


        $pagination = $this->get('knp_paginator')->paginate(
            $post,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            5/*nbre d'éléments par page*/
        );
        return $this->render('@App/default/index.html.twig', array(
            'annonces' => $pagination,
            'top' => $top,
        ));
    }

    /**
     * @Route("/loginm", name="user_login")
     */
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
    /**
     * @Route("/getAllUsers", name="users")
     */
    public function getAllUsersAction ()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($users);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/signup", name="user_signup")
     */
    public function signupAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();


        $email = $request->get('email');


        //verify if email is unique
        $query_email = $em->createQuery("SELECT u FROM AppBundle:User u WHERE u.email = :email");
        $query_email->setParameter('email', $email);
        //$user_email = new User();
        $user_email = $query_email->getOneOrNullResult();

        if($user_email == null && $email != null)
        {
            $user->setEmail($email);
            $user->setEmailCanonical($email);
            $username = $request->get('username');
            //verify if username is unique
            $query_email = $em->createQuery("SELECT u FROM AppBundle:User u WHERE u.username = :username");
            $query_email->setParameter('username', $username);
            $user_username = $query_email->getOneOrNullResult();
            if($user_username == null && $username != null)
            {
                //username valid
                $user->setUsername($username);
                $user->setUsernameCanonical($username);



                $password = $request->get('password');

                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $password
                    )
                );

                $user->setEnabled(1);
                $em->persist($user);
                $em->flush();

                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);

            }
            else{
                //username already taken
                //die('username already taken');
                $user->setId("-1");
                $user->setUsername("-1");
                $user->setEmail('0');

                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            }
        }
        else
        {
            //die("email already registred");
            $user->setId("0");
            $user->setUsername("0");
            $user->setEmail('-1');

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($user);
            return new JsonResponse($formatted);
        }

    }
}
