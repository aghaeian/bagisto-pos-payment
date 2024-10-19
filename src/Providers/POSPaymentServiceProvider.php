<?php

namespace Aghaeian\POSPayment\Providers;

use Illuminate\Support\ServiceProvider;
use Webkul\Payment\Payment;

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

        $this->registerPaymentMethods();
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

    /**
     * Register custom payment methods.
     *
     * @return void
     */
    protected function registerPaymentMethods()
    {
        app()->register(function () {
            return [
                'code' => 'pospayment',
                'title' => 'POS Payment Method',
                'description' => 'Supports multiple Turkish banks',
                'class' => 'Aghaeian\POSPayment\Payment\POSPayment',
                'active' => true,
                'sort' => 1,
            ];
        });
    }
}
