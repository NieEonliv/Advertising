<?php

namespace Nieeonliv\Advertising\Providers;

use Illuminate\Support\ServiceProvider;

class AdvertisingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
