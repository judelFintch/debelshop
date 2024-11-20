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

#[Layout('layouts.guest')]
class ProductDatail extends Component
{
    public Model $product;

    public $images = array(1, 2, 3);
    public $imageExtensions = ['jpg', 'jpeg', 'png']; // Liste des extensions à vérifier

    public $imagePath = null;
    public $colors = array(1, 2, 3);
    public $quantity = 1;



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

    public function mount(int $id): void
    {

        // Chargement du produit depuis l'ID
        $this->product = Product::findOrFail($id);

        // Récupération de la quantité depuis l'URL, avec une valeur par défaut
        $this->quantity = max((int) request()->query('quantity', 1), 1);
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
