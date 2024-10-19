<?php

namespace Aghaeian\BagistoPosPayment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class POSController extends Controller
{
    /**
     * Process the payment based on the selected bank.
     *
     * @param  Request  $request
     * @param  string   $bank
     * @return \Illuminate\Http\Response
     */
    public function processPayment(Request $request, $bank)
    {
        // Retrieve the configuration for the selected bank
        $bankConfig = Config::get("bagistopospayment.banks.$bank");

        if (!$bankConfig) {
            return response()->json(['error' => 'Bank not supported.'], 400);
        }

        // Example logic to process the payment
        // (This is where you would integrate with the selected bank's API)
        $paymentResponse = $this->sendPaymentToBank($bankConfig, $request->all());

        if ($paymentResponse['status'] === 'success') {
            return response()->json(['message' => $paymentResponse['message']], 200);
        }

        return response()->json(['error' => $paymentResponse['message']], 400);
    }

    /**
     * Simulate sending payment data to a bank's API.
     * (In a real-world scenario, this would be your API integration.)
     *
     * @param  array  $config
     * @param  array  $data
     * @return array
     */
    private function sendPaymentToBank($config, $data)
    {
        // Here, you would send the payment data to the bank's API using $config['api_url'] etc.
        // For demonstration, we'll simulate a successful response.
        return [
            'status' => 'success',
            'message' => 'Payment processed successfully using ' . $config['name'],
        ];
    }
}
