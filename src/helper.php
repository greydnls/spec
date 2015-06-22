<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Boolean\Both;
use Kayladnls\Spec\Boolean\Either;

/**
 * @param Spec $first
 * @param Spec $second
 * @return Both
 */
function both(Spec $first, Spec $second)
{
    return new Both($first, $second);
}

/**
 * @param Spec $first
 * @param Spec $second
 * @return Either
 */
function either(Spec $first, Spec $second)
{
    return new Either($first, $second);
}

/**
 * @param $subject
 * @param Spec $specification
 * @return mixed
 */
function satisfies($subject, Spec $specification)
{
    return $specification->isSatisfiedBy($subject);
}