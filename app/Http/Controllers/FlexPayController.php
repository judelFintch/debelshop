<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Devscast\Maxicash\Client as Maxicash;
use Devscast\Maxicash\Credential;
use Devscast\Maxicash\PaymentEntry;
use Devscast\Maxicash\Environment;

class FlexPayController extends Controller
{
    public function __invoke(Request $request)
    {


      
        $product = Product::query()->where('id', $request->input('product_id'))->first();
        $reference = Str::random(8);
        $price = intval($product->price * 100);
        $maxicash = new Maxicash(
            credential: new Credential(config('services.maxicash.merchant_id'), config('services.maxicash.merchant_password')),
            environment: Environment::LIVE // use `Environment::LIVE` for live
        );

        $entry = new PaymentEntry(
            credential: $maxicash->credential,
            amount: $price,
            reference: $reference,
            acceptUrl: route('accepted.payment'),
            declineUrl: route('rejected.payment'),
            cancelUrl: route('rejected.payment'),
            notifyUrl: route('notification')
        );

        $url = $maxicash->queryStringURLPayment($entry);

        //return redirect()->to($url);
    }
}
