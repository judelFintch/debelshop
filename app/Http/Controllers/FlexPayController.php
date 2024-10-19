<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Devscast\Maxicash\Client as Maxicash;
use Devscast\Maxicash\Credential;
use Devscast\Maxicash\PaymentEntry;
use Devscast\Maxicash\Environment;
use Illuminate\Http\Request;

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
        // Validation des données d'entrée
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
        ]);

        
        $product = Product::findOrFail($validatedData['product_id']);

        $randomNumber = rand(1, 100);
        $latestOrder = Order::latest()->first();
        $orderId = $latestOrder ? $latestOrder->id : 0; 
        $reference = sprintf("ORD/CME/DEBELSHOP/%s/%d/%d", date('Y-m-d'), $orderId, $randomNumber);
        $priceInCents = intval($product->price * 100);

        // Configuration du client Maxicash
        $maxicash = new Maxicash(
            new Credential(
                config('services.maxicash.merchant_id'),
                config('services.maxicash.merchant_password')
            ),
            Environment::LIVE // Utiliser l'environnement LIVE pour la production
        );

        // Création de l'entrée de paiement
        $paymentEntry = new PaymentEntry(
            $maxicash->credential,
            $priceInCents,
            $reference,
            route('accepted.payment'),
            route('rejected.payment'),
            route('rejected.payment'),
            route('notification')
        );

        // Création de la commande
        Order::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'quantity' => 1,
            'product_description' => $product->id,
            'product_title' => $product->title,
            'product_price' => $product->price,
            'status' => 'pending', // reactored status
            'reference' => $reference,
        ]);

        // Redirection vers l'URL de paiement
        $paymentUrl = $maxicash->queryStringURLPayment($paymentEntry);
        return redirect()->to($paymentUrl);
    }
}
