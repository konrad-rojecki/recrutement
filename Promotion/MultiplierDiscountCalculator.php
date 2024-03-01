<?php

namespace App\Controller;

class MultiplierDiscountCalculator extends AbstractDiscountCalculator
{
    public function calculate(string $code): DiscountDTO
    {
        $discount = $this->getDiscountFromDatabase($code) * 100;
        $discount = new DiscountDTO((float) $discount);

        return $discount;
    }

    public function calculateMultipleCodes(array $codes): iterable
    {
        // we won't use this method for now
        return [];
    }
}