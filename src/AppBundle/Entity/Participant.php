<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Participant
 *
 * @ORM\Entity()
 * @ORM\Table(name="participant")
 */
class Participant
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Lotery", mappedBy="participants")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $user_name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $user_last_name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $user_phone;

    /*
     * @var Lotery[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Order", mappedBy="participants")

    protected $lotery_id;*/



    /**
     * Get userId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Participant
     */
    public function setUserName($userName)
    {
        $this->user_name = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set userLastName
     *
     * @param string $userLastName
     *
     * @return Participant
     */
    public function setUserLastName($userLastName)
    {
        $this->user_last_name = $userLastName;

        return $this;
    }

    /**
     * Get userLastName
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->user_last_name;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return Participant
     */
    public function setUserPhone($userPhone)
    {
        $this->user_phone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->user_phone;
    }
}
