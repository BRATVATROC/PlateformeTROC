<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blacklist
 *
 * @ORM\Table(name="blacklist")
 * @ORM\Entity
 */
class Blacklist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_blacklist", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBlacklist;



    /**
     * Get idBlacklist
     *
     * @return integer
     */
    public function getIdBlacklist()
    {
        return $this->idBlacklist;
    }
}
