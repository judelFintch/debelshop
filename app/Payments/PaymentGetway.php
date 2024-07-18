<?php

declare(strict_types=1);

namespace App\Payments;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\ConnectionException;
class PaymentGetway
{
    public function process(array $data): void
    {
        $gateway = "https://cardpayment.flexpay.cd/v1.1/pay";

        try {
            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJcL2xvZ2luIiwicm9sZXMiOlsiTUVSQ0hBTlQiXSwiZXhwIjoxNzg0Mjk1NzU2LCJzdWIiOiJjNzE3NzVkNDY5MDI2ZmNhYTAyZWM5MzliZjg2YmIwOCJ9.FMDlW7KdLXhQzZJ2pfvNpLEqk9kWNhGbl9kge2D3v48",
            ])->post($gateway, $data);

            if ($response->failed()) {
                $error_message = 'Une erreur lors du traitement de votre requête';
            } else {
                $jsonRes = $response->json();
                $code = $jsonRes['code'];
                if ($code != "0") {
                    $error_message = 'Impossible de traiter la demande, veuillez réessayer';
                } else {
                    $message = $jsonRes['message'];
                    $orderNumber = $jsonRes['orderNumber'];
                }
            }
        } catch (RequestException $e) {
            // Handle client or server error (400-500 status codes)
            $error_message = 'Request Exception: ' . $e->getMessage();
        } catch (ConnectionException $e) {
            // Handle network errors
            $error_message = 'Connection Exception: ' . $e->getMessage();
        } catch (\Exception $e) {
            // Handle other exceptions
            $error_message = 'General Exception: ' . $e->getMessage();
        }
    }
}
