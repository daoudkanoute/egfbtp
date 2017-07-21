<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\UserETTType;
use AppBundle\Form\Type\UserOFType;
use FOS\UserBundle\Model\UserManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/admin/utilisateurs/apprenants", name="admin_list_apprenants")
     * @Template("AppBundle:Admin:Users/list_apprenants.html.twig")
     */
    public function usersApprenantsAction(Request $request)
    {
        $apprenants = $this->getDoctrine()->getRepository('UserBundle:Apprenant')->findAll();
        return ['apprenants' => $apprenants];
    }

    /**
     * @Route("/admin/utilisateurs/ETT", name="admin_users_ett")
     * @Template("AppBundle:Admin:Users/list_ett.html.twig")
     */
    public function usersETTAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository('UserBundle:User')->findByRole('ROLE_VIEWER');
        return ['users' => $users];
    }

    /**
     * @Route("/admin/utilisateurs/OF", name="admin_users_of")
     * @Template("AppBundle:Admin:Users/list_of.html.twig")
     */
    public function usersOFAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository('UserBundle:User')->findByRole('ROLE_OF');
        return ['users' => $users];
    }

    /**
     * @Route("/admin/utilisateurs/BTP", name="admin_users_btp")
     * @Template("AppBundle:Admin:Users/list_btp.html.twig")
     */
    public function usersBTPAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository('UserBundle:User')->findByRole('ROLE_BTP');
        return ['users' => $users];
    }

    /**
     * @Route("/admin/utilisateur/ETT/ajouter", name="admin_users_ett_add")
     * @Template("AppBundle:Admin:Users/add_ett.html.twig")
     */
    public function ajouterETTAction(Request $request)
    {
        $user = new User();
        $user->addRole('ROLE_VIEWER');
        $form = $this->createForm(UserETTType::class,$user);
        if ($form->handleRequest($request) && $form->isValid()) {
            $user->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été ajouter !'
                );

            return $this->redirectToRoute('admin_users_ett');

        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/admin/utilisateur/ETT/editer/{id}", name="admin_users_ett_edit")
     * @Template("AppBundle:Admin:Users/edit_ett.html.twig")
     */
    public function editerETTAction(Request $request, User $user)
    {
        $form = $this->createForm(UserETTType::class,$user,['edit' => true]);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été modifier !'
                );
            return $this->redirectToRoute('admin_users_ett');
        }
        return ['form' => $form->createView(), 'edit' => true];
    }

    /**
     * @Route("/admin/utilisateur/OF/ajouter", name="admin_users_of_add")
     * @Template("AppBundle:Admin:Users/add_of.html.twig")
     */
    public function ajouterOFAction(Request $request)
    {
        $user = new User();
        $user->addRole('ROLE_OF');
        $form = $this->createForm(UserOFType::class,$user);
        if ($form->handleRequest($request) && $form->isValid()) {
            $user->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été ajouter !'
                );

            return $this->redirectToRoute('admin_users_of');
        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/admin/utilisateur/OF/editer/{id}", name="admin_users_of_edit")
     * @Template("AppBundle:Admin:Users/edit_of.html.twig")
     */
    public function editerOFAction(Request $request,User $user)
    {
        $form = $this->createForm(UserOFType::class,$user,['edit' => true]);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été modifier !'
                );

            return $this->redirectToRoute('admin_users_of');
        }
        return ['form' => $form->createView(), 'edit' => true];
    }


    /**
     * @Route("/admin/utilisateur/BTP/ajouter", name="admin_users_btp_add")
     * @Template("AppBundle:Admin:Users/add_btp.html.twig")
     */
    public function ajouterBTPAction(Request $request)
    {
        $user = new User();
        $user->addRole('ROLE_BTP');
        $form = $this->createForm(UserOFType::class,$user);
        if ($form->handleRequest($request) && $form->isValid()) {
            $user->setEnabled(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été ajouter !'
                );

            return $this->redirectToRoute('admin_users_btp');
        }
        return ['form' => $form->createView()];
    }

    /**
     * @Route("/admin/utilisateur/BTP/editer/{id}", name="admin_users_btp_edit")
     * @Template("AppBundle:Admin:Users/edit_btp.html.twig")
     */
    public function editerBTPAction(Request $request,User $user)
    {
        $form = $this->createForm(UserOFType::class,$user,['edit' => true]);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    $user->getSociete() .' a été modifier !'
                );

            return $this->redirectToRoute('admin_users_btp');
        }
        return ['form' => $form->createView(), 'edit' => true];
    }

    /**
     * @Route("/admin/utilisateur/{id}/activation", name="admin_users_activate")
     */
    public function userActivationAction(Request $request, User $user)
    {
        $user->setEnabled(true);
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $userManager->updateUser($user);

        $session = $request->getSession();
        $session->getFlashBag()
            ->add(
                'success',
                'L\'utilisateur ' . $user->getSociete() .' a été validé !'
            );

        return $this->redirectToRoute($user->hasRole('ROLE_OF') ? 'admin_users_of' : 'admin_users_ett');
    }

    /**
     * @Route("/admin/utilisateur/{id}/desactivation", name="admin_users_deactivate")
     */
    public function userDesactivationAction(Request $request, User $user)
    {
        $user->setEnabled(false);
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $userManager->updateUser($user);

        $session = $request->getSession();
        $session->getFlashBag()
            ->add(
                'success',
                'L\'utilisateur ' . $user->getSociete() .' a été désactivé !'
            );

        return $this->redirectToRoute($user->hasRole('ROLE_OF') ? 'admin_users_of' : 'admin_users_ett');
    }

    /**
     * @Route("/admin/utilisateur/{id}/delete", name="admin_users_delete")
     */
    public function deleteUserAction(Request $request,User $user)
    {
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $userManager->deleteUser($user);

        // Message de validation
        $session = $request->getSession();
        $session->getFlashBag()
            ->add(
                'success',
                'L\'utilisateur ' . $user->getSociete() . ' a bien été supprimé !'
            );
        return $this->redirectToRoute($user->hasRole('ROLE_OF') ? 'admin_users_of' : 'admin_users_ett');
    }
}
