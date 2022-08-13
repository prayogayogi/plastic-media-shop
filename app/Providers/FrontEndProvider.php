<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\frontEnd\AuthInterface;
use App\Repositories\frontEnd\AuthRepository;
use App\Interfaces\frontEnd\CheckoutInterface;
use App\Interfaces\frontEnd\DashboardInterface;
use App\Repositories\frontEnd\CheckoutRepository;
use App\Repositories\frontEnd\DashboardRepository;

class FrontEndProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DashboardInterface::class, DashboardRepository::class);
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(CheckoutInterface::class, CheckoutRepository::class);
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
