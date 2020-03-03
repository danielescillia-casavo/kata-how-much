<?php

namespace Kata;

class HowMuch
{
    private $value;

    public function __construct(int $value = 0)
    {
        $this->setValue($value);
    }

    public function handle(): bool
    {
        return true;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }

    public function checkDivisionBy7GivesRestOf2(): bool
    {
        return $this->checkDivisionBy(7, 2);
    }

    public function checkDivisionBy9GivesRestOf1(): bool
    {
        return $this->checkDivisionBy(9, 1);
    }

    private function checkDivisionBy(int $divider, int $rest): bool
    {
        return ($this->value % $divider === $rest);
    }

    public function getDivisionBy7(): int
    {
        return $this->getDivisionBy(7);
    }

    public function getDivisionBy9(): int
    {
        return $this->getDivisionBy(9);
    }

    private function getDivisionBy(int $divider): int
    {
        return intval($this->value / $divider);
    }
}
