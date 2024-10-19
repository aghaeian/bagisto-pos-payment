<?php

namespace Aghaeian\BagistoPosPayment\Console\Commands;

use Illuminate\Console\Command;
use Brotzka\DotenvEditor\DotenvEditor;

class InstallPOSPayment extends Command
{
    protected $signature = 'bagisto-pos-payment:install';

    protected $description = 'Install and configure Bagisto POS Payment';

    public function handle()
    {
        $this->info('Starting POS Payment installation...');
        $env = new DotenvEditor;
        
        $this->setEnvVariable($env, 'AKBANK', 'Akbank');
        $this->setEnvVariable($env, 'GARANTI', 'Garanti BBVA');
        // Add more banks as necessary

        $env->save();

        $this->info('POS Payment method installed successfully.');
    }

    private function setEnvVariable(DotenvEditor $env, $bankCode, $bankName)
    {
        $merchantId = $this->ask("Enter the Merchant ID for $bankName");
        $secretKey = $this->ask("Enter the Secret Key for $bankName");

        $env->setKey("{$bankCode}_MERCHANT_ID", $merchantId);
        $env->setKey("{$bankCode}_SECRET_KEY", $secretKey);
    }
}
