<?php namespace Kayladnls\Spec\Boolean;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Spec;
use Kayladnls\Spec\Specified;

class Also implements Spec
{
    use Specified, CompositeSpec{
        CompositeSpec::__construct insteadof Specified;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($argument)
    {
        return $this->first->isSatisfiedBy($argument) && $this->second->isSatisfiedBy($argument);
    }
}
