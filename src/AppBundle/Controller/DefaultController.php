<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SearchPerDay;
use AppBundle\Form\Type\AnnuaireType;
use FOS\UserBundle\Model\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /** @var User $user */
        $user = $this->getUser();
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_statistiques');
        } elseif($this->isGranted('ROLE_OF')) {
            return $this->redirectToRoute('of_list_apprenants');
        } else {
            return $this->redirectToRoute('annuaire');
        }
    }

    /**
     * @Route("/annuaire", name="annuaire")
     * @Template("AppBundle::annuaire.html.twig")
     */
    public function annuaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $apprenantRepository = $em->getRepository('UserBundle:Apprenant');
        $searchPerDayRepository = $em->getRepository('AppBundle:SearchPerDay');
        $data = [];
        $query = $apprenantRepository->getSearchResult($data);
        $form = $this->createForm(AnnuaireType::class,$data);
        if ($form->handleRequest($request) && $form->isValid()) {
            $data = $form->getData();
            $query = $apprenantRepository->getSearchResult($data);
            $user = $this->getUser();
            $entity = $searchPerDayRepository->findOneBy(['date' => new \DateTime('today'), 'user' => $user]);
            if(!$entity) {
                $entity = new SearchPerDay();
                $entity->setUser($user);
            }
            $entity->addCount();
            $em->persist($entity);
            $em->flush();

        }

        $paginator  = $this->get('knp_paginator');
        $apprenants = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            25/*limit per page*/
        );
        return [ 'form' => $form->createView(), 'apprenants' => $apprenants ];
    }

    /**
     * @Route("/organismes-formations", name="organismes_formations")
     * @Template("AppBundle::organismes.html.twig")
     */
    public function organismesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $userRepository = $em->getRepository('UserBundle:User');
        $query = $userRepository->findByRole('ROLE_OF',false)->getQuery();
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            25/*limit per page*/
        );
        return [ 'users' => $users ];
    }

    /**
     * @Route("/entreprises-btp", name="entreprises_btp")
     * @Template("AppBundle::entreprises_btp.html.twig")
     */
    public function entreprisesBtpAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var \UserBundle\Repository\UserRepository $userRepository */
        $userRepository = $em->getRepository('UserBundle:User');
        $query = $userRepository->findByRole('ROLE_VIEWER',false)->getQuery();
        $paginator  = $this->get('knp_paginator');
        $users = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            25/*limit per page*/
        );
        return [ 'users' => $users ];
    }
}
