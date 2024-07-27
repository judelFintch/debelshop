<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Products extends Component
{

    public function mount()
    {
        // Appeler la méthode pour mettre à jour les prix
        $this->updatePrices();
    }

    public function updatePrices()
    {
        // Définir les nouveaux prix pour les produits avec les IDs spécifiés
        Product::whereIn('id', [1, 2])->update(['price' => 100]);
        Product::where('id', 3)->update(['price' => 3]);
    }
    public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::paginate(3)
        ]);
    }
}
