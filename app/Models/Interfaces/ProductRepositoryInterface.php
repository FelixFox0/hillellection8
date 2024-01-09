<?php
namespace App\Models\Interfaces;

interface ProductRepositoryInterface
{
    public function getProductsByCategoryId(int$id): array;
}