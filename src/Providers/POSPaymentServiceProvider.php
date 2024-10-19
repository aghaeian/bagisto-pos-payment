namespace Webkul\POSPayment\Providers;

use Illuminate\Support\ServiceProvider;
use Webkul\POSPayment\Console\Commands\InstallPOSPayment;

class POSPaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'pospayment'
        );

        $this->commands([
            InstallPOSPayment::class,
        ]);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'pospayment');
    }
}
