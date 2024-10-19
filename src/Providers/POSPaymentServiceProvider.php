<?php

namespace Aghaeian\POSPayment\Providers;

use Illuminate\Support\ServiceProvider;
use Aghaeian\POSPayment\Console\Commands\InstallPOSPayment;

class POSPaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'pospayment'
        );

        $this->commands([
            InstallPOSPayment::class,
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'pospayment');
    }
}
