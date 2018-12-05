<?php

namespace AnnonceBundle\Controller;

use AnnonceBundle\Form\AnnonceType;
use TrocBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Entity\Signaler;

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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository(Annonce::class)->findAll();

        return $this->render('@Annonce/annonce/index.html.twig', array(
            'annonces' => $post
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
            return $this->redirectToRoute('troc_signin');
        }
        else{
            $annonce = new Annonce();
            $form = $this->createForm(AnnonceType::class, $annonce);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();

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
                //SUPRESSION FEEDBACK
                $id=$annonce->getIdAnnonce();
                $f=$em->getRepository('TrocBundle:Feedback')->deleteFeed($id);
                $em->remove($f);
                //END SUPRESSION FEEDBACK

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

        return $this->render('@Annonce/annonce/single.html.twig', array(
            'annonce' => $annonce,
            'user' => $user,

        ));
    }
}
