<?php namespace Kayladnls\Spec;


use Kayladnls\Spec\Boolean\Both;
use Kayladnls\Spec\Boolean\Either;
use Kayladnls\Spec\Boolean\Not;

interface Spec {

    /**
     * @param Spec $right
     * @return Both
     */
    public function also(Spec $right);

    /**
     * @param Spec $right
     * @return Either
     */
    public function either(Spec $right);

    /**
     * @param Spec $spec
     * @return Not
     */
    public function not(Spec $spec);

    /**
     * @param $argument
     * @return boolean
     */
    public function isSatisfiedBy($argument);
}