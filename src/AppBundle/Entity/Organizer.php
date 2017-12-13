<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2017
 * Time: 1:02
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Organizer
 *
 * @ORM\Entity()
 * @ORM\Table(name="organizer")
 */
class Organizer
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Lotery", mappedBy="organizer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $owner;

    /**
     * @var $registration_address
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Address", inversedBy="address_id")
     * @ORM\JoinColumn(name="address_id", onDelete="CASCADE")
     */
    protected $registration_address;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $registration_date;

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Organizer
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return Organizer
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registration_date = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * Set registrationAddress
     *
     * @param \AppBundle\Entity\Organizer $registrationAddress
     *
     * @return Organizer
     */
    public function setRegistrationAddress(\AppBundle\Entity\Organizer $registrationAddress = null)
    {
        $this->registration_address = $registrationAddress;

        return $this;
    }

    /**
     * Get registrationAddress
     *
     * @return \AppBundle\Entity\Organizer
     */
    public function getRegistrationAddress()
    {
        return $this->registration_address;
    }

    public function __toString() {
        return $this->owner;
    }
}
