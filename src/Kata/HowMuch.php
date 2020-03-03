<?php

namespace Kata;

class HowMuch
{
    public function handle(): bool
    {
        return true;
    }

    public function checkDivisionBy7GivesRestOf2(int $value): bool
    {
        return ($value % 7 === 2);
    }

    public function checkDivisionBy9GivesRestOf1(int $value): bool
    {
        return ($value % 9 === 1);
    }

    public function getDivisionBy7(int $value): int
    {
        return intval($value / 7);
    }

    public function getDivisionBy9(int $value): int
    {
        return intval($value / 9);
    }
}
