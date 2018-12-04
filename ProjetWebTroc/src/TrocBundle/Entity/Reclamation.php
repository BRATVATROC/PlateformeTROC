<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_Annonce", columns={"id_Annonce"}), @ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_Ruser", columns={"id_Ruser"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\R
 * eclamationRepository")
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat_Reclamation", type="string", length=255, nullable=false)
     */
    private $etatReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_Reclamation", type="string", length=255, nullable=false)
     */
    private $typeReclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Annonce", referencedColumnName="id_annonce")
     * })
     */
    private $idAnnonce;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Ruser", referencedColumnName="id")
     * })
     */
    private $idRuser;

  /**
     * Get idRec
     *
     * @return integer
     */
    public function getIdRec()
    {
        return $this->idRec;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reclamation
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reclamation
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
     * Set etatReclamation
     *
     * @param string $etatReclamation
     *
     * @return Reclamation
     */
    public function setEtatReclamation($etatReclamation)
    {
        $this->etatReclamation = $etatReclamation;

        return $this;
    }

    /**
     * Get etatReclamation
     *
     * @return string
     */
    public function getEtatReclamation()
    {
        return $this->etatReclamation;
    }

    /**
     * Set typeReclamation
     *
     * @param string $typeReclamation
     *
     * @return Reclamation
     */
    public function setTypeReclamation($typeReclamation)
    {
        $this->typeReclamation = $typeReclamation;

        return $this;
    }

    /**
     * Get typeReclamation
     *
     * @return string
     */
    public function getTypeReclamation()
    {
        return $this->typeReclamation;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Reclamation
     */
    public function setIdUser(\AppBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idAnnonce
     *
     * @param \TrocBundle\Entity\Annonce $idAnnonce
     *
     * @return Reclamation
     */
    public function setIdAnnonce(\TrocBundle\Entity\Annonce $idAnnonce = null)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \TrocBundle\Entity\Annonce
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idRuser
     *
     * @param \AppBundle\Entity\User $idRuser
     *
     * @return Reclamation
     */
    public function setIdRuser(\AppBundle\Entity\User $idRuser = null)
    {
        $this->idRuser = $idRuser;

        return $this;
    }

    /**
     * Get idRuser
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdRuser()
    {
        return $this->idRuser;
    }
}
