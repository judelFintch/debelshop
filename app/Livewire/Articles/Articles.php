<?php

namespace App\Livewire\Articles;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Articles extends Component
{

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.articles.articles');
    }
}
