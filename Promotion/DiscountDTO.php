<?php

namespace App\Controller;

final class DiscountDTO
{
    public function __construct(
        public ?float $howMuchDiscount = null
    ) {
    }

    public function setHowMuchDiscount(float $howMuchDiscount): void
    {
        $this->howMuchDiscount = $howMuchDiscount;
    }
}
