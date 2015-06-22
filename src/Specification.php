<?php namespace Kayladnls\Spec;

interface Specification
{

    /**
     * @param $argument
     * @return boolean
     */
    public function isSatisfiedBy($argument);
}