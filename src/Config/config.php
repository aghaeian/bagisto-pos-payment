<?php

return [
    'banks' => [
        'akbank' => [
            'name' => 'Akbank',
            'api_url' => 'https://api.akbank.com',
            'merchant_id' => env('AKBANK_MERCHANT_ID'),
            'secret_key' => env('AKBANK_SECRET_KEY'),
            'description' => 'Akbank sanal pos ödeme yöntemi',
        ],
        'garanti' => [
            'name' => 'Garanti BBVA',
            'api_url' => 'https://api.garantibbva.com',
            'merchant_id' => env('GARANTI_MERCHANT_ID'),
            'secret_key' => env('GARANTI_SECRET_KEY'),
            'description' => 'Garanti BBVA sanal pos ödeme yöntemi',
        ],
        'isbank' => [
            'name' => 'Türkiye İş Bankası',
            'api_url' => 'https://api.isbank.com.tr',
            'merchant_id' => env('ISBANK_MERCHANT_ID'),
            'secret_key' => env('ISBANK_SECRET_KEY'),
            'description' => 'Türkiye İş Bankası sanal pos ödeme yöntemi',
        ],
        'ziraat' => [
            'name' => 'Ziraat Bankası',
            'api_url' => 'https://api.ziraatbank.com.tr',
            'merchant_id' => env('ZIRAAT_MERCHANT_ID'),
            'secret_key' => env('ZIRAAT_SECRET_KEY'),
            'description' => 'Ziraat Bankası sanal pos ödeme yöntemi',
        ],
        'vakifbank' => [
            'name' => 'VakıfBank',
            'api_url' => 'https://api.vakifbank.com.tr',
            'merchant_id' => env('VAKIFBANK_MERCHANT_ID'),
            'secret_key' => env('VAKIFBANK_SECRET_KEY'),
            'description' => 'VakıfBank sanal pos ödeme yöntemi',
        ],
        'yapikredi' => [
            'name' => 'Yapı Kredi',
            'api_url' => 'https://api.yapikredi.com.tr',
            'merchant_id' => env('YAPIKREDI_MERCHANT_ID'),
            'secret_key' => env('YAPIKREDI_SECRET_KEY'),
            'description' => 'Yapı Kredi sanal pos ödeme yöntemi',
        ],
        'finansbank' => [
            'name' => 'QNB Finansbank',
            'api_url' => 'https://api.qnbfinansbank.com',
            'merchant_id' => env('FINANSBANK_MERCHANT_ID'),
            'secret_key' => env('FINANSBANK_SECRET_KEY'),
            'description' => 'QNB Finansbank sanal pos ödeme yöntemi',
        ],
        'halkbank' => [
            'name' => 'Halkbank',
            'api_url' => 'https://api.halkbank.com.tr',
            'merchant_id' => env('HALKBANK_MERCHANT_ID'),
            'secret_key' => env('HALKBANK_SECRET_KEY'),
            'description' => 'Halkbank sanal pos ödeme yöntemi',
        ],
    ],

    'currency' => 'TRY',

    'success_message' => 'Ödeme başarıyla gerçekleştirildi.',
    'error_message' => 'Ödeme sırasında bir hata oluştu. Lütfen tekrar deneyin.',
];
