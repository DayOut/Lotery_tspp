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
     * Set countryId
     *
     * @param \AppBundle\Entity\Country $countryId
     *
     * @return Address
     */
    public function setCountryId(\AppBundle\Entity\Country $countryId = null)
    {
        $this->country_id = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set cityId
     *
     * @param \AppBundle\Entity\City $cityId
     *
     * @return Address
     */
    public function setCityId(\AppBundle\Entity\City $cityId = null)
    {
        $this->city_id = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return \AppBundle\Entity\City
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * Set streetId
     *
     * @param \AppBundle\Entity\Street $streetId
     *
     * @return Address
     */
    public function setStreetId(\AppBundle\Entity\Street $streetId = null)
    {
        $this->street_id = $streetId;

        return $this;
    }

    /**
     * Get streetId
     *
     * @return \AppBundle\Entity\Street
     */
    public function getStreetId()
    {
        return $this->street_id;
    }

    /**
     * Set houseId
     *
     * @param \AppBundle\Entity\House $houseId
     *
     * @return Address
     */
    public function setHouseId(\AppBundle\Entity\House $houseId = null)
    {
        $this->house_id = $houseId;

        return $this;
    }

    /**
     * Get houseId
     *
     * @return \AppBundle\Entity\House
     */
    public function getHouseId()
    {
        return $this->house_id;
    }
}
