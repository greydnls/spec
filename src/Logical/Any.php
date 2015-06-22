<?php namespace Kayladnls\Spec\Logical;

use Kayladnls\Spec\CompositeSpec;
use Kayladnls\Spec\Specification;
use Kayladnls\Spec\Specified;

class Any implements Specification
{
    use CompositeSpec;

    /**
     * {@inheritdoc}
     * @author Franke Dejonge
     */
    public function isSatisfiedBy($payload)
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($payload)) {
                return true;
            }
        }

        return empty($this->specifications);
    }
}
