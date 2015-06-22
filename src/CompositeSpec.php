<?php namespace Kayladnls\Spec;

trait CompositeSpec
{
    /**
     * @var Specification[]
     */
    protected $specifications;

    /**
     * @param array Specification[] $specifications
     * @throws \InvalidArgumentException
     */
    public function __construct(array $specifications = [])
    {
        foreach ($specifications as $spec) {
            if (!$spec instanceof Specification) {
                throw new \InvalidArgumentException('Specifications must implement Kayladnls\Spec\Specification');
            }
        }

        $this->specifications = $specifications;
    }
}