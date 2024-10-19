namespace Aghaeian\POSPayment\Console\Commands;

use Illuminate\Console\Command;
use Brotzka\DotenvEditor\DotenvEditor;

class InstallPOSPayment extends Command
{
    protected $signature = 'pospayment:install';
    protected $description = 'POS ödeme paketi için gerekli ayarları yapılandırma';

    public function handle()
    {
        $this->info('POS Ödeme Yöntemi kuruluyor...');

        $env = new DotenvEditor;

        // Kullanıcıdan merchant ID ve secret key'leri soruyoruz
        $akbankMerchantId = $this->ask('Akbank Merchant ID');
        $akbankSecretKey = $this->ask('Akbank Secret Key');
        
        $env->setKey('AKBANK_MERCHANT_ID', $akbankMerchantId);
        $env->setKey('AKBANK_SECRET_KEY', $akbankSecretKey);

        // Diğer bankalar için sorular eklenebilir
        $env->save();

        $this->info('POS Ödeme Yöntemi başarıyla kuruldu.');
    }
}
