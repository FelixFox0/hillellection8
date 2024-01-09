<?php
namespace App\Services\Product;

use App\Models\Interfaces\ProductRepositoryInterface;
use App\Services\Product\Helpers\SaleHelper\SaleHelperInterface;

class ProductService implements ProductServiceInterface
{
    protected ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductByCategoryId(int $id): array
    {
        return $this->productRepository->getProductsByCategoryId($id);
    }

    public function getProductByCategoryIdWithSale(int $id, SaleHelperInterface $saleHelper)
    {
        $products = $this->getProductByCategoryId($id);
        foreach ($products as $product) {
            $product->price = $saleHelper->calculate($product->price);
        }
        return $products;
    }
}