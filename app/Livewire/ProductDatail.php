<?php

namespace App\Livewire;

use App\Models\Product;
use App\Payments\PaymentGetway;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


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

    //betises
    public $quantity ;
    public $total = 0 ;
    public $price_unity;

    public ?string $currency = ''; 

    public function mount(Request $request, Product $product): void
    {
        $this->product = $product;
        $this->price_unity = $this->product->price;
        $this->merchant = 'CONNECTME';
        $this->reference = 'DEBL-SHOP' . Str::random(10);
        // Valider la quantité reçue pour ne pas dépasser 2
        $this->quantity = min($request->query('quantity', 1), 2);
        $this->total = $this->quantity * $this->product->price;
        $this->amount = $this->total;
    }
    public function render(): View
    {
        return view('livewire.product-datail');
    }

    public function submit(): void
    {
        $this->validate();

        $data = [
            "merchant" => $this->merchant,
            "type" => "1",
            "phone" => '243976592273',
            "reference" => "KN$this->reference",
            "amount" => $this->amount,
            "currency" => $this->currency,
            "callbackUrl" => "http://localhost:8000/callback",
        ];
        $payment = new PaymentGetway();

        $payment->process($data);

    }
}
