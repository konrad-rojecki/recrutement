<?php

namespace App\Controller;

interface DiscountCalculatorInterface
{
    public function calculate(string $code): DiscountDTO;

    public function calculateMultipleCodes(array $codes): iterable;
}