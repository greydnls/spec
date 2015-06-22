<?php

namespace spec\Kayladnls\Spec\Boolean;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EitherSpec extends ObjectBehavior
{
    function it_will_pass_with_two_true_values($spec1, $spec2)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Spec');
        $spec1->isSatisfiedBy('anything')->wilLReturn(true);

        $spec2->beADoubleOf('Kayladnls\Spec\Spec');
        $spec2->isSatisfiedBy('anything')->wilLReturn(true);

        $this->beConstructedWith($spec1, $spec2);

        $this->isSatisfiedBy('anything')->shouldEqual(true);
    }

    function it_will_pass_with_one_true_one_false($spec1, $spec2)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Spec');
        $spec1->isSatisfiedBy('anything')->wilLReturn(false);

        $spec2->beADoubleOf('Kayladnls\Spec\Spec');
        $spec2->isSatisfiedBy('anything')->wilLReturn(true);

        $this->beConstructedWith($spec1, $spec2);

        $this->isSatisfiedBy('anything')->shouldEqual(true);
    }

    function it_will_fail_with_two_false($spec1, $spec2)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Spec');
        $spec1->isSatisfiedBy('anything')->wilLReturn(false);

        $spec2->beADoubleOf('Kayladnls\Spec\Spec');
        $spec2->isSatisfiedBy('anything')->wilLReturn(false);

        $this->beConstructedWith($spec1, $spec2);

        $this->isSatisfiedBy('anything')->shouldEqual(false);
    }
}
