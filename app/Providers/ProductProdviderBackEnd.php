<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\backEnd\ProductInterface;
use App\Repositories\backEnd\ProductRepository;
use App\Interfaces\backEnd\ProductCategoryInterface;
use App\Repositories\backEnd\ProductCategoryRepository;

class ProductProdviderBackEnd extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(ProductCategoryInterface::class, ProductCategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
