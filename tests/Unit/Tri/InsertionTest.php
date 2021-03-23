<?php

namespace Tests\Tri;

use Closure;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Directory;

class InsertionTest extends TestCase
{
    private Closure $insertion;

    protected function setUp(): void
    {
        parent::setUp();

        $this->insertion = require dirname(__DIR__, 3).DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Tri'.DIRECTORY_SEPARATOR.'insertion.php';
    }

    public function test_tri_insertion(): void
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
    }

    public function test_tri_insertion_invariant_terminaison(): void
    {
        // @TODO
    }
}