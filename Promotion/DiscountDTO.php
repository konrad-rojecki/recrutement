<?php

namespace App\Controller;

class DiscountDTO
{
    public function __construct(
        public float $howMuchDiscount
    ) {
    }

    public function setHowMuchDiscount(float $howMuchDiscount): void
    {
        $this->howMuchDiscount = $howMuchDiscount;
    }
}
