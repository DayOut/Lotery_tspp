<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2017
 * Time: 2:49
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 *
 * @ORM\Entity()
 * @ORM\Table(name="address")
 */
class Address
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Organizer", mappedBy="registration_address")
     */
    protected $id;

    /**
     * @var Country
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country", inversedBy="country_id")
     * @ORM\JoinColumn(name="country_id", onDelete="CASCADE")
     */
    protected $country_id;

    /**
     * @var City
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City", inversedBy="city_id")
     * @ORM\JoinColumn(name="city_id", onDelete="CASCADE")
     */
    protected $city_id;

    /**
     * @var Street
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Street", inversedBy="street_id")
     * @ORM\JoinColumn(name="street_id", onDelete="CASCADE")
     */
    protected $street_id;

    /**
     * @var House
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\House", inversedBy="house_id")
     * @ORM\JoinColumn(name="house_id", onDelete="CASCADE")
     */
    protected $house_id;
}