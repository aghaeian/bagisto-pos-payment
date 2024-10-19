<?php

return [
    'payment' => [
        'methods' => [
            'bagistopospayment' => [
                'code' => 'bagistopospayment',
                'title' => 'POS Payment Method',
                'description' => 'Supports multiple Turkish banks',
                'class' => 'Aghaeian\BagistoPosPayment\Payment\POSPayment',
                'active' => true,
                'sort' => 1,
            ],
        ],
    ],
];
