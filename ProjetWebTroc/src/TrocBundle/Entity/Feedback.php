<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;

/**
 * Feedback
 *
 * @ORM\Table(name="feedback", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_Annonce", columns={"id_Annonce"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\FeedbackRepository")
 */
class Feedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_feed", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFeed;

    /**
     * @var integer
     *
     * @ORM\Column(name="like_feed", type="integer", nullable=false)
     */
    private $likeFeed;

    /**
     * @var integer
     *
     * @ORM\Column(name="dislike", type="integer", nullable=false)
     */
    private $dislike;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser =null;

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
     * Get idFeed
     *
     * @return integer
     */
    public function getIdFeed()
    {
        return $this->idFeed;
    }

    /**
     * Set likeFeed
     *
     * @param integer $likeFeed
     *
     * @return Feedback
     */
    public function setLikeFeed($likeFeed)
    {
        $this->likeFeed = $likeFeed;

        return $this;
    }

    /**
     * Get likeFeed
     *
     * @return integer
     */
    public function getLikeFeed()
    {
        return $this->likeFeed;
    }

    /**
     * Set dislike
     *
     * @param integer $dislike
     *
     * @return Feedback
     */
    public function setDislike($dislike)
    {
        $this->dislike = $dislike;

        return $this;
    }

    /**
     * Get dislike
     *
     * @return integer
     */
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return Feedback
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Feedback
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
     * Set idUser
     *
     * @param \AppBundle\Entity\User $idUser
     *
     * @return Feedback
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
     * @return Feedback
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
}
