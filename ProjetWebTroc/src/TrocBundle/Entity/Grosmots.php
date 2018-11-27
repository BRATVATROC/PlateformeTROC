<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grosmots
 *
 * @ORM\Table(name="grosmots")
 * @ORM\Entity
 */
class Grosmots
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mot", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMot;

    /**
     * @var string
     *
     * @ORM\Column(name="Grosmot", type="string", length=255, nullable=false)
     */
    private $grosmot;



    /**
     * Get idMot
     *
     * @return integer
     */
    public function getIdMot()
    {
        return $this->idMot;
    }

    /**
     * Set grosmot
     *
     * @param string $grosmot
     *
     * @return Grosmots
     */
    public function setGrosmot($grosmot)
    {
        $this->grosmot = $grosmot;

        return $this;
    }

    /**
     * Get grosmot
     *
     * @return string
     */
    public function getGrosmot()
    {
        return $this->grosmot;
    }
}
