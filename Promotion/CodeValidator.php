<?php

namespace App\Promotion;

class CodeValidator
{
    public function __construct(
        private AbstractDiscountCalculator $discountCalculactor
    ) {
    }

    public function validate(string $code): bool
    {
        if ($this->cartIsNotEmpty()) {
            if ($this->discountCalculactor->getDiscountFromDatabase($code)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function cartIsNotEmpty(): bool
    {
        //here some simple logic or call to another service
        return true;
    }
}
