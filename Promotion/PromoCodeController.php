<?php

namespace App\Controller;

class PromoCodeController
{
    public function __construct(
        private CodeValidator $codeValidator,
        private AbstractDiscountCalculator $discountApplicator
    ) {
    }

    public function addCode(string $code): ?DiscountDTO
    {
        if ($this->codeValidator->validate($code)) {
            $discountAmount = $this->discountApplicator->calculate($code);

            return $discountAmount;
        } else {
            return null;
        }
    }
}
