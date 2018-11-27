<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allocoursier
 *
 * @ORM\Table(name="allocoursier", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="idCoursier", columns={"idCoursier"})})
 * @ORM\Entity
 */
class Allocoursier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAlloService", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalloservice;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseClient", type="text", length=65535, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseLivraison", type="text", length=65535, nullable=false)
     */
    private $adresselivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnregistrementService", type="datetime", nullable=false)
     */
    private $dateenregistrementservice;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



    /**
     * Get idalloservice
     *
     * @return integer
     */
    public function getIdalloservice()
    {
        return $this->idalloservice;
    }

    /**
     * Set adresseclient
     *
     * @param string $adresseclient
     *
     * @return Allocoursier
     */
    public function setAdresseclient($adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get adresseclient
     *
     * @return string
     */
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set adresselivraison
     *
     * @param string $adresselivraison
     *
     * @return Allocoursier
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
     * Set description
     *
     * @param string $description
     *
     * @return Allocoursier
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
     * Set dateenregistrementservice
     *
     * @param \DateTime $dateenregistrementservice
     *
     * @return Allocoursier
     */
    public function setDateenregistrementservice($dateenregistrementservice)
    {
        $this->dateenregistrementservice = $dateenregistrementservice;

        return $this;
    }

    /**
     * Get dateenregistrementservice
     *
     * @return \DateTime
     */
    public function getDateenregistrementservice()
    {
        return $this->dateenregistrementservice;
    }

    /**
     * Set idcoursier
     *
     * @param \AppBundle\Entity\User $idcoursier
     *
     * @return Allocoursier
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
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Allocoursier
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
}
