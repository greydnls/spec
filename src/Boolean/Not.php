<?php namespace Kayladnls\Spec\Boolean;

use Kayladnls\Spec\Specification;
use Kayladnls\Spec\Specified;

class Not implements Specification
{
    /**
     * @var Specification
     */
    protected $negative;

    /**
     * @param Specification $negative
     */
    public function __construct(Specification $negative)
    {
        $this->negative = $negative;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($argument)
    {
        return $this->negative->isSatisfiedBy($argument) !== true;
    }

}
