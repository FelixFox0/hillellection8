<?php

namespace App\Services\Product\Helpers\SaleHelper;


class SaleHelper implements SaleHelperInterface
{
    const LOW = 10;
    const BIG = 30;
    protected int $low;
    protected int $mid;
    protected int $big;

    public function __construct(int $low, int $mid, int $big)
    {
        $this->low = $low;
        $this->mid = $mid;
        $this->big = $big;
    }

    public function calculate(float $price): float
    {
        if ($price < static::LOW) {
            return $price = $price * (100/100-$this->low);
        }
        if ($price > static::BIG) {
            return $price = $price * (100/100-$this->big);
        }

        return $price = $price * (100/100-$this->mid);
    }
}