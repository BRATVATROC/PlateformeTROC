<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", indexes={@ORM\Index(name="id_event", columns={"id_event"})})
 * @ORM\Entity(repositoryClass="EventBundle\Repository\ParticipantRepository")
 */
class Participant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var \EventBundle\Entity\Event
     *
     * @ORM\ManyToOne(targetEntity="TrocBundle\Entity\Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_event", referencedColumnName="id")
     * })
     */
    private $idEvent;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Participant
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEvent
     *
     * @param \EventBundle\Entity\Event $idEvent
     *
     * @return Participant
     */
    public function setIdEvent( $idEvent = null)
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * Get idEvent
     *
     * @return \EventBundle\Entity\Event
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }
}
