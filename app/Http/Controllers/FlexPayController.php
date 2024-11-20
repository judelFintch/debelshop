<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\DetailsOrder;
use Devscast\Maxicash\Client as Maxicash;
use Devscast\Maxicash\Credential;
use Devscast\Maxicash\PaymentEntry;
use Devscast\Maxicash\Environment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FlexPayController extends Controller
{
    public function handlePayment(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'qte' => 'required|integer|min:1|max:100',
        ]);

        $product = Product::findOrFail($validatedData['product_id']);
        if (!$product->inStock) {
            return back()->withErrors('Produit en rupture de stock.');
        }

        $reference = $this->generateReference();
        $totalPrice = $validatedData['qte'] * $product->price;

        DB::transaction(function () use ($validatedData, $product, $reference, $totalPrice) {
            $order = Order::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'address' => $validatedData['address'],
                'status' => 'pending',
                'reference' => $reference,
            ]);

            DetailsOrder::create([
                'order_id' => $order->id,
                'quantity' => $validatedData['qte'],
                'product_description' => $product->id,
                'product_title' => $product->title,
                'product_price' => $product->price,
            ]);
        });

        try {
            $maxicash = new Maxicash(
                new Credential(
                    config('services.maxicash.merchant_id'),
                    config('services.maxicash.merchant_password')
                ),
                Environment::LIVE
            );

            $paymentEntry = new PaymentEntry(
                $maxicash->credential,
                intval($totalPrice * 100),
                $reference,
                route('accepted.payment'),
                route('rejected.payment'),
                route('rejected.payment'),
                route('notification')
            );

            return redirect()->to($maxicash->queryStringURLPayment($paymentEntry));
        } catch (\Exception $e) {
            return back()->withErrors('Erreur avec Maxicash. Veuillez réessayer.');
        }
    }

    private function generateReference(): string
    {
        $randomNumber = rand(1, 100);
        $latestOrder = Order::latest()->first();
        $orderId = $latestOrder ? $latestOrder->id : 0;

        return sprintf("ORD/CME/DBL/%s/%d/%s", date('yd'), $orderId, Str::random(6));
    }
}
