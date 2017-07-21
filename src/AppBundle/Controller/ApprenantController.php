<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Attestation;
use AppBundle\Form\Type\UserETTType;
use AppBundle\Form\Type\UserOFType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;
use UserBundle\Form\ApprenantType;
use FOS\UserBundle\Model\UserManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Apprenant;
use UserBundle\Entity\User;

/**
 * Class ApprenantController
 * @package AppBundle\Controller
 * @Route("/apprenants")
 */
class ApprenantController extends Controller
{
    /**
     * @Route("/", name="of_list_apprenants")
     * @Template("AppBundle:Apparenants:list.html.twig")
     */
    public function listAction(Request $request)
    {
        $of = $this->getUser();
        $apprenants = $this->getDoctrine()->getRepository('UserBundle:Apprenant')->findBy(['of' => $of]);
        return ['apprenants' => $apprenants];
    }

    /**
     * @Route("/ajouter", name="of_add_apprenant")
     * @Template("AppBundle:Apparenants:add.html.twig")
     */
    public function ajouterApprenantAction(Request $request)
    {
        $of = $this->getUser();
        $apprenantExist = null;
        $apprenant = new Apprenant();
        $apprenant->setOf($of);
        $form = $this->createForm(ApprenantType::class,$apprenant);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $apprenantRepository = $em->getRepository('UserBundle:Apprenant');
            $apprenantExist = $apprenantRepository->findOneBy([
               'nom'      => $apprenant->getNom(),
               'prenom'   => $apprenant->getPrenom(),
               'birthday' => $apprenant->getBirthday()
            ]);

            if(!$apprenantExist) {
                $code = $this->get('app.apprenant.code')->generateUnexistantCode(['length' => 16]);
                $apprenant->setCode($code);
                $em->persist($apprenant);
                $em->flush();

                $session = $request->getSession();
                $session->getFlashBag()
                    ->add(
                        'success',
                        'L\'apprenant '.$apprenant->getPrenom().' '.$apprenant->getNom().' a été ajouter !'
                    );

                return $this->redirectToRoute('of_list_apprenants');
            }
        }
        return [
            'form'           => $form->createView(),
            'apprenantExist' => $apprenantExist
        ];
    }

    /**
     * @Route("/editer/{code}", name="of_edit_apprenant")
     * @Template("AppBundle:Apparenants:edit.html.twig")
     */
    public function editerApprenantAction(Request $request, Apprenant $apprenant)
    {
        if($apprenant->getAttestation()) return $this->redirectToRoute('of_edit_manuelle_apprenant',['code' => $apprenant->getCode() ]);
        $apprenantExist = null;
        $form = $this->createForm(ApprenantType::class,$apprenant);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $apprenantRepository = $em->getRepository('UserBundle:Apprenant');
            $apprenantExist = $apprenantRepository->findOneBy([
               'nom'      => $apprenant->getNom(),
               'prenom'   => $apprenant->getPrenom(),
               'birthday' => $apprenant->getBirthday()
            ]);

            if($apprenantExist && $apprenantExist == $apprenant) {
                $em->persist($apprenant);
                $em->flush();

                $session = $request->getSession();
                $session->getFlashBag()
                    ->add(
                        'success',
                        'Les informations de l\'apprenant '.$apprenant->getPrenom().' '.$apprenant->getNom().' ont été mis a jour !'
                    );

                return $this->redirectToRoute('of_list_apprenants');
            }
        }
        return [
            'form'           => $form->createView(),
            'edit'           => true,
            'apprenantExist' => $apprenantExist
        ];
    }

    /**
     * @Route("/ajouter-manuellement", name="of_add_manuelle_apprenant")
     */
    public function ajouterApprenantManuellementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $of = $this->getUser();
        $apprenantExist = null;
        $apprenant = new Apprenant();
        $apprenant->setOf($of);
        $code = $this->get('app.apprenant.code')->generateUnexistantCode(['length' => 16]);
        $apprenant->setCode($code);
        $attestation = new Attestation();
        $apprenant->setAttestation($attestation);
        $em->persist($apprenant);
        $em->flush();

        return $this->redirectToRoute('of_edit_manuelle_apprenant',['code' => $code]);
    }

    /**
     * @Route("/editer-manuellement/{code}", name="of_edit_manuelle_apprenant")
     * @Template("AppBundle:Apparenants:add.html.twig")
     */
    public function editerApprenantManuellementAction(Request $request, Apprenant $apprenant)
    {
        if(!$this->isGranted('ROLE_OF'))
            return $this->redirectToRoute('homepage');

        $session = $request->getSession();
        $apprenantExist = null;
        $isAlreadyExist = false;

        $form = $this->createForm(ApprenantType::class,$apprenant,['add_result' => true]);
        if ($form->handleRequest($request) && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $apprenantRepository = $em->getRepository('UserBundle:Apprenant');
            $apprenantExist = $apprenantRepository->findOneBy([
                'nom'      => $apprenant->getNom(),
                'prenom'   => $apprenant->getPrenom(),
                'birthday' => $apprenant->getBirthday()
            ]);

            if($form->isSubmitted() && $form->has('generateAttestation') && $form->get('generateAttestation')->isClicked()) {
                $attestation = $apprenant->getAttestation();
                if(!$apprenant->getAttestation()) $attestation = new Attestation();

                $succecced = $request->request->get('apprenant')['succceced'];
                $date = $request->request->get('apprenant')['date'];
                $date = \DateTime::createFromFormat('d/m/Y',$date);
                $attestation->setSuccessed($succecced);
                $attestation->setDate($date);
                if(!$apprenant->getAttestation()) $apprenant->setAttestation($attestation);

                $em->persist($apprenant);
                $em->flush();

                return $this->redirectToRoute('attestation_view', ['code' => $apprenant->getCode()]);
            }
             elseif(!$apprenantExist ||($apprenantExist && $apprenantExist == $apprenant)) {

                $attestation = $apprenant->getAttestation();
                $succecced = $request->request->get('apprenant')['succceced'];
                $date = $request->request->get('apprenant')['date'];
                $date = \DateTime::createFromFormat('d/m/Y',$date);
                $attestation->setSuccessed($succecced);
                $attestation->setDate($date);

                $em->persist($apprenant);
                $em->flush();

                $session->getFlashBag()
                    ->add(
                        'success',
                        'Les informations de l\'apprenant '.$apprenant->getPrenom().' '.$apprenant->getNom().' ont été modifier !'
                    );
                return $this->redirectToRoute('of_list_apprenants');
            }  else {
                if($form->isSubmitted() & $form->get('affectResult')->isClicked()){

                    $attestation = $apprenantExist->getAttestation();
                    if(!$apprenantExist->getAttestation()) $attestation = new Attestation();

                    $succecced = $request->request->get('apprenant')['succceced'];
                    $date = $request->request->get('apprenant')['date'];
                    $attestation->setSuccessed($succecced);
                    $attestation->setDate($date);
                    $apprenantExist->setAttestation($attestation);

                    $em->persist($apprenantExist);
                    $em->flush();

                    $session->getFlashBag()->add('success','la résultat a été affecter !');
                    return $this->redirectToRoute('of_list_apprenants');
                }
            }
        }
        return [
            'form'           => $form->createView(),
            'apprenantExist' => $apprenantExist,
            'apprenant'      => $apprenant,
            'isAlreadyExist' => $isAlreadyExist
        ];
    }

    /**
     * @Route("/delete/{code}", name="of_delete_apprenant")
     */
    public function deleteApprenantAction(Request $request,Apprenant $apprenant)
    {
        $user = $this->getUser();
        $session = $request->getSession();

        if(!$this->isGranted('ROLE_ADMIN'))
        if($user != $apprenant->getOf()) {
            $session->getFlashBag()->add( 'error', 'Vous n\'êtes pas autorisez a supprimer cette apprenant !' );
            return $this->redirectToRoute('of_list_apprenants');
        }

        $session->getFlashBag()->add( 'success', 'L\'apprenant ' . $apprenant->getNom() . ' '.$apprenant->getPrenom().' a bien été supprimé !' );
        $em = $this->getDoctrine()->getManager();
        $em->remove($apprenant);
        $em->flush();
        // Message de validation
        if($this->isGranted('ROLE_ADMIN'))
            return $this->redirectToRoute('admin_list_apprenants');
        return $this->redirectToRoute('of_list_apprenants');
    }
}
