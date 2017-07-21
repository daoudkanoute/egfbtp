<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Question;
use AppBundle\Form\Type\ImageType;
use AppBundle\Form\Type\SoundType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Form\Validator\Constraints as CustomAssert;

class QCMQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class,
                [
                    'label' => 'ads.ad.country',
                    'required' => true,
                    'choices'  => [
                        'Multiple' => 'multiple',
                        'Unique'   => 'unique'
                    ],
                    'attr' => [ 'class' => 'select2' ]
                ]
            )
            ->add('question', TextType::class, [
                'attr' => [
                    'class' => 'form-control new-question',
                    'placeholder' => 'Question',
                ],
                'constraints' => new Assert\NotBlank([ 'message' => 'La question est obligatoire.' ])
            ])
            ->add('image', ImageType::class, [
                'label'    => 'Image',
                'required' => false
            ])
            ->add('sound', SoundType::class, [
                'label'    => 'Sound',
                'required' => false
            ]);


        $formModifier = function (FormInterface $form, $type = 'unique') {
            $form->add('responses', CollectionType::class, [
                'entry_type'        => QCMResponseType::class,
                'allow_add'         => true,
                'allow_delete'      => true,
                'label'             => false,
                'delete_empty'      => true,
                'prototype_name'    => '__reponse_num__',
                'attr' => [
                    'class' => "new-response"
                ],
                'entry_options' => [
                    'multiple' => $type == 'unique' ? true : false
                ],
                'error_bubbling' => false,
                'constraints' => [
                    new CustomAssert\NeedReponse([ 'groups' => ['Default']]),
                    new CustomAssert\OnlyUniqueReponse([ 'groups' => ['Default']]),
                    new CustomAssert\OnlyUniqueGoodReponse([ 'groups' => ['OnlyOneResponse']])
                ]
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $question = $event->getData();
                $formModifier($event->getForm(), $question ? $question->getType() : 'unique');
            }
        );

        $builder->get('type')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $type = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $type);
            }
        );


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Question::class,
           'validation_groups' => function(FormInterface $form) {
               $data = $form->getData();
               $groups = ['Default'];
               if($data->getType() == "unique") {
                   $groups[] = 'OnlyOneResponse';
               }
               return $groups;
           }
        ]);
    }

    public function getBlockPrefix(){
        return 'question';
    }
}