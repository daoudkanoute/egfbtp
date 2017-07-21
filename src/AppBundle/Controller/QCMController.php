<?php

namespace AppBundle\Controller;

use AppBundle\Entity\QCM;
use AppBundle\Entity\Question;
use AppBundle\Entity\Response;
use AppBundle\Form\Type\QCMExamType;
use AppBundle\Form\Type\QCMType;
use AppBundle\Repository\ImageRepository;
use AppBundle\Repository\QCMsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class QCMController
 * @package AppBundle\Controller
 */
class QCMController extends Controller
{
    /**
     * @Route("/admin/QCM", name="qcm_edit")
     * @Template("AppBundle:Admin:QCM/edit.html.twig")
     */
    public function editerQCMAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var QCMsRepository $qcmRepository */
        $qcmRepository = $em->getRepository('AppBundle:QCM');
        $QCM = $qcmRepository->getQCM();
        if(!$QCM) {
            $QCM = new QCM();
            $QCM->setTitle('QCM Principale');
            $em->persist($QCM);
            $em->flush();
        }
        $form = $this->createForm(QCMType::class,$QCM);
        if ($form->handleRequest($request) && $form->isValid()) {

            $questions = $QCM->getQuestions();
            /** @var Question $question */
            foreach ($questions as $question) {
                $question->setQcm($QCM);
                $responses = $question->getResponses();
                /** @var Response $response */
                foreach ($responses as $response) {
                    $response->setQuestion($question);
                }
            }

            $em->persist($QCM);
            $em->flush();

            $session = $request->getSession();
            $session->getFlashBag()
                ->add(
                    'success',
                    'Le QCM a bien été modifier!'
                );

        }
        return [
            'form' => $form->createView(),
            'QCM'  => $QCM
        ];
    }
    /**
     * @Route("/delete/{type}/{question_id}/{response_id}", name="delete_element")
     */
    public function deleteElementAction(Request $request, $type, $question_id, $response_id)
    {
        $em = $this->getDoctrine()->getManager();
        $qcmRepository = $em->getRepository('AppBundle:QCM');
        /** @var QCM $QCM */
        $QCM = $qcmRepository->getQCM();

        if($type == 'image') {
            if($response_id == '-1') {
                /** @var Question $question */
                $question = $QCM->getQuestions()[$question_id];
                $question->setImage(null);
                $em->persist($question);
                $em->flush();
                return new JsonResponse(['status' => true]);
            } else {
                /** @var Question $question */
                $question = $QCM->getQuestions()[$question_id];
                /** @var Response $response */
                $response = $question->getResponses()[$response_id];
                $response->setImage(null);
                $em->persist($response);
                $em->flush();
            }
        } elseif($type == 'sound') {
            /** @var Question $question */
            $question = $QCM->getQuestions()[$question_id];
            $question->setSound(null);
            $em->persist($question);
            $em->flush();
            return new JsonResponse(['status' => true]);
        }
        return new JsonResponse(['status' => false]);
    }
}
