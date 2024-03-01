<?php

namespace App\Controller;

final class MultiplierDiscountCalculator extends AbstractDiscountCalculator
{
    public function calculate(string $code): DiscountDTO
    {
        $howMuchDiscount = $this->getDiscountFromDatabase($code) * 100;
        if (empty($discount)) {
            throw new \Exception('discount is empty');
        }
        $discount = new DiscountDTO();
        $discount->setHowMuchDiscount($howMuchDiscount);

        return $discount;
    }

    public function calculateMultipleCodes(array $codes): iterable
    {
        // we won't use this method for now
        return [];
    }
}