<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Division;

class DivisionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->division = new Division();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function test37DivisionBy7GivesRestOf2(): void
    {
        $this->division->setValue(37);

        $result = $this->division->checkDivisionBy7GivesRestOf2();

        $this->assertEquals(true, $result);
    }

    public function test36DivisionBy7DoesNotGiveRestOf2(): void
    {
        $this->division->setValue(36);

        $result = $this->division->checkDivisionBy7GivesRestOf2();

        $this->assertEquals(false, $result);
    }

    public function test37DivisionBy9GivesRestOf1(): void
    {
        $this->division->setValue(37);

        $result = $this->division->checkDivisionBy9GivesRestOf1();

        $this->assertEquals(true, $result);
    }

    public function test36DivisionBy9DoesNotGiveRestOf1(): void
    {
        $this->division->setValue(36);

        $result = $this->division->checkDivisionBy9GivesRestOf1();

        $this->assertEquals(false, $result);
    }

    public function test37DivisionBy7Returns5(): void
    {
        $this->division->setValue(37);

        $result = $this->division->getDivisionBy7();

        $this->assertEquals(5, $result);
    }

    public function test14DivisionBy7Returns2(): void
    {
        $this->division->setValue(14);

        $result = $this->division->getDivisionBy7();

        $this->assertEquals(2, $result);
    }

    public function test37DivisionBy9Returns4(): void
    {
        $this->division->setValue(37);

        $result = $this->division->getDivisionBy9();

        $this->assertEquals(4, $result);
    }

    public function test18DivisionBy8Returns2(): void
    {
        $this->division->setValue(18);

        $result = $this->division->getDivisionBy9();

        $this->assertEquals(2, $result);
    }
}
