<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\backEnd\AdminInterface;
use App\Interfaces\backEnd\ProfitInterface;
use App\Interfaces\backEnd\ProductInterface;
use App\Interfaces\backEnd\CustomerInterface;
use App\Repositories\backEnd\AdminRepository;
use App\Repositories\backEnd\ProfitRepository;
use App\Repositories\backEnd\ProductRepository;
use App\Interfaces\backEnd\TransactionInterface;
use App\Repositories\backEnd\CustomerRepository;
use App\Interfaces\backEnd\GalleriProductInterface;
use App\Repositories\backEnd\TransactionRepository;
use App\Interfaces\backEnd\ProductCategoryInterface;
use App\Repositories\backEnd\GalleriProductRepository;
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
        $this->app->bind(GalleriProductInterface::class, GalleriProductRepository::class);
        $this->app->bind(TransactionInterface::class, TransactionRepository::class);
        $this->app->bind(ProfitInterface::class, ProfitRepository::class);
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
