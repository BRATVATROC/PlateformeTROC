<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idCoursier", columns={"idCoursier"}), @ORM\Index(name="numCommande", columns={"numCommande"}), @ORM\Index(name="numAL", columns={"numAL"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\CommandeRepository")
 */
class Livraison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLivraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnregistrement", type="datetime", nullable=false)
     */
    private $dateenregistrement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="datetime", nullable=true)
     */
    private $datelivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="fraisLivraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraislivraison;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LivraisonRecue", type="boolean", nullable=false)
     */
    private $livraisonrecue;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseLivraison", type="text", length=65535, nullable=false)
     */
    private $adresselivraison;

    /**
     * @var integer
     *
     * @ORM\Column(name="etatLivraison", type="integer", nullable=false)
     */
    private $etatlivraison;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCoursier", referencedColumnName="id")
     * })
     */
    private $idcoursier;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numCommande", referencedColumnName="idCommande")
     * })
     */
    private $numcommande;

    /**
     * @var \Allocoursier
     *
     * @ORM\ManyToOne(targetEntity="Allocoursier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="numAL", referencedColumnName="idAlloService")
     * })
     */
    private $numal;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;



    /**
     * Get idlivraison
     *
     * @return integer
     */
    public function getIdlivraison()
    {
        return $this->idlivraison;
    }

    /**
     * Set dateenregistrement
     *
     * @param \DateTime $dateenregistrement
     *
     * @return Livraison
     */
    public function setDateenregistrement($dateenregistrement)
    {
        $this->dateenregistrement = $dateenregistrement;

        return $this;
    }

    /**
     * Get dateenregistrement
     *
     * @return \DateTime
     */
    public function getDateenregistrement()
    {
        return $this->dateenregistrement;
    }

    /**
     * Set datelivraison
     *
     * @param \DateTime $datelivraison
     *
     * @return Livraison
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return \DateTime
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set fraislivraison
     *
     * @param float $fraislivraison
     *
     * @return Livraison
     */
    public function setFraislivraison($fraislivraison)
    {
        $this->fraislivraison = $fraislivraison;

        return $this;
    }

    /**
     * Get fraislivraison
     *
     * @return float
     */
    public function getFraislivraison()
    {
        return $this->fraislivraison;
    }

    /**
     * Set livraisonrecue
     *
     * @param boolean $livraisonrecue
     *
     * @return Livraison
     */
    public function setLivraisonrecue($livraisonrecue)
    {
        $this->livraisonrecue = $livraisonrecue;

        return $this;
    }

    /**
     * Get livraisonrecue
     *
     * @return boolean
     */
    public function getLivraisonrecue()
    {
        return $this->livraisonrecue;
    }

    /**
     * Set adresselivraison
     *
     * @param string $adresselivraison
     *
     * @return Livraison
     */
    public function setAdresselivraison($adresselivraison)
    {
        $this->adresselivraison = $adresselivraison;

        return $this;
    }

    /**
     * Get adresselivraison
     *
     * @return string
     */
    public function getAdresselivraison()
    {
        return $this->adresselivraison;
    }

    /**
     * Set etatlivraison
     *
     * @param integer $etatlivraison
     *
     * @return Livraison
     */
    public function setEtatlivraison($etatlivraison)
    {
        $this->etatlivraison = $etatlivraison;

        return $this;
    }

    /**
     * Get etatlivraison
     *
     * @return integer
     */
    public function getEtatlivraison()
    {
        return $this->etatlivraison;
    }

    /**
     * Set idcoursier
     *
     * @param \AppBundle\Entity\User $idcoursier
     *
     * @return Livraison
     */
    public function setIdcoursier(\AppBundle\Entity\User $idcoursier = null)
    {
        $this->idcoursier = $idcoursier;

        return $this;
    }

    /**
     * Get idcoursier
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdcoursier()
    {
        return $this->idcoursier;
    }

    /**
     * Set numcommande
     *
     * @param \TrocBundle\Entity\Commande $numcommande
     *
     * @return Livraison
     */
    public function setNumcommande(\TrocBundle\Entity\Commande $numcommande = null)
    {
        $this->numcommande = $numcommande;

        return $this;
    }

    /**
     * Get numcommande
     *
     * @return \TrocBundle\Entity\Commande
     */
    public function getNumcommande()
    {
        return $this->numcommande;
    }

    /**
     * Set numal
     *
     * @param \TrocBundle\Entity\Allocoursier $numal
     *
     * @return Livraison
     */
    public function setNumal(\TrocBundle\Entity\Allocoursier $numal = null)
    {
        $this->numal = $numal;

        return $this;
    }

    /**
     * Get numal
     *
     * @return \TrocBundle\Entity\Allocoursier
     */
    public function getNumal()
    {
        return $this->numal;
    }

    /**
     * Set idclient
     *
     * @param \AppBundle\Entity\User $idclient
     *
     * @return Livraison
     */
    public function setIdclient(\AppBundle\Entity\User $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}
