<?php

namespace Aghaeian\POSPayment\Console\Commands;

use Illuminate\Console\Command;
use Brotzka\DotenvEditor\DotenvEditor;

class InstallPOSPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pospayment:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'POS ödeme paketi için gerekli ayarları yapılandırma';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('POS Ödeme Yöntemi kuruluyor...');

        $env = new DotenvEditor;

        // Ask for the merchant IDs and secret keys for each bank
        $akbankMerchantId = $this->ask('Akbank Merchant ID');
        $akbankSecretKey = $this->ask('Akbank Secret Key');
        
        $env->setKey('AKBANK_MERCHANT_ID', $akbankMerchantId);
        $env->setKey('AKBANK_SECRET_KEY', $akbankSecretKey);

        // You can add more banks here as needed
        $env->save();

        $this->info('POS Ödeme Yöntemi başarıyla kuruldu.');
    }
}
