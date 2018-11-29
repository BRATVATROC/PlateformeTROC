<?php

namespace TrocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Souscategorie
 *
 * @ORM\Table(name="souscategorie", indexes={@ORM\Index(name="idcat", columns={"idcat"})})
 * @ORM\Entity
 */
class Souscategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSousCat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsouscat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSousCat", type="string", length=255, nullable=false)
     */
    private $nomsouscat;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcat", referencedColumnName="idCat")
     * })
     */
    private $idcat;



    /**
     * Get idsouscat
     *
     * @return integer
     */
    public function getIdsouscat()
    {
        return $this->idsouscat;
    }

    /**
     * Set nomsouscat
     *
     * @param string $nomsouscat
     *
     * @return Souscategorie
     */
    public function setNomsouscat($nomsouscat)
    {
        $this->nomsouscat = $nomsouscat;

        return $this;
    }

    /**
     * Get nomsouscat
     *
     * @return string
     */
    public function getNomsouscat()
    {
        return $this->nomsouscat;
    }

    /**
     * Set idcat
     *
     * @param \TrocBundle\Entity\Categorie $idcat
     *
     * @return Souscategorie
     */
    public function setIdcat(\TrocBundle\Entity\Categorie $idcat = null)
    {
        $this->idcat = $idcat;

        return $this;
    }

    /**
     * Get idcat
     *
     * @return \TrocBundle\Entity\Categorie
     */
    public function getIdcat()
    {
        return $this->idcat;
    }
}
