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
 * Class House
 *
 * @ORM\Entity()
 * @ORM\Table(name="house")
 */
class House
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address", mappedBy="house_id")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $house_name;

    /**
     * Get houseId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set houseName
     *
     * @param string $houseName
     *
     * @return House
     */
    public function setHouseName($houseName)
    {
        $this->house_name = $houseName;

        return $this;
    }

    /**
     * Get houseName
     *
     * @return string
     */
    public function getHouseName()
    {
        return $this->house_name;
    }
}
