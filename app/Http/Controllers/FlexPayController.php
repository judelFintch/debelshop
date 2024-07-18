<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlexPayController extends Controller
{
    public function __invoke(Request $request)
    {
        $response = Http::post('https://cardpayment.flexpay.cd/v1.1/pay', [
            'authorization' => "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzg0Mjk1NzU2LCJzdWIiOiJjNzE3NzVkNDY5MDI2ZmNhYTAyZWM5MzliZjg2YmIwOCJ9.FMDlW7KdLXhQzZJ2pfvNpLEqk9kWNhGbl9kge2D3v48",
            'merchant' => 'CONNECTEME',
            'reference' => $request->input('reference'),
            'amount' => $request->input('amount'),
            'currency' => $request->input('currency'),
            'description' => 'test',
            'callback_url' => 'http://localhost:8000/callback',
            'approve_url' => 'http://localhost',
            'cancel_url' => 'http://localhost',
            'decline_url' => 'http://localhost'
        ]);

        $json = $response->json();

        $code = $json['code'];
        $message = $json['message'];

        if ($code == '0') {
            $url = $json['url']; // URL DE LA PAGE PAIEMENT PAR CARTE
            return redirect($url); // REDIRECTION VERS L' URL DE LA PAGE PAIEMENT CARTE
        }
    }
}
