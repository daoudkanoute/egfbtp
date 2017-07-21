<?php

namespace AppBundle\EventListener;

use AppBundle\Entity\Attestation;
use AppBundle\Entity\QCM;
use AppBundle\Entity\Question;
use AppBundle\Entity\Image;
use AppBundle\Entity\Response;
use AppBundle\Entity\Sound;
use Doctrine\Common\Persistence\ObjectManager;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Apprenant;

class UploadListener
{
    /**
     * @var ObjectManager
     */
    private $om;
    private $file;

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function onUpload(PostPersistEvent $event)
    {
        $request = $event->getRequest();
        $uploadType = $request->get('type');
        $this->file = $event->getFile();
        if($uploadType == 'qcm') {
            $this->handleQCMUpload($event);
        } elseif($uploadType == 'attestations') {
            $this->handleAttestationUpload($event);
        } else {
            $this->raiseExceptionAndRemoveFile('Problème d\'enregistrement.');
        }
    }


    private function handleQCMUpload(&$event){

        /** @var Request $request */
        $request  = $event->getRequest();
        $response = $event->getResponse();
        /** @var File $file */
        $file     = $event->getFile();
        $target = $request->get('target',null);
        $qcmRepository = $this->om->getRepository('AppBundle:QCM');
        /** @var QCM $QCM */
        $QCM = $qcmRepository->getQCM();

        if($target == 'image') {

            $fileName = array_values($request->files->get('qcm')['questions'])[0]['image']['file']->getClientOriginalName();
            $position   = $request->get('position',0);
            /** @var Question $question */
            $question = $QCM->getQuestions()[$position];
            if(is_null($question)) {
                $question = new Question();
                $question->setQcm($QCM);
            }

            if(!$question->getImage()) {
                $image = new Image();
                $image->setAlt($fileName);
                $image->setOriginalName($fileName);
                $image->setPath('images/'.$file->getFilename());
                $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $image->setFile($uploaded);
                $question->setImage($image);
                $this->om->persist($question);
                $this->om->flush();
            } else {
                $image = $question->getImage();
                $image->setAlt($fileName);
                $image->setOriginalName($fileName);
                $image->setPath('images/'.$file->getFilename());
                $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $image->setFile($uploaded);
                $this->om->persist($image);
                $this->om->flush();
            }

            $response['id']           = $image->getId();
            $response['originalName'] = $fileName;


        } elseif($target == 'sound') {

            $fileName = array_values($request->files->get('qcm')['questions'])[0]['sound']['file']->getClientOriginalName();
            $position   = $request->get('position',0);
            /** @var Question $question */
            $question = $QCM->getQuestions()[$position];
            if(is_null($question)) {
                $question = new Question();
                $question->setQcm($QCM);
            }

            if(!$question->getSound()) {
                $sound = new Sound();
                $sound->setOriginalName($fileName);
                $sound->setPath('sounds/'.$file->getFilename());
                $uploaded  = new UploadedFile('sounds/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $sound->setFile($uploaded);
                $question->setSound($sound);
                $this->om->persist($question);
                $this->om->flush();
            } else {
                $sound = $question->getSound();
                $sound->setOriginalName($fileName);
                $sound->setPath('sounds/'.$file->getFilename());
                $uploaded  = new UploadedFile('sounds/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $sound->setFile($uploaded);
                $this->om->persist($sound);
                $this->om->flush();
            }

            $response['id']           = $sound->getId();
            $response['originalName'] = $fileName;

        } elseif($target == 'response') {

            $questionID = $request->get('question',null);
            $responseID = $request->get('response',null);
            $isNewQuestion = false;
            $isNewResponse = false;

            $fileName = array_values(array_values($request->files->get('qcm')['questions'])[0]['responses'])[0]['image']['file']->getClientOriginalName();
            if(!is_null($questionID) && !is_null($responseID)) {

                /** @var Question $question */
                if(!isset($QCM->getQuestions()[$questionID])) {
                    $question      = new Question();
                    $isNewQuestion = true;
                } else {
                    $question      = $QCM->getQuestions()[$questionID];
                }

                /** @var Response $response */
                if(!isset($question->getResponses()[$responseID])) {
                    $reponse        = new Response();
                    $isNewResponse  = true;
                } else {
                    $reponse = $question->getResponses()[$responseID];
                }


                if(!$reponse->getImage()) {
                    $image = new Image();
                    $image->setAlt($fileName);
                    $image->setOriginalName($fileName);
                    $image->setPath('images/'.$file->getFilename());
                    $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                    $image->setFile($uploaded);
                } else {
                    $image = $reponse->getImage();
                    $image->setAlt($fileName);
                    $image->setOriginalName($fileName);
                    $image->setPath('images/'.$file->getFilename());
                    $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                    $image->setFile($uploaded);
                }

                $reponse->setImage($image);
                if($isNewResponse) {
                    if($isNewQuestion) {
                        $question->addResponse($reponse);
                        $this->om->persist($question);
                        $this->om->flush();
                    } else {
                        $this->om->persist($reponse);
                        $this->om->flush();
                    }
                } else {
                    $this->om->persist($image);
                    $this->om->flush();
                }


                $response['id']           = $image->getId();
                $response['originalName'] = $fileName;
            }
        }
    }


    private function handleAttestationUpload(&$event){

        /** @var Request $request */
        $request  = $event->getRequest();
        $response = $event->getResponse();
        /** @var File $file */
        $file     = $event->getFile();
        $target = $request->get('target',null);
        $id = $request->get('id',null);
        $apprenantRepository = $this->om->getRepository('UserBundle:Apprenant');
        /** @var Apprenant $apprenant */
        $apprenant = $apprenantRepository->find($id);

        if($target == 'of') {
            $fileName = $request->files->get('apprenant')['imageOF']['file']->getClientOriginalName();
            if(!$apprenant->getAttestation()) $apprenant->setAttestation(new Attestation());
            if(!$apprenant->getAttestation()->getImageOF()) {
                $image = new Image();
                $image->setAlt($fileName);
                $image->setOriginalName($fileName);
                $image->setPath('images/'.$file->getFilename());
                $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $image->setFile($uploaded);
                $apprenant->getAttestation()->setImageOF($image);
                $this->om->persist($apprenant);
                $this->om->flush();
            } else {
                $image = $apprenant->getAttestation()->getImageOF();
                $image->setAlt($fileName);
                $image->setOriginalName($fileName);
                $image->setPath('images/'.$file->getFilename());
                $uploaded  = new UploadedFile('images/'.$file->getBaseName(), $fileName,$file->getMimeType(),null,null,true);
                $image->setFile($uploaded);
                $this->om->persist($image);
                $this->om->flush();
            }

            $response['id']           = $image->getId();
            $response['originalName'] = $fileName;
        }
    }

    private function raiseExceptionAndRemoveFile($msg){

        $fs = new Filesystem();
        try {
            $fs->remove($this->file->getPathname());
            throw new UploadException($msg);

        } catch (IOExceptionInterface $e) {
            throw new UploadException($e->getMessage());
        }

    }
}