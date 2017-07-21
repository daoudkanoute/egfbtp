<?php
namespace AppBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

class NeedReponse extends Constraint
{
    public $message = 'Veuillez selectionner la bonne réponse.';
}