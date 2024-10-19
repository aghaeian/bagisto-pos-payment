<?php

namespace Aghaeian\BagistoPosPayment\Providers;

use Illuminate\Support\ServiceProvider;

class POSPaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge the custom configuration into the application's config
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'bagistopospayment'
        );
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'bagistopospayment');

        // Publish configuration to allow users to override it
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('bagistopospayment.php'),
        ], 'config');

        // Publish system config for admin visibility
        $this->publishes([
            __DIR__ . '/../Config/system.php' => config_path('system.php'),
        ], 'config');
    }
}
