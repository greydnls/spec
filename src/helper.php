<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Boolean\Both;
use Kayladnls\Spec\Boolean\Either;

/**
 * @param Specification $first
 * @param Specification $second
 * @return Both
 */
function both(Specification $first, Specification $second)
{
    return Builder::both($first, $second);
}

/**
 * @param Specification $first
 * @param Specification $second
 * @return Either
 */
function either(Specification $first, Specification $second)
{
    return Builder::either($first, $second);
}

/**
 * @param $subject
 * @param Specification $specification
 * @return mixed
 */
function satisfies($subject, Specification $specification)
{
    return $specification->isSatisfiedBy($subject);
}