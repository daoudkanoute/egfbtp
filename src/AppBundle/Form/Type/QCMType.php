<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\QCM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QCMType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('successMinimum', TextType::class, [
                'attr' => [
                    'class' => 'spinner-input form-control'
                ]
            ])
            ->add('questions', CollectionType::class, [
                'entry_type'        => QCMQuestionType::class,
                'allow_add'         => true,
                'allow_delete'      => true,
                'label'             => false,
                'delete_empty'      => true,
                'prototype_name'    => '__question_num__',
                'attr' => [
                    'class' => "new-question"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => QCM::class
        ]);
    }

    public function getBlockPrefix(){
        return 'qcm';
    }

}