<?php

namespace CommandeBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\DateTime;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Commande;
use TrocBundle\Entity\Items;
use Ob\HighchartsBundle\Highcharts\Highchart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use TrocBundle\Entity\Livraison;

class CommandeController extends Controller
{
    public function readAction()
    {
        $commandesE = $this->getDoctrine()->getRepository(Commande::class)->findAllExchange();
        $commandesS = $this->getDoctrine()->getRepository(Commande::class)->findAllSell();
        return $this->render('@Commande/Commande/read.html.twig', array(
            // ...
            "commandesE"=>$commandesE,
            "commandesS"=>$commandesS
        ));
    }

    public function createAction()
    {
        $commande = new Commande();
        $em = $this->getDoctrine()->getManager();
        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute('read_commande');
    }

    public function updateAction(Request $req,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($id);
        $commandes = $em->getRepository(Commande::class)->findAll();
        $annonces = $em->getRepository(Annonce::class)->findmycart($id);
        $btn = $req->get('livraison1');
        $btn2 = $req->get("livraison2");
        if (isset($btn))
        {
            if ($commande->getLivraison()==0){
                $commande->setMontant($commande->getMontant()+10);
            }
            $commande->setLivraison(1);
            $commande->setMontant($commande->getMontant()+10);
            $idcoursier=$this->getDoctrine()->getRepository(User::class)->affectercoursier();
            //$n=$idcoursier[0]['id'];
            //$livraison = new Livraison("12-11-2018",null,$commande->getMontant()+10,0,null,null,1,$commande->getIdcommande(),0,$commande->getIdclient()->getId());
            //$em->persist($livraison);
            $em->flush();
        }
        if (isset($btn2)) {
            if ($commande->getLivraison()==1){
                $commande->setMontant($commande->getMontant()-10);
            }

            $commande->setLivraison(0);
            $em->flush();
        }

        $btn = $req->get("payment1");
        $btn2 = $req->get("payment2");

        if (isset($btn)){
            $commande->setPaye(0);
            return $this->redirectToRoute("read_commande");
        }

        if (isset($btn2)){
            return $this->render('@Commande/Commande/payer.html.twig', array(
                // ...
                "commande"=>$commande,
                "annonces"=>$annonces
            ));
        }

        return $this->render('@Commande/Commande/update.html.twig', array(
            // ...
            "commande"=>$commande,
            "annonces"=>$annonces
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($id);
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute("read_commande");
    }


    public function affichAnnonceAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);
        $commande = $em->getRepository(Commande::class)->findLastCommande();
        return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
            "commande"=>$commande[0]
        ));
    }


    public function deleteFromCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);
        $commande = $em->getRepository(Commande::class)->findLastCommande();
        $commande[0]->setMontant($commande[0]->getMontant()-$annonce->getPrix());
        $annonce->setIdCommande(null);
        $em->flush();
        /*return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
        ));*/
        return $this->redirectToRoute("affiche_annonce",array(
            "id"=>$annonce->getIdannonce(),
        ));
    }


    public function addToCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);
        $commande = $em->getRepository(Commande::class)->findLastCommande();
        //var_dump($commande[0]);
        $commande[0]->setMontant($commande[0]->getMontant()+$annonce->getPrix());
        $annonce->setIdCommande($commande[0]);
        $em->flush();
        /*return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
        ));*/
        return $this->redirectToRoute("affiche_annonce",array(
            "id"=>$annonce->getIdannonce()
        ));
    }


    public function troquerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $annonces = $em->getRepository(Annonce::class)->findMyAnnonces($user->getId());
        return $this->render('@Commande/Commande/mesCommandesVente.html.twig', array(
            // ...
            "annonces"=>$annonces,
            "id"=>$id
        ));
    }

    public function validerTrocAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $idA1 = $req->get("idA1");
        $idA2 = $req->get('idA2');
        $annonce1 = $em->getRepository(Annonce::class)->find($idA1);
        $annonce2 = $em->getRepository(Annonce::class)->find($idA2);
        $commande = new Commande();
        $commande->setIdannonce1($annonce1);
        $commande->setIdannonce2($annonce2);
        $tz = new \TimeZone('Europe/Paris');
        $date = new \DateTime('2018-12-05', $tz);
        $commande->setDatecommande($date);
        $commande->setMontant(0);
        $commande->setPaye(0);
        $commande->setIdclient($user);
        $commande->setLivraison(0);
        $annonce2->setIdCommande($commande);
        $annonce1->setIdCommande($commande);
        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute("read_commande");
    }

    public function testAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $var1 = $em->getRepository(Annonce::class)->calculAnnoncesPosté($user->getId());
        $var2 = $em->getRepository(Annonce::class)->calculAnnoncesVendu($user->getId());
        return $this->render('@Commande/Commande/create.html.twig', array(
            //...
            "var1"=>$var1,
            "var2"=>$var2,
            "user"=>$user
        ));

    }

    public function printAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($id);
        $annonces = $em->getRepository(Annonce::class)->findMyCart($id);
        $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(
                '@Commande/Commande/facture.html.twig',
                array(
                    "commande"=>$commande,
                    "annonces"=>$annonces
                )
            ),
            'C:\Users\CompuTech\Desktop\Facture'.$commande->getIdcommande().'.pdf'
        );
        /*return $this->render('@Commande/Commande/facture.html.twig', array(
            // ...
            "commande"=>$commande,
            "annonces"=>$annonces
        ));*/

        return $this->redirectToRoute("read_commande");
    }


    public function statsAction()
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

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [
                ['Language', 'Speakers (in millions)'],
                ['German',  5.85],
                ['French',  1.66],
                ['Italian', 0.316],
                ['Romansh', 0.0791]
            ]
        );
        $pieChart->getOptions()->setPieSliceText('label');
        $pieChart->getOptions()->setTitle('Swiss Language Use (100 degree rotation)');
        $pieChart->getOptions()->setPieStartAngle(100);
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('none');

        $col = new ColumnChart();
        $col->getData()->setArrayToDataTable(
            [
                ['Time of Day', 'Motivation Level', ['role' => 'annotation'], 'Energy Level', ['role' => 'annotation']],
                [['v' => [8, 0, 0], 'f' => '8 am'],  1, '1', 0.25, '0.2'],
                [['v' => [9, 0, 0], 'f' => '9 am'],  2, '2',  0.5, '0.5'],
                [['v' => [10, 0, 0], 'f' => '10 am'], 3, '3',    1,  '1'],
                [['v' => [11, 0, 0], 'f' => '11 am'], 4, '4', 2.25,  '2'],
                [['v' => [12, 0, 0], 'f' => '12 am'], 5, '5', 2.25,  '2'],
                [['v' => [13, 0, 0], 'f' => '1 pm'],  6, '6',    3,  '3'],
                [['v' => [14, 0, 0], 'f' => '2 pm'],  7, '7', 3.25,  '3'],
                [['v' => [15, 0, 0], 'f' => '3 pm'],  8, '8',    5,  '5'],
                [['v' => [16, 0, 0], 'f' => '4 pm'],  9, '9',  6.5,  '6'],
                [['v' => [17, 0, 0], 'f' => '5 pm'], 10, '10',  10, '10']
            ]
        );
        $col->getOptions()
            ->setTitle('Motivation and Energy Level Throughout the Day')
            ->setWidth(900)
            ->setHeight(500);
        $col->getOptions()
            ->getAnnotations()
            ->setAlwaysOutside(true)
            ->getTextStyle()
            ->setAuraColor('none')
            ->setFontSize(14)
            ->setColor('#000');
        $col->getOptions()
            ->getHAxis()
            ->setFormat('h:mm a')
            ->setTitle('Time of Day')
            ->getViewWindow()
            ->setMin([7, 30, 0])
            ->setMax([17, 30, 0]);
        $col->getOptions()
            ->getVAxis()
            ->setTitle('Rating (scale of 1-10)');

        return $this->render('@Commande/Commande/stat.html.twig', array(
            //...
            "chart"=>$ob,
            'piechart' => $pieChart,
            'col' => $col
        ));

    }


    //Partie mobile
    public function allAction(){
        $commandes = $this->getDoctrine()->getManager()->getRepository("TrocBundle:Commande")->findAll();
        //$items = $this->getDoctrine()->getManager()->getRepository("TrocBundle:Categorie")->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getIdcommande();
        });
        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($commandes);
        return new JsonResponse($formatted);
    }

    public function findAction($id){
        $commande = $this->getDoctrine()->getManager()->getRepository("TrocBundle:Commande")->find(1);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }

    public function newAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $commande = new Commande();
        //Setting the attributes of a commande
        //$tz = new \TimeZone('Europe/Paris');
        $date = new \DateTime('2018-12-05');
        $commande->setDatecommande($date);
        $commande->setPaye($req->get('paye'));
        $commande->setMontant($req->get('montant'));
        $commande->setIdannonce1(null);
        $commande->setIdannonce2(null);
        $commande->setIdclient(null);
        $commande->setLivraison($req->get('ivraison'));
        $em->persist($commande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }

    public function addCartMobileAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TrocBundle:Commande")->find(12);
        //Setting the attributes of a commande
        //$tz = new \TimeZone('Europe/Paris');
        $date = new \DateTime('2019-01-02');
        $commande->setDatecommande($date);
        $annonce = $em->getRepository("TrocBundle:Annonce")->find($req->get("id"));
        $commande->setMontant($annonce->getPrix()+$commande->getMontant());
        $annonce->setIdcommande($commande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande,$annonce);
        return new JsonResponse($formatted);
    }

    public function removeCartMobileAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TrocBundle:Commande")->find(12);
        //Setting the attributes of a commande
        //$tz = new \TimeZone('Europe/Paris');
        $date = new \DateTime('2019-01-02');
        $commande->setDatecommande($date);
        $annonce = $em->getRepository("TrocBundle:Annonce")->find($req->get("id"));
        $commande->setMontant($commande->getMontant()-$annonce->getPrix());
        $annonce->setIdcommande(null);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande,$annonce);
        return new JsonResponse($formatted);
    }

    public function removeMobileAction($id){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("TrocBundle:Commande")->find($id);
        $em->remove($commande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }

    public function getOrderAction($id){
        $em = $this->getDoctrine()->getManager();
        $annonces=$em->getRepository("TrocBundle:Annonce")->findBy(array("idcommande"=>$id));
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonces);
        return new JsonResponse($formatted);
    }


    public function updateMobileAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $commande=$em->getRepository("TrocBundle:Commande")->find($req->get("id"));
        if ($req->get("delivery")=="true"){
            $commande->setLivraison(1);
        }
        else{
            $commande->setLivraison(0);
        }
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }

    public function getAnnoncesMobileAction(){
        $em = $this->getDoctrine()->getManager();
        $annonces=$em->getRepository("TrocBundle:Annonce")->findBy(array("idcommande"=>null));

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($annonces);
        return new JsonResponse($formatted);
    }

    public function validerTrocMobileAction(Request $req){
        $em = $this->getDoctrine()->getManager();
        $commande= new Commande();
        $commande->setLivraison(0);
        $annonce1=$em->getRepository("TrocBundle:Annonce")->find($req->get(idA1));
        $commande->setIdannonce1($annonce1);
        $annonce2=$em->getRepository("TrocBundle:Annonce")->find($req->get(idA2));
        $commande->setIdannonce2($annonce2);
        $annonce1->setIdcommande(13);
        $annonce2->setIdcommande(13);
        $commande->setMontant(0);
        $user=$em->getRepository("AppBundle:User")->find(1);
        $commande->setIdclient($user);
        $tz = new \TimeZone('Europe/Paris');
        $date = new \DateTime('2019-01-02', $tz);
        $commande->setDatecommande($date);
        $commande->setPaye(0);
        $em->persist($commande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }



}
