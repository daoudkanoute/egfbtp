<?php

namespace AppBundle\Form\Validator\Constraints;

use AppBundle\CheckoutBundle\Repository\DiscountRepository;
use AppBundle\Repository\GroupRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Exception\MissingOptionsException;

class OnlyUniqueGoodReponseValidator extends ConstraintValidator
{
    public function validate($responses, Constraint $constraint)
    {
        $count = 0;
        foreach ($responses as $response) {
            if($response->getIsTrue()) {
                $count++;
            }
        }

        if($count > 1)
            $this->context->buildViolation($constraint->message)->addViolation();
    }
}