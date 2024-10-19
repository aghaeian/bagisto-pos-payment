<?php

namespace Aghaeian\BagistoPosPayment\Payment;

use Webkul\Payment\Payment\Payment;

class POSPayment extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code = 'bagistopospayment';

    public function getRedirectUrl()
    {
        return route('bagistopospayment.process');
    }
}
