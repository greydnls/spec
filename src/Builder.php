<?php namespace Kayladnls\Spec;


use Kayladnls\Spec\Logical\Any;
use Kayladnls\Spec\Logical\All;
use Kayladnls\Spec\Logical\Not;

class Builder
{
    /**
     * @param array $specifications
     * @return Both
     */
    static public function both(array $specifications = [])
    {
        return new All($specifications);
    }

    /**
     * @param array $specifications
     * @return Any
     */
    static public function either(array $specifications = [])
    {
        return new Any($specifications);
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