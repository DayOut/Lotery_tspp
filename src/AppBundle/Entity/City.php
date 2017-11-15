<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2017
 * Time: 2:50
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class City
 *
 * @ORM\Entity()
 * @ORM\Table(name="city")
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address", mappedBy="city_id")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $city_name;


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
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->city_name = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->city_name;
    }
}
