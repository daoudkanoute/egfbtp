<?php
namespace AppBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

class OnlyUniqueGoodReponse extends Constraint
{
    public $message = 'Une seule réponse est permis.';
}