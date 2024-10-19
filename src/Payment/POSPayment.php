<?php

namespace Aghaeian\POSPayment\Payment;

use Webkul\Payment\Payment\Payment;

class POSPayment extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code = 'pospayment';

    public function getRedirectUrl()
    {
        return route('pospayment.process');
    }
}
