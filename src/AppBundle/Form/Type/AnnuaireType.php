<?php

namespace AppBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Entity\User;

class AnnuaireType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setMethod('GET');
        $builder
            ->add('code',  TextType::class, [
                'label' => false,
                'required' => false,
                'attr'      => [
                    'placeholder' => 'Code apprenant',
                    'class'       => 'form-control'
                ]
            ])
            ->add('nom',  TextType::class, [
                'label' => false,
                'required' => false,
                'attr'      => [
                    'placeholder' => 'Nom',
                    'class'       => 'form-control'
                ]
            ])
            ->add('prenom',  TextType::class, [
                'label' => false,
                'required' => false,
                'attr'      => [
                    'placeholder' => 'Prénom',
                    'class'       => 'form-control'
                ]
            ])
            ->add('birthday', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'required' => false
            ])
            ->add('ett', EntityType::class, [
                'class' => User::class,
                'label' => false,
                'choice_label'  => 'societe',
                'query_builder' => function (EntityRepository $qb) {
                    return $qb->findByRole('ROLE_VIEWER',false);
                },
                'multiple' => true,
                'expanded' => false,
                'empty_data' => null,
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => null,
        ]);
    }

}