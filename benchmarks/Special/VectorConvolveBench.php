<?php

namespace Tensor\Benchmarks\Special;

use Tensor\Vector;

/**
 * @Groups({"Special"})
 */
class VectorConvolveBench
{
    /**
     * @var \Tensor\Vector
     */
    protected $a;

    /**
     * @var \Tensor\Vector
     */
    protected $kernel;

    public function setUp() : void
    {
        $this->a = Vector::uniform(250000);

        $this->kernel = Vector::uniform(100);
    }

    /**
     * @Subject
     * @Iterations(5)
     * @BeforeMethods({"setUp"})
     * @OutputTimeUnit("seconds", precision=3)
     */
    public function convolve() : void
    {
        $this->a->convolve($this->kernel);
    }
}
