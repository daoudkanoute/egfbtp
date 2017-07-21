<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use UserBundle\Entity\User;

class UserETTType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('societe',  TextType::class, [
                'label' => 'Nom de la société',
                'constraints' => [ new NotBlank(['message' => 'Ce champs est obligatoire.'])]
            ])
            ->add('email', EmailType::class,[
                'label' => 'E-mail',
                'constraints' => [
                    new NotBlank(['message' => 'Ce champs est obligatoire.']),
                    new Email(['message' => 'L\'adresse email est invalide.'])
                ]
            ])
            ->add('siret',  TextType::class, [
                'label' => 'N° SIRET',
                'required' => false
            ])
            ->add('adresse',  TextType::class, [
                'label' => 'Adresse',
                'required' => false
            ])
        ;
        if($options['edit']) {
            $builder->add('plainPassword', PasswordType::class, [
                'label'     => 'Mot de passe',
                'required'  => false
            ]);
        } else {
            $builder->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe',
                'constraints' => [ new NotBlank(['message' => 'Ce champs est obligatoire.'])]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => User::class,
           'edit'       => false,
        ]);
    }

}