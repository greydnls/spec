<?php

namespace spec\Kayladnls\Spec\Logical;

use Kayladnls\Spec\Specification;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NotSpec extends ObjectBehavior
{
    function it_will_pass_with_a_false($spec)
    {
        $spec->beADoubleOf(Specification::class);

        $spec->isSatisfiedBy('anything')->wilLReturn(false);

        $this->beConstructedWith($spec);

        $this->isSatisfiedBy('anything')->shouldEqual(true);
    }

    function it_will_fail_with_a_true($spec)
    {
        $spec->beADoubleOf(Specification::class);

        $spec->isSatisfiedBy('anything')->wilLReturn(true);

        $this->beConstructedWith($spec);

        $this->isSatisfiedBy('anything')->shouldEqual(false);
    }
}
