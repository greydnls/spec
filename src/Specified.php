<?php
/**
 * Created by PhpStorm.
 * User: kayladaniels
 * Date: 6/6/15
 * Time: 11:25 AM
 */

namespace Kayladnls\Spec;

use Kayladnls\Spec\Bool\Also;
use Kayladnls\Spec\Bool\Either;
use Kayladnls\Spec\Bool\Not;

trait Specified
{
    protected $argument;

    public function __invoke($something = false)
    {
        $this->argument = $something;
        return $this->isSatisfiedBy($this->argument);
    }


    public function __construct($something = null)
    {
        if ($something instanceof Spec) {

        }
    }

    public function also(Spec $right)
    {
        return new Also($this, $right);
    }

    public function either(Spec $right)
    {
        return new Either($this, $right);
    }

    public function not(Spec $spec)
    {
        return new Not($spec);
    }

    public function isSatisfiedBy($argument)
    {
        throw new \Exception('Function isSatisfiedBy Must Be Defined');
    }
}