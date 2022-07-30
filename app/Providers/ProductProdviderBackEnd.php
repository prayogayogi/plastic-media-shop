<?php

namespace App\Providers;

use App\Interfaces\backEnd\ProductInterface;
use App\Repositories\backEnd\ProductRepository;
use Illuminate\Support\ServiceProvider;

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
