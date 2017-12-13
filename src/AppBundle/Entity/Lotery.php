<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Lotery
 *
 * @ORM\Entity()
 * @ORM\Table(name="lotery")
 */
class Lotery
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $lotery_id;

    /**
     * @var organizer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Organizer", inversedBy="$id")
     * @ORM\JoinColumn(name="organizer_id", onDelete="CASCADE")
     */
    protected $organizer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lotery_start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lotery_end;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $jackpot;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $ticket_price;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $tickets_quantity;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=250)
     */
    protected $sponsor;

    /**
     * @var participant[]
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="$id")
     * @ORM\JoinColumn(name="user_id", onDelete="CASCADE")
     */
    protected $participants;

    /**
     * @var participant
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
    */
    protected $winner;

    public function __construct()
    {
        $this->setLoteryStart(new \DateTime());
    }

    /**
     * Get loteryId
     *
     * @return integer
     */
    public function getLoteryId()
    {
        return $this->lotery_id;
    }

    /**
     * Set loteryStart
     *
     * @param \DateTime $loteryStart
     *
     * @return Lotery
     */
    public function setLoteryStart($loteryStart)
    {
        $this->lotery_start = $loteryStart;

        return $this;
    }

    /**
     * Get loteryStart
     *
     * @return \DateTime
     */
    public function getLoteryStart()
    {
        return $this->lotery_start;
    }

    /**
     * Set loteryEnd
     *
     * @param \DateTime $loteryEnd
     *
     * @return Lotery
     */
    public function setLoteryEnd($loteryEnd)
    {
        $this->lotery_end = $loteryEnd;

        return $this;
    }

    /**
     * Get loteryEnd
     *
     * @return \DateTime
     */
    public function getLoteryEnd()
    {
        return $this->lotery_end;
    }

    /**
     * Set jackpot
     *
     * @param string $jackpot
     *
     * @return Lotery
     */
    public function setJackpot($jackpot)
    {
        $this->jackpot = $jackpot;

        return $this;
    }

    /**
     * Get jackpot
     *
     * @return string
     */
    public function getJackpot()
    {
        return $this->jackpot;
    }

    /**
     * Set ticketPrice
     *
     * @param string $ticketPrice
     *
     * @return Lotery
     */
    public function setTicketPrice($ticketPrice)
    {
        $this->ticket_price = $ticketPrice;

        return $this;
    }

    /**
     * Get ticketPrice
     *
     * @return string
     */
    public function getTicketPrice()
    {
        return $this->ticket_price;
    }

    /**
     * Set ticketsQuantity
     *
     * @param integer $ticketsQuantity
     *
     * @return Lotery
     */
    public function setTicketsQuantity($ticketsQuantity)
    {
        $this->tickets_quantity = $ticketsQuantity;

        return $this;
    }

    /**
     * Get ticketsQuantity
     *
     * @return integer
     */
    public function getTicketsQuantity()
    {
        return $this->tickets_quantity;
    }

    /**
     * Set sponsor
     *
     * @param string $sponsor
     *
     * @return Lotery
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get sponsor
     *
     * @return string
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set organizer
     *
     * @param \AppBundle\Entity\Organizer $organizer
     *
     * @return Lotery
     */
    public function setOrganizer(\AppBundle\Entity\Organizer $organizer = null)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * Get organizer
     *
     * @return \AppBundle\Entity\Organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Set participants
     *
     * @param \AppBundle\Entity\Participant $participants
     *
     * @return Lotery
     */
    public function setParticipants(\AppBundle\Entity\Participant $participants = null)
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * Get participants
     *
     * @return \AppBundle\Entity\Participant
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set winner
     *
     * @param \AppBundle\Entity\Participant $winner
     *
     * @return Lotery
     */
    public function setWinner(\AppBundle\Entity\Participant $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \AppBundle\Entity\Participant
     */
    public function getWinner()
    {
        return $this->winner;
    }

}
