<?php

namespace App\Livewire;

use App\Models\Product;
use App\Payments\PaymentGetway;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductDatail extends Component
{
    public Model $product;

    #[Validate([
        'required'
    ])]
    public ?string $merchant = '';

    #[Validate([
        'required'
    ])]
    public ?string $amount = '';

    #[Validate([
        'required'
    ])]
    public ?string $reference = '';

    #[Validate([
        'required'
    ])]
    public ?string $currency = '';

    public function mount(Product $product): void
    {
        $this->product = $product;
    }
    public function render(): View
    {
        return view('livewire.product-datail');
    }

    public function submit()
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
