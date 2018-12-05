<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signaler
 *
 * @ORM\Table(name="signaler", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_commentaire", columns={"id_commentaire"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\SignalerRepository")
 */
class Signaler
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_signale", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSignale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_signale", type="datetime", nullable=false)
     */
    private $dateSignale;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire", referencedColumnName="id_commentaire")
     * })
     */
    private $idCommentaire;



    /**
     * Get idSignale
     *
     * @return integer
     */
    public function getIdSignale()
    {
        return $this->idSignale;
    }

    /**
     * Set dateSignale
     *
     * @param \DateTime $dateSignale
     *
     * @return Signaler
     */
    public function setDateSignale($dateSignale)
    {
        $this->dateSignale = $dateSignale;

        return $this;
    }

    /**
     * Get dateSignale
     *
     * @return \DateTime
     */
    public function getDateSignale()
    {
        return $this->dateSignale;
    }



    /**
     * Set idCommentaire
     *
     * @param \TrocBundle\Entity\Commentaire $idCommentaire
     *
     * @return Signaler
     */
    public function setIdCommentaire(\TrocBundle\Entity\Commentaire $idCommentaire = null)
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    /**
     * Get idCommentaire
     *
     * @return \TrocBundle\Entity\Commentaire
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Signaler
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
