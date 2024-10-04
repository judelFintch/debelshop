<?php

namespace App\Livewire;


use App\Models\Product;
use App\Payments\PaymentGetway;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
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


       
       
        return view('livewire.product-datail', [
            'products' => Product::paginate(4)
        ]);
    }

    public function submit()
    {

    }
}
