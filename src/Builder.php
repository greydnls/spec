<?php namespace Kayladnls\Spec;


use Kayladnls\Spec\Boolean\Both;
use Kayladnls\Spec\Boolean\Either;
use Kayladnls\Spec\Boolean\Not;

abstract class Builder
{
    /**
     * @param Specification $first
     * @param Specification $second
     * @return Both
     */
    static public function both(Specification $first, Specification $second)
    {
        return new Both($first, $second);
    }

    /**
     * @param Specification $first
     * @param Specification $second
     * @return Either
     */
    static public function either(Specification $first, Specification $second)
    {
        return new Either($first, $second);
    }

    /**
     * @param Specification $spec
     * @return Not
     */
    static public function not(Specification $spec)
    {
        return new Not($spec);
    }


}