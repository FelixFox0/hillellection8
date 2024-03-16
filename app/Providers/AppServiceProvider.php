<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Repositories\ProductRepository;
use App\Models\Interfaces\ProductRepositoryInterface;
use App\Services\Product\Helpers\SaleHelper\SaleHelper;
use App\Services\Product\Helpers\SaleHelper\SaleHelperInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Database\Connection;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

        $this->app->bind(SaleHelperInterface::class, SaleHelper::class);

        $saleHelper = $this->app->when(SaleHelper::class);
        $saleHelper->needs('$low')
            ->give(5);
        $saleHelper->needs('$mid')
            ->give(7);
        $saleHelper->needs('$big')
            ->give(10);

        $this->app->bind(ProductServiceInterface::class,ProductService::class);

        $this->app->bind(ConnectionInterface::class, Connection::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('image', fn (string $asset) => $this->asset("resources/images/{$asset}"));
    }
}
