<?php

namespace UserBundle\Form;

use AppBundle\Entity\Attestation;
use AppBundle\Form\Type\ImageType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use UserBundle\Entity\Apprenant;
use UserBundle\Entity\User;

class ApprenantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var Attestation $attestation */
        $attestation = $builder->getData()->getAttestation();
        $builder
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('birthday', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
            ])
            ->add('ett', EntityType::class, [
                'class' => User::class,
                'label' => 'Agences intérimaires',
                'choice_label'  => 'societe',
                'query_builder' => function (EntityRepository $qb) {
                    return $qb->findByRole('ROLE_VIEWER',false);
                },
                'multiple' => false,
                'expanded' => false,
                'empty_data' => null
            ]);
        if($options['add_result']) {
            $builder->add('succceced', ChoiceType::class, [
                'choices'        =>  [ 'Réussite' => true, 'Echec'  => false ],
                'expanded'       => false,
                'mapped'         => false,
                'required'       => true,
                'data'           => $attestation ? $attestation->getSuccessed() : null
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'data'           => $attestation ? $attestation->getDate() : null,
                'mapped' => false
            ])
            ->add('imageOF', ImageType::class, [
                'label'    => 'Attestation Signé',
                'required' => false,
                'mapped'   => false
            ])
            ->add('affectResult', SubmitType::class,[
                'label' => 'ici'
            ]);
            if($attestation && !$attestation->getImageOF()) {
                $builder
                    ->add('generateAttestation', SubmitType::class,[
                        'label' => 'Générer l\'attestation',
                        'attr' => [
                            'class' => 'btn btn-secondary'
                        ]
                    ]);
            }
        } else {

            $builder->add('onPaper', CheckboxType::class, [
                'label' => 'Passer l\'examen sur papier',
                'required' => false
            ]);
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Apprenant::class,
            'add_result' => false,
        ));
    }

}
