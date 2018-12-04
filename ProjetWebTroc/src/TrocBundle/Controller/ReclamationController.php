<?php

namespace TrocBundle\Controller;

use Symfony\Component\Validator\Constraints\DateTime;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use TrocBundle\Form\ReclamationType;
use TrocBundle\Repository\AnnonceRepository;

/**
 * Reclamation controller.
 *
 * @Route("reclamation")
 */
class ReclamationController extends Controller
{
    /**
     * Lists all reclamation entities.
     *
     * @Route("/", name="reclamation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('TrocBundle:Reclamation')->findAll();

        return $this->render('reclamation/index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Creates a new reclamation entity.
     *
     * @Route("/new", name="reclamation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reclamation = new Reclamation();
        $form = $this->createForm('TrocBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $idA=$request->get('idAnnonce');
            $annonce=$this->getDoctrine()->getRepository(Annonce::class)->find($idA);
            $reclamation->setIdRuser($this->getUser());
            $reclamation->setIdAnnonce($annonce);
            $reclamation->setEtatReclamation('unsolved');

            $User=$annonce->getIditems()->getIdUser();
            $reclamation->setIdUser($User);
            $date=new \DateTime("now");
            $reclamation->setDate( $date);
            $em->persist($reclamation);
            $em->flush();

            $vide=new Reclamation();
            $form=$this->createForm(ReclamationType::class,$vide);
            return $this->render('@Troc/Reclamation/new.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        return $this->render('@Troc/reclamation/new.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reclamation entity.
     *
     * @Route("/{idRec}", name="reclamation_show")
     * @Method("GET")
     */
    public function showAction(Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('reclamation/show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     * @Route("/{idRec}/edit", name="reclamation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('TrocBundle\Form\ReclamationType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_edit', array('idRec' => $reclamation->getIdrec()));
        }

        return $this->render('reclamation/edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reclamation entity.
     *
     * @Route("/{idRec}", name="reclamation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reclamation $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }

    /**
     * Creates a form to delete a reclamation entity.
     *
     * @param Reclamation $reclamation The reclamation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamation $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamation_delete', array('idRec' => $reclamation->getIdrec())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function ReclamationAction()
    {
        $tab1=['Description','Date','EtatReclamation','NumeroAnnonce','Troqueur','TypeReclamation','Reclamateur'];
        $list=[["Description"=>'Gros Mot',"Date"=>'26/11/2018','EtatReclamation'=>'Non Résolue','NumeroAnnonce'=>'4','Troqueur'=>'8','TypeReclamation'=>'Proprietaire','Reclamateur'=>'1'],
            ["Description"=>'Mauvais contenu ',"Date"=>'24/11/2018','EtatReclamation'=>'Non Résolue','NumeroAnnonce'=>'5','Troqueur'=>'6','TypeReclamation'=>'Annonce','Reclamateur'=>'2'],
            ["Description"=>'Contenu Indésirable',"Date"=>'25/11/2018','EtatReclamation'=>' Résolue','NumeroAnnonce'=>'3','Troqueur'=>'11','TypeReclamation'=>'Annonce','Reclamateur'=>'4'],
            ["Description"=>'Gros Mot',"Date"=>'20/11/2018','EtatReclamation'=>' Résolue','NumeroAnnonce'=>'9','Troqueur'=>'8','TypeReclamation'=>'Proprietaire','Reclamateur'=>'2']];
        return $this->render('@Troc/Default/admin.html.twig',['list'=>$list]);
    }
}
