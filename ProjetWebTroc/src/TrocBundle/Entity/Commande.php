<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="idAnnonce1", columns={"idAnnonce1"}), @ORM\Index(name="idAnnonce2", columns={"idAnnonce2"}), @ORM\Index(name="idClient", columns={"idClient"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="date", nullable=false)
     */
    private $datecommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="livraison", type="boolean", nullable=false)
     */
    private $livraison;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paye", type="boolean", nullable=false)
     */
    private $paye;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAnnonce1", referencedColumnName="id_annonce")
     * })
     */
    private $idannonce1;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAnnonce2", referencedColumnName="id_annonce")
     * })
     */
    private $idannonce2;

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
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     *
     * @return Commande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set livraison
     *
     * @param boolean $livraison
     *
     * @return Commande
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return boolean
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     *
     * @return Commande
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return boolean
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set idannonce1
     *
     * @param \TrocBundle\Entity\Annonce $idannonce1
     *
     * @return Commande
     */
    public function setIdannonce1(\TrocBundle\Entity\Annonce $idannonce1 = null)
    {
        $this->idannonce1 = $idannonce1;

        return $this;
    }

    /**
     * Get idannonce1
     *
     * @return \TrocBundle\Entity\Annonce
     */
    public function getIdannonce1()
    {
        return $this->idannonce1;
    }

    /**
     * Set idannonce2
     *
     * @param \TrocBundle\Entity\Annonce $idannonce2
     *
     * @return Commande
     */
    public function setIdannonce2(\TrocBundle\Entity\Annonce $idannonce2 = null)
    {
        $this->idannonce2 = $idannonce2;

        return $this;
    }

    /**
     * Get idannonce2
     *
     * @return \TrocBundle\Entity\Annonce
     */
    public function getIdannonce2()
    {
        return $this->idannonce2;
    }

    /**
     * Set idclient
     *
     * @param \AppBundle\Entity\User $idclient
     *
     * @return Commande
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
