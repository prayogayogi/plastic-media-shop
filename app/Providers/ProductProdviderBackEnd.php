<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\backEnd\AdminInterface;
use App\Interfaces\backEnd\ProductInterface;
use App\Interfaces\backEnd\CustomerInterface;
use App\Repositories\backEnd\AdminRepository;
use App\Repositories\backEnd\ProductRepository;
use App\Repositories\backEnd\CustomerRepository;
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
        $this->app->bind(AdminInterface::class, AdminRepository::class);
        $this->app->bind(CustomerInterface::class, CustomerRepository::class);
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
