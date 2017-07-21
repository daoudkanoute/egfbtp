<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QCMsQuestionsRepository")
 * @ORM\Table(name="QCMs_questions")
 */
class Question
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
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    protected $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $question;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $image;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Sound", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $sound;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Response",mappedBy="question", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $responses;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\QCM", inversedBy="questions")
     */
    protected $qcm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->responses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param string $type
     *
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Add response
     *
     * @param \AppBundle\Entity\Response $response
     *
     * @return Question
     */
    public function addResponse(\AppBundle\Entity\Response $response)
    {
        $response->setQuestion($this);
        $this->responses[] = $response;

        return $this;
    }

    /**
     * Remove response
     *
     * @param \AppBundle\Entity\Response $response
     */
    public function removeResponse(\AppBundle\Entity\Response $response)
    {
        $this->responses->removeElement($response);
    }

    /**
     * Get responses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Set qcm
     *
     * @param \AppBundle\Entity\QCM $qcm
     *
     * @return Question
     */
    public function setQcm(\AppBundle\Entity\QCM $qcm = null)
    {
        $this->qcm = $qcm;

        return $this;
    }

    /**
     * Get qcm
     *
     * @return \AppBundle\Entity\QCM
     */
    public function getQcm()
    {
        return $this->qcm;
    }

    /**
     * Get getHasResponse
     *
     * @return boolean
     */
    public function getHasResponse()
    {
        foreach ($this->responses as $response) {
            if($response->getIsTrue())
                return true;
        }
        return false;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Question
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sound
     *
     * @param \AppBundle\Entity\Sound $sound
     *
     * @return Question
     */
    public function setSound(\AppBundle\Entity\Sound $sound = null)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get sound
     *
     * @return \AppBundle\Entity\Sound
     */
    public function getSound()
    {
        return $this->sound;
    }
}
