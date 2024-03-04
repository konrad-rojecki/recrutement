<?php

namespace App\Promotion;

abstract class AbstractDiscountCalculator implements DiscountCalculatorInterface
{
    public function getDiscountFromDatabase(string $code): int
    {
        //let's say it calls database directly
        $database = [
            'code1' => 10,
            'code2' => 20
        ];

        return $database[$code] ?? 0;
    }
}