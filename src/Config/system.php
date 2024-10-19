
<?php

return [
    'payment' => [
        'methods' => [
            'pospayment' => [
                'code' => 'pospayment',
                'title' => 'POS Payment Method',
                'description' => 'Supports multiple Turkish banks',
                'class' => 'Aghaeian\POSPayment\Payment\POSPayment',
                'active' => true, // Make sure this is true
                'sort' => 1, // This controls the display order of the payment methods
                'default' => false,
            ],
        ],
    ],
];
