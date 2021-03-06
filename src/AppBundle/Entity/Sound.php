<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Video
 *
 * @ORM\Table(name="sound")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SoundRepository")
 */
class Sound
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="original_name", type="string", length=255)
     */
    private $originalName;

    /**
     * @var string
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var boolean
     * @ORM\Column(name="converted", type="boolean")
     */
    private $isConverted = false;

    /**
     * @Assert\File( maxSize="100M" )
     */
    private $file;

    /**
     * @var string
     * @ORM\Column(name="duration", type="string", nullable=true, length=255)
     */
    private $duration;

    /**
     * @ORM\Column(name="title", type="string", nullable=true, length=255)
     */
    private $title;


    public function setFile(UploadedFile $file) {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    

    /**
     * Set originalName
     *
     * @param string $originalName
     *
     * @return Sound
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }


    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Sound
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Sound
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

    // Obtention du temps
    public function getTime()
    {
        if (!is_null($this->duration)) return gmdate("H:i:s", $this->duration);
        else return null;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Sound
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set isConverted
     *
     * @param boolean $isConverted
     *
     * @return Sound
     */
    public function setIsConverted($isConverted)
    {
        $this->isConverted = $isConverted;

        return $this;
    }

    /**
     * Get isConverted
     *
     * @return boolean
     */
    public function getIsConverted()
    {
        return $this->isConverted;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Sound
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }
}
