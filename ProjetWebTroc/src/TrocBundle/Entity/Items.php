<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Items
 *
 * @ORM\Table(name="items", indexes={@ORM\Index(name="idSousCat", columns={"idSousCat"})})
 * @ORM\Entity
 */
class Items
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idItems", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditems;

    /**
     * @var string
     *
     * @ORM\Column(name="nomItems", type="string", length=255, nullable=false)
     */
    private $nomitems;

    /**
     * @var string
     * @Assert\Image()
     * @ORM\Column(name="imgIems", type="string", length=255, nullable=false)
     */
    private $imgiems;

    /**
     * @var \Souscategorie
     *
     * @ORM\ManyToOne(targetEntity="Souscategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSousCat", referencedColumnName="idSousCat")
     * })
     */
    private $idsouscat;
    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idUser;

     /**
     * Get iditems
     *
     * @return integer
     */
    public function getIditems()
    {
        return $this->iditems;
    }

    /**
     * Set nomitems
     *
     * @param string $nomitems
     *
     * @return Items
     */
    public function setNomitems($nomitems)
    {
        $this->nomitems = $nomitems;

        return $this;
    }

    /**
     * Get nomitems
     *
     * @return string
     */
    public function getNomitems()
    {
        return $this->nomitems;
    }

    /**
     * Set imgiems
     *
     * @param string $imgiems
     *
     * @return Items
     */
    public function setImgiems($imgiems)
    {
        $this->imgiems = $imgiems;

        return $this;
    }

    /**
     * Get imgiems
     *
     * @return string
     */
    public function getImgiems()
    {
        return $this->imgiems;
    }

    /**
     * Set idsouscat
     *
     * @param \TrocBundle\Entity\Souscategorie $idsouscat
     *
     * @return Items
     */
    public function setIdsouscat(\TrocBundle\Entity\Souscategorie $idsouscat = null)
    {
        $this->idsouscat = $idsouscat;

        return $this;
    }

    /**
     * Get idsouscat
     *
     * @return \TrocBundle\Entity\Souscategorie
     */
    public function getIdsouscat()
    {
        return $this->idsouscat;
    }



    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Items
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
