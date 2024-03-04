<?php

namespace App\Promotion;

interface DiscountCalculatorInterface
{
    public function calculate(string $code): DiscountDTO;

    public function calculateMultipleCodes(array $codes): iterable;
}