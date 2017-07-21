<?php

namespace AppBundle\Services;

use AppBundle\Entity\Question;
use AppBundle\Repository\QCMsQuestionsRepository;
use AppBundle\Repository\QCMsRepository;
use Symfony\Component\Config\Definition\Exception\Exception;

class QCM
{
    private $qcmRepository;
    private $questionRepository;

    public function __construct(QCMsRepository $qcmRepository, QCMsQuestionsRepository $questionRepository)
    {
        $this->qcmRepository             = $qcmRepository;
        $this->questionRepository        = $questionRepository;
    }

    /**
     * @param array $data
     * @return float
     * @throws Exception
     */
    public function calculateQCMResult($data) {
        $result = 0;
        foreach ($data as $name => $answer) {
            $trueValue = null;
            $id = str_replace('question_','',$name);
            /** @var Question $question */
            $question = $this->questionRepository->find($id);
            if($question->getType() == 'multiple') {
                foreach ($question->getResponses() as $response) {
                    if($response->getIsTrue()) {
                        $trueValue[] = $response->getId();
                    }
                }
                $resValue = 1/count($trueValue);
                foreach ($answer as $res) {
                    if(in_array($res,$trueValue)) {
                        $result += $resValue;
                    } else {
                        $result -= $resValue;
                    }
                }
            } else {
                foreach ($question->getResponses() as $response) {
                    if($response->getIsTrue()) {
                        $trueValue = $response->getId();
                        break;
                    }
                }
                if($trueValue == $answer) { $result++; }
            }
        }
        return $result < 0 ? 0 : $result;
    }

}