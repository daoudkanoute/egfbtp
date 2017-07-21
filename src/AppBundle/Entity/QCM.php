<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QCMsRepository")
 * @ORM\Table(name="QCMs")
 */
class QCM
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
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Question", mappedBy="qcm", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $questions;

    /**
     * @ORM\Column(type="float", length=3, nullable=true)
     */
    protected $successMinimum;

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
     * Set title
     *
     * @param string $title
     *
     * @return QCM
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add question
     *
     * @param \AppBundle\Entity\Question $question
     *
     * @return QCM
     */
    public function addQuestion(\AppBundle\Entity\Question $question)
    {
        $question->setQcm($this);
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \AppBundle\Entity\Question $question
     */
    public function removeQuestion(\AppBundle\Entity\Question $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set successMinimum
     *
     * @param float $successMinimum
     *
     * @return QCM
     */
    public function setSuccessMinimum($successMinimum)
    {
        $this->successMinimum = $successMinimum;

        return $this;
    }

    /**
     * Get successMinimum
     *
     * @return float
     */
    public function getSuccessMinimum()
    {
        return $this->successMinimum;
    }
}
