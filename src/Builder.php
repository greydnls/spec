<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Logical\Any;
use Kayladnls\Spec\Logical\All;
use Kayladnls\Spec\Logical\None;

class Builder
{
    /**
     * @param array $specifications
     * @return All
     */
    public static function all(array $specifications = [])
    {
        return new All($specifications);
    }

    /**
     * @param array $specifications
     * @return Any
     */
    public static function any(array $specifications = [])
    {
        return new Any($specifications);
    }

    /**
     * @param Specification $spec
     * @return None
     */
    public static function none(array $specifications = [])
    {
        return new None($specifications);
    }
}
