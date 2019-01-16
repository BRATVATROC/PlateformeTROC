<?php

namespace AnnonceBundle\Controller;

use AnnonceBundle\Form\AnnonceType;
use AppBundle\Entity\User;
use Symfony\Component\Validator\Constraints\Date;
use TrocBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Categorie;
use TrocBundle\Entity\Items;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use TrocBundle\Entity\Souscategorie;


/**
 * Annonce controller.
 *
 */
class AnnonceController extends Controller
{
    /**
     * Lists all annonce entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository(Annonce::class)->orderDate();
        $pagination  = $this->get('knp_paginator')->paginate(
            $post,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            5/*nbre d'éléments par page*/
        );
        return $this->render('@Annonce/annonce/index.html.twig', array(
            'annonces' => $pagination
        ));
    }

    /**
     * Creates a new annonce entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        if($user == null)
        {
            return $this->redirectToRoute('fos_user_security_login');
        }
        else{
            $annonce = new Annonce();
            $form = $this->createForm(AnnonceType::class, $annonce);
            $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $annonce->setDate( new \DateTime());
                $annonce->setView(0);
                $em->persist($annonce);
                $em->flush();

                return $this->redirectToRoute('annonce_show', array('idAnnonce' => $annonce->getIdannonce()));
            }

            return $this->render('@Annonce/annonce/new.html.twig', array(
                'annonce' => $annonce,
                'form' => $form->createView(),
            ));
        }

    }

    /**
     * Finds and displays a annonce entity.
     *
     */
    public function showAction(Annonce $annonce)
    {
        $deleteForm = $this->createDeleteForm($annonce);
        return $this->render('@Annonce/annonce/show.html.twig', array(
            'annonce' => $annonce,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing annonce entity.
     *
     */
    public function editAction(Request $request, Annonce $annonce)
    {
        $user = $this->getUser();
        if($user == null)
        {
            return $this->redirectToRoute('troc_signin');
        }
        else {
            $deleteForm = $this->createDeleteForm($annonce);
            $editForm = $this->createForm('AnnonceBundle\Form\AnnonceType', $annonce);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('annonce_edit', array('idAnnonce' => $annonce->getIdannonce()));
            }

            return $this->render('@Annonce/annonce/edit.html.twig', array(
                'annonce' => $annonce,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Deletes a annonce entity.
     *
     */
    public function deleteAction(Request $request, Annonce $annonce)
    {
        $user = $this->getUser();
        if($user == null)
        {
            return $this->redirectToRoute('troc_signin');
        }
        else {
            $form = $this->createDeleteForm($annonce);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($annonce);
                $em->flush();
            }

            return $this->redirectToRoute('annonce_index');
        }
    }

    /**
     * Creates a form to delete a annonce entity.
     *
     * @param Annonce $annonce The annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonce $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonce_delete', array('idAnnonce' => $annonce->getIdannonce())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    function singleAction(Annonce $annonce)
    {
        $user = $this->getUser();
        $e = $this->getDoctrine()->getRepository(Annonce::class)->find($annonce->getIdAnnonce());
        //die("e ; ".$e->getIdAnnonce());

        $annonce->setView((int)$e->getView()+1);

        $em = $this->getDoctrine()->getManager();
        $em->flush();
        //die(';;'.$annonce->getView());
        return $this->render('@Annonce/annonce/single.html.twig', array(
            'annonce' => $annonce,
            'user' => $user,
        ));
    }

    public function searchAction(Request $request)
    {
        if(isset($_GET['s']))
        {
            $em = $this->getDoctrine()->getManager();
            $key = $_GET['s'];
            $annonce = $em->getRepository(Annonce::class)->search($key);

            $top =  $em->getRepository(Annonce::class)->topView();
            $pagination  = $this->get('knp_paginator')->paginate(
                $annonce,
                $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                5/*nbre d'éléments par page*/
            );

            return $this->render('@Annonce/annonce/search.html.twig', array(
                'annonces' =>$pagination,
                'top' => $top,
            ));
        }

        if(isset($_GET['Search']))
        {
            $em = $this->getDoctrine()->getManager();
            $key = $_GET['Search'];
            $annonce = $em->getRepository(Annonce::class)->search($key);

            $top =  $em->getRepository(Annonce::class)->topView();
            $pagination  = $this->get('knp_paginator')->paginate(
                $annonce,
                $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                5/*nbre d'éléments par page*/
            );

            return $this->render('@Annonce/annonce/search.html.twig', array(
                'annonces' =>$pagination,
                'top' => $top,
            ));
        }

        return $this->redirectToRoute('troc_homepage');
    }

    public function getAction()
    {
        $cat = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $subCat = $this->getDoctrine()->getRepository(Souscategorie::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formattedcat = $serializer->normalize($cat);
        $formattedsub = $serializer->normalize($subCat);
        return new JsonResponse(["cat" => $formattedcat, "sub" => $formattedsub ]);
    }

    public function addAction(Request $request)
    {
        $titre = $request->get("titre");
        $prix = $request->get("prix");
        $typeAnnonce = $request->get("type");
        $etatAnnonce = $request->get("etat");
        $adresse = $request->get("adresse");
        $description = $request->get("description");

        $iduser = $request->get("user");
        //$user = new User();
        //$user->setId((int) $iduser);

        $user= $this->getDoctrine()->getRepository(User::class)->findOneBy(["id" => $iduser]);

        //http://localhost/PlateformeTROC/ProjetWebTroc/web/app_dev.php/annonce/add?titre=e&prix=2&type=1&etat=2&adresse=a&description=des&user=1&cat=1&subcat=1&item=1



        //$cat->setNomcat($request->get("cat"));
        $idCat = $request->get("cat");
        $cat = $this->getDoctrine()->getRepository(Categorie::class)->findOneBy(["idcat" => $idCat]);

        $idSub = $request->get("subcat");
        $subcat = $this->getDoctrine()->getRepository(Souscategorie::class)->findOneBy(["idsouscat" => $idSub]);


        $id_item = $request->get("subcat");
        //$item = $this->getDoctrine()->getRepository(Items::class)->findOneBy(["iditems" => $subcat]);

        $item= new Items();
        $item->setIdUser($user);
        $item->setIdsouscat($subcat);
        $item->setNomitems("");
        $item->setImgiems("");

        //die(print_r($item));
        $annonce = new Annonce();
        $annonce->setTitreAnnonce($titre);
        $annonce->setPrix($prix);
        $annonce->setTypeAnnonce($typeAnnonce);
        $annonce->setEtatAnnonce($etatAnnonce);
        $annonce->setAdresse($adresse);
        $annonce->setDescription($description);
        $annonce->setIditems($item);
        $annonce->setDate(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->persist($annonce);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonce);
        return new JsonResponse($formatted);

    }

    public function afficheAction(Request $request)
    {
        $id = $request->get("id");

        $annonce = $this->getDoctrine()->getRepository(Annonce::class)->findOneBy(["idAnnonce" => $id]);

        $annonce->setDate(null);
        $item = $annonce->getIditems();

        //$item->setIdsouscat(null);

        //$annonce->setIditems($item);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonce);
        return new JsonResponse($formatted);
    }


    public function affichetoutAction()
    {


        $annonce = $this->getDoctrine()->getRepository(Annonce::class)->findAll();

        //$annonce->setDate(null);
        //$item = $annonce->getIditems();

        //$item->setIdsouscat(null);

        //$annonce->setIditems($item);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonce);
        return new JsonResponse($formatted);
    }

    public function myAnnonceAction(Request $request)
    {
        $iduser = $request->get("user");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(["id" => $iduser]);
        $items = $em->getRepository(Items::class)->findBy(["idUser" => $user]);

        $query = $em->createQuery("SELECT A FROM TrocBundle:Annonce A WHERE A.iditems in (:items)");
        $query->setParameter("items", $items);
        $annonces = $query->getResult();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonces);
        return new JsonResponse($formatted);
    }

    public function myDeleteAction(Request $request)
    {
        $idannonce = $request->get("annonce");
        $em = $this->getDoctrine()->getManager();

        $annonce = $em->getRepository(Annonce::class)->findOneBy(["idAnnonce" => $idannonce]);

        $em = $this->getDoctrine()->getManager();
        $em->remove($annonce);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize(new Annonce());
        return new JsonResponse($formatted);

    }



    public function myUpdateAction(Request $request)
    {
        $id = $request->get("id");
        $titre = $request->get("titre");
        $prix = $request->get("prix");
        $typeAnnonce = $request->get("type");
        $etatAnnonce = $request->get("etat");
        $adresse = $request->get("adresse");
        $description = $request->get("description");

        $iduser = $request->get("user");


        $user= $this->getDoctrine()->getRepository(User::class)->findOneBy(["id" => $iduser]);

        //titre=e&prix=2&type=1&etat=2&adresse=a&description=des&user=1&cat=1&subcat=1&item=1


        //die(print_r($item));
        $annonce =  $this->getDoctrine()->getRepository(Annonce::class)->findOneBy(["idAnnonce" => $id]);
        $annonce->setTitreAnnonce($titre);
        $annonce->setPrix($prix);
        $annonce->setTypeAnnonce($typeAnnonce);
        $annonce->setEtatAnnonce($etatAnnonce);
        $annonce->setAdresse($adresse);
        $annonce->setDescription($description);
        $annonce->setDate(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonce);
        return new JsonResponse($formatted);

    }
}
