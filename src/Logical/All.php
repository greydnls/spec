<?php namespace Kayladnls\Spec\Logical;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Specification;

class All implements Specification
{
    use CompositeSpec;

    /**
     * {@inheritdoc}
     * @author Frank de Jonge
     */
    public function isSatisfiedBy($payload)
    {
        foreach ($this->specifications as $specification) {
            if (! $specification->isSatisfiedBy($payload)) {
                return false;
            }
        }

        return true;
    }
}
