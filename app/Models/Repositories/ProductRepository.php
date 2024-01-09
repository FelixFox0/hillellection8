<?php

namespace App\Models\Repositories;

use App\Models\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\ConnectionInterface;


class ProductRepository implements ProductRepositoryInterface
{
    protected ConnectionInterface $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    public function getProductsByCategoryId(int $id): array
    {
        return $this->db
            ->table('oc_product_to_category')
            ->select()
            ->join('oc_product', 'oc_product_to_category.product_id', '=', 'oc_product.product_id')
            ->where('oc_product_to_category.category_id', '=', $id)
            ->get()
            ->toArray();
    }
}