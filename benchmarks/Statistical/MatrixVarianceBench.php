<?php

namespace Tensor\Benchmarks\Statistical;

use Tensor\Matrix;

/**
 * @Groups({"Statistical"})
 */
class MatrixVarianceBench
{
    /**
     * @var \Tensor\Matrix
     */
    protected $a;

    public function setUp() : void
    {
        $this->a = Matrix::uniform(500, 500);
    }

    /**
     * @Subject
     * @Iterations(5)
     * @BeforeMethods({"setUp"})
     * @OutputTimeUnit("seconds", precision=3)
     */
    public function variance() : void
    {
        $this->a->variance();
    }
}
