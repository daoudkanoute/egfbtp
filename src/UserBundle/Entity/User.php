<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 * @ORM\Table(name="users")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="email", column=@ORM\Column(type="string", name="email", length=255, unique=true, nullable=true)),
 *      @ORM\AttributeOverride(name="emailCanonical", column=@ORM\Column(type="string", name="email_canonical", length=255, unique=true, nullable=true))
 *     })
 * })
 * @UniqueEntity("email")
 */
class User extends BaseUser
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
     * @Assert\NotBlank(message="Veuillez saisir le nom de société.", groups={"Registration"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Le nom de la société est très court.",
     *     maxMessage="Le nom de la société est très long.",
     *     groups={"Registration"}
     * )
     */
    protected $societe;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     *
     * @Assert\NotBlank(message="Veuillez saisir le numéro de siret.", groups={"Registration"})
     * @Assert\Length(
     *     min=3,
     *     max=25,
     *     minMessage="Le numéro de SIRET est très court.",
     *     maxMessage="Le numéro de SIRET est très long.",
     *     groups={"Registration"}
     * )
     */
    protected $siret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank(message="Veuillez saisir l'adresse.", groups={"Registration"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="l'adresse est très courte.",
     *     maxMessage="l'adresse est très longue.",
     *     groups={"Registration"}
     * )
     */
    protected $adresse;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    protected $telephone;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $emailEnabled = false;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Apprenant", mappedBy="ett")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $apprenantsETT;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\Apprenant", mappedBy="of")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $apprenantsOF;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SearchPerDay", mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $searchs;

    public function __construct()
    {
        parent::__construct();
        $this->emailEnabled = false;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return User
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return User
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        if(!$this->getUsername())
            $this->setUsername($email);

        return $this;
    }

    /**
     * Set emailEnabled
     *
     * @param boolean $emailEnabled
     *
     * @return User
     */
    public function setEmailEnabled($emailEnabled)
    {
        $this->emailEnabled = $emailEnabled;

        return $this;
    }

    /**
     * Get emailEnabled
     *
     * @return boolean
     */
    public function getEmailEnabled()
    {
        return $this->emailEnabled;
    }

    /**
     * Add apprenantsETT
     *
     * @param \UserBundle\Entity\Apprenant $apprenantsETT
     *
     * @return User
     */
    public function addApprenantsETT(\UserBundle\Entity\Apprenant $apprenantsETT)
    {
        $this->apprenantsETT[] = $apprenantsETT;

        return $this;
    }

    /**
     * Remove apprenantsETT
     *
     * @param \UserBundle\Entity\Apprenant $apprenantsETT
     */
    public function removeApprenantsETT(\UserBundle\Entity\Apprenant $apprenantsETT)
    {
        $this->apprenantsETT->removeElement($apprenantsETT);
    }

    /**
     * Get apprenantsETT
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprenantsETT()
    {
        return $this->apprenantsETT;
    }

    /**
     * Add apprenantsOF
     *
     * @param \UserBundle\Entity\User $apprenantsOF
     *
     * @return User
     */
    public function addApprenantsOF(\UserBundle\Entity\Apprenant $apprenantsOF)
    {
        $this->apprenantsOF[] = $apprenantsOF;

        return $this;
    }

    /**
     * Remove apprenantsOF
     *
     * @param \UserBundle\Entity\User $apprenantsOF
     */
    public function removeApprenantsOF(\UserBundle\Entity\Apprenant $apprenantsOF)
    {
        $this->apprenantsOF->removeElement($apprenantsOF);
    }

    /**
     * Get apprenantsOF
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprenantsOF()
    {
        return $this->apprenantsOF;
    }

    /**
     * Add search
     *
     * @param \AppBundle\Entity\SearchPerDay $search
     *
     * @return User
     */
    public function addSearch(\AppBundle\Entity\SearchPerDay $search)
    {
        $this->searchs[] = $search;

        return $this;
    }

    /**
     * Remove search
     *
     * @param \AppBundle\Entity\SearchPerDay $search
     */
    public function removeSearch(\AppBundle\Entity\SearchPerDay $search)
    {
        $this->searchs->removeElement($search);
    }

    /**
     * Get searchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSearchs()
    {
        return $this->searchs;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
