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
}
