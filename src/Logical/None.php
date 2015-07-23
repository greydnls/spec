<?php namespace Kayladnls\Spec\Logical;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Specification;

class None implements Specification
{
    use CompositeSpec;

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($payload)
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($payload) == true) {
                return false;
            }
        }

        return true;
    }
}
