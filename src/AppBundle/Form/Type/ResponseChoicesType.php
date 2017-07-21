<?php

// src/AppBundle/Form/Type/GenderType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ResponseChoicesType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices_images' => []
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}