<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchPerDayRepository")
 * @ORM\Table(name="search_per_day")
 */
class SearchPerDay
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @var float
     * @ORM\Column(type="integer")
     */
    protected $count;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="searchs")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $user;

    public function __construct()
    {
        $this->count = 0;
        $this->date  = new \DateTime('today');
    }

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return SearchPerDay
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return SearchPerDay
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return SearchPerDay
     */
    public function addCount()
    {
        $this->count++;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return SearchPerDay
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
