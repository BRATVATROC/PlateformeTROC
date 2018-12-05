<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity(repositoryClass="TrocBundle\Repository\LivraisonRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="userNom", type="string", length=255, nullable=true)
     */
    private $usernom;

    /**
     * @var string
     *
     * @ORM\Column(name="userPrenom", type="string", length=255, nullable=true)
     */
    private $userprenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="userCIN", type="integer", nullable=true)
     */
    private $usercin;

    /**
     * @var string
     *
     * @ORM\Column(name="userAdresse", type="string", length=255, nullable=true)
     */
    private $useradresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="userPhone", type="integer", nullable=true)
     */
    private $userphone;

    /**
     * @var string
     *
     * @ORM\Column(name="userImage", type="string", length=255, nullable=true)
     */
    private $userimage;
    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_USER');
    }
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsernom()
    {
        return $this->usernom;
    }

    /**
     * @param string $usernom
     */
    public function setUsernom($usernom)
    {
        $this->usernom = $usernom;
    }

    /**
     * @return string
     */
    public function getUserprenom()
    {
        return $this->userprenom;
    }

    /**
     * @param string $userprenom
     */
    public function setUserprenom($userprenom)
    {
        $this->userprenom = $userprenom;
    }

    /**
     * @return int
     */
    public function getUsercin()
    {
        return $this->usercin;
    }


    /**
     * @param int $usercin
     */
    public function setUsercin($usercin)
    {
        $this->usercin = $usercin;
    }

    /**
     * @return string
     */
    public function getUseradresse()
    {
        return $this->useradresse;
    }

    /**
     * @param string $useradresse
     */
    public function setUseradresse($useradresse)
    {
        $this->useradresse = $useradresse;
    }

    /**
     * @return int
     */
    public function getUserphone()
    {
        return $this->userphone;
    }

    /**
     * @param int $userphone
     */
    public function setUserphone($userphone)
    {
        $this->userphone = $userphone;
    }

    /**
     * @return string
     */
    public function getUserimage()
    {
        return $this->userimage;
    }

    /**
     * @param string $userimage
     */
    public function setUserimage($userimage)
    {
        $this->userimage = $userimage;
    }

}
