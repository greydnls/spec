<?php namespace Kayladnls\Spec\Boolean;

use Kayladnls\Spec\Spec;
use Kayladnls\Spec\Specified;

class Not implements Spec
{
    use Specified;

    /**
     * @var Spec
     */
    protected $negative;

    /**
     * @param Spec $negative
     */
    public function __construct(Spec $negative)
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
