<?php

namespace App\Livewire\Articles;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Product;

class Articles extends Component
{


    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.articles.articles', [
            'products' => Product::paginate(10)
        ]);
    }
}
