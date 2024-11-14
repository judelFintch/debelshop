<?php

namespace App\Livewire\About;

use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.about.about');
    }
}
