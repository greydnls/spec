<?php

namespace spec\Kayladnls\Spec;

use Kayladnls\Spec\Logical\All;
use Kayladnls\Spec\Logical\Any;
use Kayladnls\Spec\Logical\None;
use Kayladnls\Spec\Specification;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BuilderSpec extends ObjectBehavior
{
    public function it_can_build_an_and_spec($spec1, $spec2)
    {
        $spec1->beADoubleOf(Specification::class);

        $spec2->beADoubleOf(Specification::class);

        $this->beConstructedThrough('all', [[$spec1, $spec2]]);

        $this->shouldHaveType(All::class);
    }

    public function it_can_build_an_either_spec($spec1, $spec2)
    {
        $spec1->beADoubleOf(Specification::class);

        $spec2->beADoubleOf(Specification::class);

        $this->beConstructedThrough('any', [[$spec1, $spec2]]);
        $this->shouldHaveType(Any::class);
    }

    public function it_can_build_a_none_spec($spec1)
    {
        $spec1->beADoubleOf(Specification::class);

        $this->beConstructedThrough('none', [[$spec1]]);
        $this->shouldHaveType(None::class);
    }
}
