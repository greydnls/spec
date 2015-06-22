<?php namespace Kayladnls\Spec\Boolean;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Specification;
use Kayladnls\Spec\Specified;

class Either implements Specification
{
    use CompositeSpec;

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($argument)
    {
        return $this->first->isSatisfiedBy($argument) || $this->second->isSatisfiedBy($argument);
    }
}
