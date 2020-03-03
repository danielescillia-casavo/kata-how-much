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

    public function testHandleReturnTrue(): void
    {
        $this->assertEquals(true, $this->howMuch->handle());
    }
}
