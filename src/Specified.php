<?php namespace Kayladnls\Spec;

use Kayladnls\Spec\Boolean\Both;

trait Specified
{
    /**
     * @param mixed|Specification|null $argument
     */
    public function __construct($argument = null)
    {
        if ($argument instanceof Specification) {
            return new Both($this, $argument);
        }
    }

    /**
     * @param $argument
     * @return bool
     */
    public function __invoke($argument)
    {
        return $this->isSatisfiedBy($argument);
    }
}