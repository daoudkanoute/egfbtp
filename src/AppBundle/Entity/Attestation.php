<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttestationsRepository")
 * @ORM\Table(name="attestations")
 */
class Attestation
{

    /**
     * Hook timestampable behavior
     * updates createdAt, updatedAt fields
     */
    use TimestampableEntity;

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
     * @ORM\Column(type="float", nullable=true)
     */
    protected $note;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    protected $percent;

    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $successed;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $imageOF;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date = new \DateTime('today');
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
     * Set successed
     *
     * @param boolean $successed
     *
     * @return Attestation
     */
    public function setSuccessed($successed)
    {
        $this->successed = $successed;

        return $this;
    }

    /**
     * Get successed
     *
     * @return boolean
     */
    public function getSuccessed()
    {
        return $this->successed;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return Attestation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Attestation
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
     * Set imageOF
     *
     * @param \AppBundle\Entity\Image $imageOF
     *
     * @return Attestation
     */
    public function setImageOF(\AppBundle\Entity\Image $imageOF = null)
    {
        $this->imageOF = $imageOF;

        return $this;
    }

    /**
     * Get imageOF
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImageOF()
    {
        return $this->imageOF;
    }

    /**
     * Set percent
     *
     * @param float $percent
     *
     * @return Attestation
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }
}
