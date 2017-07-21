<?php

namespace AppBundle\Twig;

use AppBundle\Entity\Group;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

/**
 * Class GeneralExtension
 * @package Bundle\FrontBundle\Twig
 */
class AppTwigExtension extends \Twig_Extension
{
    private $apprenantRepository;
    private $user;

    public function __construct($em, $token)
    {
        $this->apprenantRepository      = $em->getRepository('UserBundle:Apprenant');
        $this->user                     = $token ? $token->getUser() : null;
    }

    public function getNotifications(){
        if(!$this->user || $this->user === 'anon.' || (is_object($this->user) && !$this->user->hasRole('ROLE_OF'))) { return null; }
        return [
            'attestations_en_attente' => $this->apprenantRepository->getNotifications($this->user)
        ];
    }

    public function getTests()
    {
        return [
            'instanceof' =>  new \Twig_Function_Method($this, 'isInstanceof')
        ];
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()

    {
        return [];
    }

    public function getGlobals()
    {
        return array(
            "notifications" => $this->getNotifications(),
        );
    }

    /**
     * @param $var
     * @param $instance
     * @return bool
     */
    public function isInstanceof($var, $instance) {
        return  $var instanceof $instance;
    }

    /**
     * Returns the name of the extension.
     * @return string The extension name
     */
    public function getName()
    {
        return 'app_twig_extension';
    }

}