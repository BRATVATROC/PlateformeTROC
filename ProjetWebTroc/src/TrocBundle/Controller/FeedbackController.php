<?php

namespace TrocBundle\Controller;

use TrocBundle\Entity\Feedback;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Feedback controller.
 *
 * @Route("feedback")
 */
class FeedbackController extends Controller
{
    /**
     * Lists all feedback entities.
     *
     * @Route("/", name="feedback_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $feedbacks = $em->getRepository('TrocBundle:Feedback')->findAll();

        return $this->render('feedback/index.html.twig', array(
            'feedbacks' => $feedbacks,
        ));
    }

    /**
     * Creates a new feedback entity.
     *
     * @Route("/new", name="feedback_new")
     * @Method({"GET", "POST"})
     */
    public function testAction(Request $request)
    {

        return $this->render('@Troc/Feedback/AjoutFeed.html.twig'
        );
    }
    public function newAction(Request $request)
    {
        $feedback = new Feedback();
        $form = $this->createForm('TrocBundle\Form\FeedbackType', $feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($feedback);
            $em->flush();

            return $this->redirectToRoute('feedback_show', array('idFeed' => $feedback->getIdfeed()));
        }

        return $this->render('@Troc/Feedback/AjoutFeed.html.twig', array(
            'feedback' => $feedback,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a feedback entity.
     *
     * @Route("/{idFeed}", name="feedback_show")
     * @Method("GET")
     */
    public function showAction(Feedback $feedback)
    {
        $deleteForm = $this->createDeleteForm($feedback);

        return $this->render('feedback/show.html.twig', array(
            'feedback' => $feedback,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing feedback entity.
     *
     * @Route("/{idFeed}/edit", name="feedback_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Feedback $feedback)
    {
        $deleteForm = $this->createDeleteForm($feedback);
        $editForm = $this->createForm('TrocBundle\Form\FeedbackType', $feedback);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('feedback_edit', array('idFeed' => $feedback->getIdfeed()));
        }

        return $this->render('feedback/edit.html.twig', array(
            'feedback' => $feedback,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a feedback entity.
     *
     * @Route("/{idFeed}", name="feedback_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Feedback $feedback)
    {
        $form = $this->createDeleteForm($feedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($feedback);
            $em->flush();
        }

        return $this->redirectToRoute('feedback_index');
    }

    /**
     * Creates a form to delete a feedback entity.
     *
     * @param Feedback $feedback The feedback entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Feedback $feedback)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feedback_delete', array('idFeed' => $feedback->getIdfeed())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
