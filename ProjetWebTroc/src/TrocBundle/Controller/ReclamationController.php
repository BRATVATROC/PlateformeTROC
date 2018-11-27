<?php

namespace TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReclamationController extends Controller
{
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
