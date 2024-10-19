<?php

namespace Aghaeian\POSPayment\Providers;

use Illuminate\Support\ServiceProvider;
use Aghaeian\POSPayment\Console\Commands\InstallPOSPayment;

class POSPaymentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge configuration from the package into the application's config
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'pospayment'
        );

        // Register console commands
        $this->commands([
            InstallPOSPayment::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes from the package
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Load views from the package
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'pospayment');

        // Publish configuration files to allow the application to override them
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('pospayment.php'),
        ], 'config');
    }
}
