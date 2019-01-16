<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="annonce_ibfk_1", columns={"idItems"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_Annonce", type="string", length=255, nullable=false)
     */
    private $titreAnnonce;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="type_Annonce", type="string", length=255, nullable=false)
     */
    private $typeAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_Annonce", type="string", length=255, nullable=false)
     */
    private $etatAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Items
     *
     * @ORM\ManyToOne(targetEntity="Items")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idItems", referencedColumnName="idItems")
     * })
     */
    private $iditems;


    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=true)
     */
    private $view;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommande", referencedColumnName="idCommande")
     * })
     */
    private $idcommande;

    /**
     * Get idAnnonce
     *
     * @return integer
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set titreAnnonce
     *
     * @param string $titreAnnonce
     *
     * @return Annonce
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce
     *
     * @return string
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set typeAnnonce
     *
     * @param string $typeAnnonce
     *
     * @return Annonce
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return string
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set etatAnnonce
     *
     * @param string $etatAnnonce
     *
     * @return Annonce
     */
    public function setEtatAnnonce($etatAnnonce)
    {
        $this->etatAnnonce = $etatAnnonce;

        return $this;
    }

    /**
     * Get etatAnnonce
     *
     * @return string
     */
    public function getEtatAnnonce()
    {
        return $this->etatAnnonce;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonce
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set iditems
     *
     * @param \TrocBundle\Entity\Items $iditems
     *
     * @return Annonce
     */
    public function setIditems(\TrocBundle\Entity\Items $iditems = null)
    {
        $this->iditems = $iditems;

        return $this;
    }

    /**
     * Get iditems
     *
     * @return \TrocBundle\Entity\Items
     */
    public function getIditems()
    {
        return $this->iditems;
    }

    /**
     * Set idcommande
     *
     * @param \TrocBundle\Entity\Commande $idcommande
     *
     * @return Annonce
     */
    public function setIdcommande(\TrocBundle\Entity\Commande $idcommande = null)
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    /**
     * Get idcommande
     *
     * @return \TrocBundle\Entity\Commande
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set view
     *
     * @param integer $view
     *
     * @return Annonce
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }
}
