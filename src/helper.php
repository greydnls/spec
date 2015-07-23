<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Logical\Any;
use Kayladnls\Spec\Logical\All;

/**
 * @param array $specifications
 * @return All
 */
function all(array $specifications = [])
{
    return Builder::all($specifications);
}

/**
 * @param array $specifications
 * @return Any
 */
function any(array $specifications = [])
{
    return Builder::any($specifications);
}

/**
 * @param array $specifications
 * @return Any
 */
function none(array $specifications = [])
{
    return Builder::none($specifications);
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
