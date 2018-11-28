<?php

namespace CommandeBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use TrocBundle\Entity\Annonce;
use TrocBundle\Entity\Commande;
use TrocBundle\Entity\Items;

class CommandeController extends Controller
{
    public function readAction()
    {
        $commandes = $this->getDoctrine()->getRepository(Commande::class)->findAll();
        return $this->render('@Commande/Commande/read.html.twig', array(
            // ...
            "commandes"=>$commandes
        ));
    }

    public function createAction()
    {
        return $this->render('CommandeBundle:Commande:create.html.twig', array(
            // ...
        ));
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
            $commande->setLivraison(1);
            $em->flush();
        }
        if (isset($btn2)) {
            $commande->setLivraison(0);
            $em->flush();
        }

        $btn = $req->get("payment1");
        $btn2 = $req->get("payment2");

        if (isset($btn)){
            $commande->setPaye(0);
            return $this->render('@Commande/Commande/read.html.twig', array(
                // ...
                "commandes"=>$commandes,
            ));
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
        return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
        ));
    }


    public function deleteFromCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);
        $annonce->setIdCommande(null);
        $commande = $em->getRepository(Commande::class)->find(1);
        $commande->setMontant($commande->getMontant()-$annonce->getPrix());
        $em->flush();
        return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
        ));
    }


    public function addToCartAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($id);
        $commande = $em->getRepository(Commande::class)->findLastCommande();
        $commande->setMontant($commande->getMontant()+$annonce->getPrix());
        $annonce->setIdCommande($commande);
        $em->flush();
        return $this->render('@Commande/Commande/affichannonce.html.twig', array(
            // ...
            "annonce"=>$annonce,
        ));
    }


    public function troquerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository(Annonce::class)->findAll();
        return $this->render('@Commande/Commande/mesCommandesVente.html.twig', array(
            // ...
            "annonces"=>$annonces,
            "id"=>$id
        ));
    }

    public function validerTrocAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find(1);
        $idA1 = $req->get("idA1");
        $idA2 = $req->get('idA2');
        $annonce1 = $em->getRepository(Annonce::class)->find($idA1);
        $annonce2 = $em->getRepository(Annonce::class)->find($idA2);
        $commande = new Commande();
        $commande->setIdannonce1($annonce1);
        $commande->setIdannonce2($annonce2);
        $tz = new \DateTimeZone('Europe/Paris');
        $date = new \DateTime('2018-11-28', $tz);
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
        $var1 = $em->getRepository(Annonce::class)->calculAnnoncesPosté(1);
        $var2 = $em->getRepository(Annonce::class)->calculAnnoncesVendu(1);
        var_dump($var1);
        var_dump($var2);
        return $this->render('@Commande/Commande/create.html.twig', array(
            // ...
        ));

    }

}
