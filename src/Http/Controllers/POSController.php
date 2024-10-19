<?php

namespace Aghaeian\BagistoPosPayment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class POSController extends Controller
{
    public function processPayment(Request $request, $bank)
    {
        $bankConfig = Config::get("bagistopospayment.banks.$bank");

        if (!$bankConfig) {
            return response()->json(['error' => 'Bank not supported.'], 400);
        }

        $paymentResponse = $this->sendPaymentToBank($bankConfig, $request->all());

        if ($paymentResponse['status'] === 'success') {
            return response()->json(['message' => $paymentResponse['message']], 200);
        }

        return response()->json(['error' => $paymentResponse['message']], 400);
    }

    private function sendPaymentToBank($config, $data)
    {
        return [
            'status' => 'success',
            'message' => 'Payment processed successfully using ' . $config['name'],
        ];
    }
}
