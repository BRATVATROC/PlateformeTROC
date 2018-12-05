<?php

namespace AnnonceBundle\Controller;

use AnnonceBundle\Form\AnnonceType;
use TrocBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Items;

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
}
