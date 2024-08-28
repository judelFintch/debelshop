<?php

namespace App\Payments;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class MayshaPaymentGetway
{
    /**
     * @throws ConnectionException
     */
    public function process(array $data)
    {
        $gateway = "https://marchand.maishapay.online/payment/vers1.0/merchant/checkout";


        $response = Http::withHeaders([
            "Content-Type" => "application/json",
        ])->post($gateway, $data);

        $responseData = $response->json();


        return $response->json();
    }
}
