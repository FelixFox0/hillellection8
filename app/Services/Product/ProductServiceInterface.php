<?php

namespace App\Services\Product;

use App\Services\Product\Helpers\SaleHelper\SaleHelperInterface;

interface ProductServiceInterface
{
    public function getProductByCategoryId(int $id): array;

    public function getProductByCategoryIdWithSale(int $id, SaleHelperInterface $saleHelper);

}