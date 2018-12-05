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
use Ob\HighchartsBundle\Highcharts\Highchart;

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

        $reclamations = $em->getRepository('TrocBundle:Reclamation')->countRec();
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);
        return $this->render('@Troc/reclamation/reclamation.html.twig', array(
            'reclamations' => $reclamations,'chart' => $ob,
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
    public function editAction(Request $request)
    {
        $id=$request->get('idRec');

        if (!empty($id))
        {
            $rec=$this->getDoctrine()->getRepository(Reclamation::class)->find($id);
            $rec->setEtatReclamation('resolved');
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rec_admin');
        }
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->redirectToRoute('rec_admin');
    }

    /**
     * Deletes a reclamation entity.
     *
     * @Route("/{idRec}", name="reclamation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request)
    {
        $id=$request->get('idRec');

        if (!empty($id)) {
            $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
            return $this->redirectToRoute('rec_admin');
        }

        return $this->redirectToRoute('rec_admin');
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

// ...
    public function chartAction()
    {
        // Chart
        $series = array(
            array("name" => "Data Serie Name",    "data" => array(1,2,4,5,6,3,8))
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Chart Title');
        $ob->xAxis->title(array('text'  => "Horizontal axis title"));
        $ob->yAxis->title(array('text'  => "Vertical axis title"));
        $ob->series($series);

        return $this->render('::your_template.html.twig', array(
            'chart' => $ob
        ));
    }

}
