<?php

namespace Aghaeian\BagistoPosPayment\Providers;

use Illuminate\Support\ServiceProvider;

class POSPaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge the custom config with the application config
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'bagistopospayment');
    }

    public function boot()
    {
        // Load routes and views
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'bagistopospayment');

        // Publish system.php for admin visibility
        $this->publishes([
            __DIR__ . '/../Config/system.php' => config_path('system.php'),
        ], 'config');

        // Publish general config file
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('bagistopospayment.php'),
        ], 'config');
    }
}
