<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\HowMuch;

class HowMuchTest extends TestCase
{
    protected function setUp(): void
    {
        $this->howMuch = new HowMuch();
    }

    public function testShallPass(): void
    {
        $this->assertEquals(1, 1);
    }

    public function test37DivisionBy7GivesRestOf2(): void
    {
        $value = 37;

        $result = $this->howMuch->checkDivisionBy7GivesRestOf2($value);

        $this->assertEquals(true, $result);
    }

    public function test36DivisionBy7DoesNotGiveRestOf2(): void
    {
        $value = 36;

        $result = $this->howMuch->checkDivisionBy7GivesRestOf2($value);

        $this->assertEquals(false, $result);
    }
}
