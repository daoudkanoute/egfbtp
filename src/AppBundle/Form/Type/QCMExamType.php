<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\QCM;
use AppBundle\Entity\Question;
use AppBundle\Entity\Response;
use AppBundle\Repository\QCMsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QCMExamType extends AbstractType
{
    private $qcmRepository;

    public function __construct(QCMsRepository $qcmRepository)
    {
        $this->qcmRepository        = $qcmRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $i = 1;
        /** @var QCM $QCM */
        $QCM = $this->qcmRepository->getQCM();
        /** @var Question $question */
        foreach ($QCM->getQuestions() as $question) {
            $choices     = [];
            $choicesAttr = [];
            $hasImages = false;
            /** @var Response $response */
            foreach ($question->getResponses() as $response) {
                $choices[$response->getResponse()]   = $response->getId();
                $choicesAttr[$response->getResponse()]   = [
                    'image' => $response->getImage() ? $response->getImage()->getFilename() : ''
                ];
                if($response->getImage()) {
                    $hasImages = true;
                }
            }

            $col_class = count($question->getResponses()) > 3 ? 'col-xs-3' : (count($question->getResponses()) == 2 ? 'col-xs-6' : 'col-xs-4');
            $builder
                ->add('question_'.$question->getId(), ChoiceType::class,
                [
                    'label' => $question->getQuestion(),
                    'choices'  => $choices,
                    'choice_attr'      => $choicesAttr,
                    'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                    'multiple' => $question->getType() == 'unique' ? false : true,
                    'attr'     => [
                        'class' => $question->getType() == 'unique' ? ($hasImages ? 'radio-custom '.$col_class.' has-image' : 'radio-custom' ) : ($hasImages ? 'checkbox-custom checkbox-default '.$col_class.' has-image': 'checkbox-custom checkbox-default' ),
                        'data-id'    => $i,
                        'data-image' => $question->getImage() ? $question->getImage()->getWebPath() : null,
                        'data-sound' => $question->getSound() ? $question->getSound()->getPath() : null,
                    ]
                ]
            );
            $i++;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => null
        ]);
    }

    public function getBlockPrefix(){
        return 'exam';
    }

}