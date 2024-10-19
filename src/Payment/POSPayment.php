<?php

namespace Aghaeian\BagistoPosPayment\Payment;

use Webkul\Payment\Payment\Payment;

class POSPayment extends Payment
{
    protected $code = 'bagistopospayment';

    public function getRedirectUrl()
    {
        return route('bagistopospayment.process');
    }
}
