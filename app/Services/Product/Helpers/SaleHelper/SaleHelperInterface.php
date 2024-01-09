<?php
namespace App\Services\Product\Helpers\SaleHelper;

interface SaleHelperInterface
{
    public function calculate(float $price): float;
}