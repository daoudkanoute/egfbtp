<?php
namespace AppBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MissingOptionsException;

class OnlyUniqueReponse extends Constraint
{
    public $message = 'Vous devez avoir plus qu\'une réponse par question.';
}