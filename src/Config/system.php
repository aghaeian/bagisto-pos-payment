<?php

return [
    'payment' => [
        'methods' => [
            'bagistopospayment' => [
                'code' => 'bagistopospayment',
                'title' => 'POS Payment',
                'description' => 'POS Payment Method supporting multiple Turkish banks',
                'class' => 'Aghaeian\BagistoPosPayment\Payment\POSPayment',
                'active' => true,
                'sort' => 1,
            ],
        ],
    ],
];
