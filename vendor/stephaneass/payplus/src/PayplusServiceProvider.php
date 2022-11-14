<?php

namespace StephaneAss\Payplus;

use Illuminate\Support\ServiceProvider;

class PayplusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/payplus.php' => config_path('payplus.php'),
        ], 'payplus-config');
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
