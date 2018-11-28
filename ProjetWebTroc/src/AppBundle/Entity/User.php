<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_8D93D649C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
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

    public function getId()
    {
        return $this->id;
    }


    /**
     * Set usernom
     *
     * @param string $usernom
     *
     * @return User
     */
    public function setUsernom($usernom)
    {
        $this->usernom = $usernom;
    
        return $this;
    }

    /**
     * Get usernom
     *
     * @return string
     */
    public function getUsernom()
    {
        return $this->usernom;
    }

    /**
     * Set userprenom
     *
     * @param string $userprenom
     *
     * @return User
     */
    public function setUserprenom($userprenom)
    {
        $this->userprenom = $userprenom;
    
        return $this;
    }

    /**
     * Get userprenom
     *
     * @return string
     */
    public function getUserprenom()
    {
        return $this->userprenom;
    }

    /**
     * Set usercin
     *
     * @param integer $usercin
     *
     * @return User
     */
    public function setUsercin($usercin)
    {
        $this->usercin = $usercin;
    
        return $this;
    }

    /**
     * Get usercin
     *
     * @return integer
     */
    public function getUsercin()
    {
        return $this->usercin;
    }

    /**
     * Set useradresse
     *
     * @param string $useradresse
     *
     * @return User
     */
    public function setUseradresse($useradresse)
    {
        $this->useradresse = $useradresse;
    
        return $this;
    }

    /**
     * Get useradresse
     *
     * @return string
     */
    public function getUseradresse()
    {
        return $this->useradresse;
    }

    /**
     * Set userphone
     *
     * @param integer $userphone
     *
     * @return User
     */
    public function setUserphone($userphone)
    {
        $this->userphone = $userphone;
    
        return $this;
    }

    /**
     * Get userphone
     *
     * @return integer
     */
    public function getUserphone()
    {
        return $this->userphone;
    }

    /**
     * Set userimage
     *
     * @param string $userimage
     *
     * @return User
     */
    public function setUserimage($userimage)
    {
        $this->userimage = $userimage;
    
        return $this;
    }

    /**
     * Get userimage
     *
     * @return string
     */
    public function getUserimage()
    {
        return $this->userimage;
    }
}
