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
    public function render(): View
    {
        return view('livewire.products', [
            'products' => Product::paginate(3)
        ]);
    }
}
