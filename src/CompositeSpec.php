<?php namespace Kayladnls\Spec;

trait CompositeSpec
{
    /**
     * @var Specification
     */
    protected $first;
    /**
     * @var Specification
     */
    protected $second;

    /**
     * @param Specification $first
     * @param Specification $second
     */
    public function __construct(Specification $first, Specification $second)
    {
        $this->first = $first;
        $this->second = $second;
    }
}