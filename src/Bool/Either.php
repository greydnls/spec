<?php namespace Kayladnls\Spec\Bool;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Spec;
use Kayladnls\Spec\Specified;

class Either implements Spec
{
    use Specified, CompositeSpec{
        CompositeSpec::__construct insteadof Specified;
    }

    public function isSatisfiedBy($argument)
    {
        return $this->left->isSatisfiedBy($this->argument) || $this->right->isSatisfiedBy($this->argument);
    }
}
