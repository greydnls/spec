<?php

namespace spec\Kayladnls\Spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BuilderSpec extends ObjectBehavior
{
    public function it_can_create_an_and_spec($spec1, $spec2)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Specification');

        $spec2->beADoubleOf('Kayladnls\Spec\Specification');

        $this->beConstructedThrough('both', [$spec1, $spec2]);
        $this->shouldHaveType('Kayladnls\Spec\Boolean\Both');
    }

    public function it_can_create_an_either_spec($spec1, $spec2)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Specification');

        $spec2->beADoubleOf('Kayladnls\Spec\Specification');

        $this->beConstructedThrough('either', [$spec1, $spec2]);
        $this->shouldHaveType('Kayladnls\Spec\Boolean\Either');
    }

    public function it_can_create_a_not_spec($spec1)
    {
        $spec1->beADoubleOf('Kayladnls\Spec\Specification');

        $this->beConstructedThrough('not', [$spec1]);
        $this->shouldHaveType('Kayladnls\Spec\Boolean\Not');
    }
}
