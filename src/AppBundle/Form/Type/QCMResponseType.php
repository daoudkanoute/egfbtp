<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Question;
use AppBundle\Entity\Response;
use AppBundle\FileBundle\Form\VideoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class QCMResponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('response', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control new-response',
                    'placeholder' => 'Réponse',
                ],
                'constraints' => new NotBlank([ 'message' => 'Ce champ est obligatoire.' ])
            ])
            ->add('image', ImageType::class, [
                'label'    => false,
                'required' => false
            ])
            ->add('isTrue', CheckboxType::class, [
                'label'    => false,
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Response::class,
           'multiple'   => false
        ]);
    }

    public function getBlockPrefix(){
        return 'response';
    }
}