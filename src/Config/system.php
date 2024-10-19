<?php

return [
    'payment' => [
        'methods' => [
            'pospayment' => [
                'code' => 'pospayment',
                'title' => 'POS Payment Method',
                'description' => 'Supports multiple Turkish banks',
                'class' => 'Aghaeian\POSPayment\Payment\POSPayment',
                'active' => true,
                'sort' => 1,
                'default' => false,
            ],
        ],
    ],
];
