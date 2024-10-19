<?php

namespace Aghaeian\BagistoPosPayment\Providers;

use Illuminate\Support\ServiceProvider;

class POSPaymentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge the custom configuration into the application's config
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'bagistopospayment'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load the routes for the payment processing
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Load the views for the payment method
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'bagistopospayment');

        // Publish the configuration to allow users to override it
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('bagistopospayment.php'),
        ], 'config');
    }
}
