<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Boolean\Both;
use Kayladnls\Spec\Boolean\Either;
use Kayladnls\Spec\Boolean\Not;

trait Specified
{
    /**
     * @var mixed
     */
    protected $argument;

    /**
     * @param bool $argument
     * @return mixed
     */
    public function __invoke($argument)
    {
        return $this->isSatisfiedBy($argument);
    }

    /**
     * @param Spec $second
     * @return Both
     */
    public function also(Spec $second)
    {
        return new Both($this, $second);
    }

    /**
     * @param Spec $second
     * @return Either
     */
    public function either(Spec $second)
    {
        return new Either($this, $second);
    }

    /**
     * @param Spec $spec
     * @return Not
     */
    public function not(Spec $spec)
    {
        return new Not($spec);
    }
}