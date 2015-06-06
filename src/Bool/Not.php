<?php namespace Kayladnls\Spec\Bool;

use Kayladnls\Spec\Spec;
use Kayladnls\Spec\Specified;

class Not implements Spec
{
    use Specified;

    protected $negative;

    public function __construct($negative)
    {
        $this->negative = $negative;
    }

    public function isSatisfiedBy($argument)
    {
        return $this->negative->isSatisfiedBy($this->argument) !== true;
    }

}
