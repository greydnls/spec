<?php namespace Kayladnls\Spec;

trait CompositeSpec
{
    /**
     * @var Spec
     */
    protected $first;
    /**
     * @var Spec
     */
    protected $second;

    /**
     * @param Spec $first
     * @param Spec $second
     */
    public function __construct(Spec $first, Spec $second)
    {
        $this->first = $first;
        $this->second = $second;
    }
}