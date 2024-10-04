<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Devscast\Maxicash\Client as Maxicash;
use Devscast\Maxicash\Credential;
use Devscast\Maxicash\PaymentEntry;
use Devscast\Maxicash\Environment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FlexPayController extends Controller
{
    /**
     * Handle the incoming payment request.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);

       
        $product = Product::findOrFail($request->input('product_id'));

        $reference = Str::random(8);

       
        $price = intval($product->price * 100);

       
        $maxicash = new Maxicash(
            credential: new Credential(
                config('services.maxicash.merchant_id'),
                config('services.maxicash.merchant_password')
            ),
            environment: Environment::LIVE // Use LIVE environment for production
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

      
        Order::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'quantity' => 1,
            'product_description' => $product->id,
            'product_title' => $product->title,
            'product_price' => $product->price,
            'status' => 'pending', // Default to "pending"
            'reference' => $reference,
        ]);

       
        $paymentUrl = $maxicash->queryStringURLPayment($entry);

        return redirect()->to($paymentUrl);
    }
}
