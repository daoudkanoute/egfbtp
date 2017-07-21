<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Attestation;
use AppBundle\Form\Type\QCMExamType;
use AppBundle\Form\Type\UserETTType;
use AppBundle\Form\Type\UserOFType;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Form\ApprenantType;
use FOS\UserBundle\Model\UserManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Apprenant;
use UserBundle\Entity\User;
use AppBundle\Services\QCM;

/**
 * Class ApprenantController
 * @package AppBundle\Controller
 * @Route("/attestation")
 */
class AttestationController extends Controller
{
    /**
     * @Route("/start/{code}", name="attestation_start")
     * @Template("AppBundle:Attestation:qcm.html.twig")
     */
    public function startAttestationAction(Request $request,Apprenant $apprenant)
    {

        $user    = $this->getUser();
        $session = $request->getSession();
        $em      = $this->getDoctrine()->getManager();

        if(!$this->isGranted('ROLE_OF')) {
            $session->getFlashBag()->add( 'error', 'Vous n\'êtes pas autorisez a démarrer des attestations !' );
            return $this->redirectToRoute('homepage');
        }
        if($apprenant->getAttestation()) {
            $session->getFlashBag()->add( 'error', 'L\'apprenant a déjà passer l\'attestation le '.$apprenant->getAttestation()->getDate()->format('d/m/Y').' et a '.($apprenant->getAttestation()->getSuccessed() ? 'réussi' : 'échouer') );
            return $this->redirectToRoute('homepage');
        }

        $data    = [];
        $form    = $this->createForm(QCMExamType::class,$data);
        if ($form->handleRequest($request) && $form->isValid()) {
            $data = $form->getData();
            /** @var QCM $QcmService */
            $QcmService = $this->get('app.services.qcm');
            $note = $QcmService->calculateQCMResult($data);
            /** @var \AppBundle\Entity\QCM $QCM */
            $QCM  = $this->getDoctrine()->getRepository('AppBundle:QCM')->getQCM();
            $successed = $QCM->getSuccessMinimum() <= $note ? true : false;
            $attestation = new Attestation();
            $attestation->setNote($note);
            $attestation->setPercent(100*$note/count($QCM->getQuestions()));
            $attestation->setSuccessed($successed);
            $apprenant->setAttestation($attestation);
            if($user != $apprenant->getOf()) { $apprenant->setOf($user); }

            $em->persist($apprenant);
            $em->flush();
            return $this->render('AppBundle:Attestation:qcm_result.html.twig', ['apprenant' => $apprenant ]);
        }

        return [ 'form' => $form->createView(), 'apprenant' => $apprenant ];
    }


    /**
     * @Route("/print-qcm/{code}", name="print_qcm")
     * @Template("AppBundle:Attestation:qcm_print.html.twig")
     */
    public function printQCMAction(Request $request,Apprenant $apprenant)
    {

        $session = $request->getSession();

        if(!$this->isGranted('ROLE_OF')) {
            $session->getFlashBag()->add( 'error', 'Vous n\'êtes pas autorisez a démarrer des attestations !' );
            return $this->redirectToRoute('homepage');
        }
        if($apprenant->getAttestation()) {
            $session->getFlashBag()->add( 'error', 'L\'apprenant a déjà passer l\'attestation le '.$apprenant->getAttestation()->getDate()->format('d/m/Y').' et a '.($apprenant->getAttestation()->getSuccessed() ? 'réussi' : 'échouer') );
            return $this->redirectToRoute('homepage');
        }

        $data    = [];
        $form    = $this->createForm(QCMExamType::class,$data);
        return [ 'form' => $form->createView(), 'apprenant' => $apprenant ];
    }

    /**
     * @Route("/voir/{code}", name="attestation_view")
     */
    public function viewAttestationAction(Request $request,Apprenant $apprenant)
    {
        $print = $request->query->get('print');
        $html  = $this->renderView("AppBundle:Attestation:view.html.twig",['apprenant' => $apprenant, 'print' => $print]);
        if($print) { return new Response($html); }
        $filename = sprintf($apprenant->getCode().'%s.pdf', date('Y-m-d'));
        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }
}
