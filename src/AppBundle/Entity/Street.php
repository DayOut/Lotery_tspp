<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 15.11.2017
 * Time: 2:51
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Street
 *
 * @ORM\Entity()
 * @ORM\Table(name="street")
 */
class Street
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address", mappedBy="street_id")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $street_name;


    /**
     * Get streetId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set streetName
     *
     * @param string $streetName
     *
     * @return Street
     */
    public function setStreetName($streetName)
    {
        $this->street_name = $streetName;

        return $this;
    }

    /**
     * Get streetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->street_name;
    }
}
