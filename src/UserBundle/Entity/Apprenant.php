<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ApprenantRepository")
 * @ORM\Table(name="apprenants")
 */
class Apprenant
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
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank(message="Veuillez saisir le nom de l'apprenant.", groups={"Registration"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Le nom de l'apprenant est très court.",
     *     maxMessage="Le nom de l'apprenant est très long.",
     * )
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     *
     * @Assert\NotBlank(message="Veuillez saisir le prenom de l'apprenant.", groups={"Registration"})
     * @Assert\Length(
     *     min=3,
     *     max=25,
     *     minMessage="Le prenom de l'apprenant est très court.",
     *     maxMessage="Le prenom de l'apprenant est très long.",
     * )
     */
    protected $prenom;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $birthday;

    /**
     * @ORM\Column(type="string", length=30, unique=true, nullable=true)
     */
    protected $code;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $onPaper;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="apprenantsETT")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     * @Assert\NotBlank(message="Ce champ est obligatoire")
     *
     */
    protected $ett;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="apprenantsOF")
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    protected $of;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Attestation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    protected $attestation;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Apprenant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Apprenant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Apprenant
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Apprenant
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set ett
     *
     * @param \UserBundle\Entity\User $ett
     *
     * @return Apprenant
     */
    public function setEtt(\UserBundle\Entity\User $ett = null)
    {
        $this->ett = $ett;

        return $this;
    }

    /**
     * Get ett
     *
     * @return \UserBundle\Entity\Apprenant
     */
    public function getEtt()
    {
        return $this->ett;
    }

    /**
     * Set of
     *
     * @param \UserBundle\Entity\User $of
     *
     * @return Apprenant
     */
    public function setOf(\UserBundle\Entity\User $of = null)
    {
        $this->of = $of;

        return $this;
    }

    /**
     * Get of
     *
     * @return \UserBundle\Entity\User
     */
    public function getOf()
    {
        return $this->of;
    }

    /**
     * Set attestation
     *
     * @param \AppBundle\Entity\Attestation $attestation
     *
     * @return Apprenant
     */
    public function setAttestation(\AppBundle\Entity\Attestation $attestation = null)
    {
        $this->attestation = $attestation;

        return $this;
    }

    /**
     * Get attestation
     *
     * @return \AppBundle\Entity\Attestation
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    /**
     * Set onPaper
     *
     * @param boolean $onPaper
     *
     * @return Apprenant
     */
    public function setOnPaper($onPaper)
    {
        $this->onPaper = $onPaper;

        return $this;
    }

    /**
     * Get onPaper
     *
     * @return boolean
     */
    public function getOnPaper()
    {
        return $this->onPaper;
    }
}
