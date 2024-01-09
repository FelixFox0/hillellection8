<?php

namespace App\Models\Repositories;

use App\Models\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProductRepositoryByFacade implements ProductRepositoryInterface
{

    public function getProductsByCategoryId(int $id): array
    {
        return DB::table('oc_product_to_category')
            ->select()
            ->join('oc_product', 'oc_product_to_category.product_id', '=', 'oc_product.product_id')
            ->where('oc_product_to_category.category_id', '=', $id)
            ->get()
            ->toArray();
    }
}