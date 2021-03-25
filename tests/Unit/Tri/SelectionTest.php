<?php

namespace Tests\Tri;

use PHPUnit\Framework\TestCase;
use Xtrembaker\Algorithms\Tri\Selection;

class SelectionTest extends TestCase
{
    private Selection $selection;

    protected function setUp(): void
    {
        parent::setUp();

        $this->selection = new Selection();
    }

    public function test_selection_sort_algorithms(): void
    {
        $input = [5, 2, 4, 6, 1, 3];
        $this->assertEquals([1,2,3,4,5,6],($this->selection)($input));
    }

    public function test_selection_sort_invariant_initialisation(): void
    {
        $input = [5];
        $output = ($this->selection)($input);
        $this->assertEquals([5],$output);
    }

    public function test_selection_sort_invariant_conservation(): void
    {
        // @TODO
        $this->markTestIncomplete();
    }

    public function test_tri_selection_invariant_terminaison(): void
    {
        // @TODO
        $this->markTestIncomplete();
    }
}