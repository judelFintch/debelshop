<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Products extends Component
{
    public function mount()
    {
        $this->updateProducts();
    }

    public function updateProducts()
    {
        $updates = [
            1 => [
                'title' => 'Noah 4 cylindres Essence',
                'price' => 5000,
            ],
            2 => [
                'title' => 'Alphard 2002',
                'price' => 3.000,
            ],
        ];

        foreach ($updates as $id => $data) {
            $product = Product::find($id);
            if ($product) {
                $product->title = $data['title'];
                $product->price = $data['price'];
                $product->save(); // Enregistre les modifications
            }
        }
    }

    public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::paginate(2)
        ]);
    }
}

