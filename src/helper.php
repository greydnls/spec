<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Logical\Any;
use Kayladnls\Spec\Logical\All;

/**
 * @param Specification $first
 * @param Specification $second
 * @return All
 */
function both(Specification $first, Specification $second)
{
    return Builder::both($first, $second);
}

/**
 * @param Specification $first
 * @param Specification $second
 * @return Any
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