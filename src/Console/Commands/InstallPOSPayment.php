<?php

namespace Aghaeian\BagistoPosPayment\Console\Commands;

use Illuminate\Console\Command;
use Brotzka\DotenvEditor\DotenvEditor;

class InstallPOSPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bagisto-pos-payment:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install and configure the Bagisto POS Payment method';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Starting Bagisto POS Payment installation...');

        // Initialize dotenv editor to set environment variables
        $env = new DotenvEditor;

        // Collect bank credentials for each bank
        $this->setEnvVariable($env, 'AKBANK', 'Akbank');
        $this->setEnvVariable($env, 'GARANTI', 'Garanti BBVA');
        $this->setEnvVariable($env, 'ISBANK', 'Türkiye İş Bankası');
        $this->setEnvVariable($env, 'ZIRAAT', 'Ziraat Bankası');
        $this->setEnvVariable($env, 'VAKIFBANK', 'VakıfBank');
        $this->setEnvVariable($env, 'YAPIKREDI', 'Yapı Kredi');
        $this->setEnvVariable($env, 'FINANSBANK', 'QNB Finansbank');
        $this->setEnvVariable($env, 'HALKBANK', 'Halkbank');

        $env->save(); // Save all collected environment variables to the .env file

        $this->info('Bagisto POS Payment method installed successfully.');
    }

    /**
     * Collects and sets the environment variables for a given bank.
     *
     * @param DotenvEditor $env
     * @param string $bankCode
     * @param string $bankName
     * @return void
     */
    private function setEnvVariable(DotenvEditor $env, $bankCode, $bankName)
    {
        $merchantId = $this->ask("Enter the Merchant ID for $bankName");
        $secretKey = $this->ask("Enter the Secret Key for $bankName");

        $env->setKey("{$bankCode}_MERCHANT_ID", $merchantId);
        $env->setKey("{$bankCode}_SECRET_KEY", $secretKey);
    }
}
