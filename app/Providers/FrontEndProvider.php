<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\frontEnd\DashboardInterface;
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
