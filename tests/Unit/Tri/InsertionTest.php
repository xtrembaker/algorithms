<?php

namespace Tests\Tri;

use PHPUnit\Framework\TestCase;
use Xtrembaker\Algorithms\Tri\Insertion;

class InsertionTest extends TestCase
{
    private Insertion $insertion;

    protected function setUp(): void
    {
        parent::setUp();

        $this->insertion = new Insertion();

    }

    public function test_tri_insertion_algorithms(): void
    {
        $input = [5, 2, 4, 6, 1, 3];
        $output = ($this->insertion)($input);
        $this->assertEquals([1, 2, 3, 4, 5, 6],$output);
    }

    public function test_tri_insertion_invariant_initialisation(): void
    {
        $input = [5];
        $output = ($this->insertion)($input);
        $this->assertEquals([5],$output);
    }

    public function test_tri_insertion_invariant_conservation(): void
    {
        // @TODO
        $this->markTestIncomplete();
    }

    public function test_tri_insertion_invariant_terminaison(): void
    {
        // @TODO
        $this->markTestIncomplete();
    }
}