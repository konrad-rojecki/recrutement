<?php

namespace App\Controller;

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
        return true;
    }
}
