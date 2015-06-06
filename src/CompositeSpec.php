<?php
/**
 * Created by PhpStorm.
 * User: kayladaniels
 * Date: 6/6/15
 * Time: 11:58 AM
 */

namespace Kayladnls\Spec;


trait CompositeSpec
{
    protected $left;
    protected $right;

    public function __construct(Spec $left, Spec $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}