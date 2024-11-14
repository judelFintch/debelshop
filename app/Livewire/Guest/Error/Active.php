<?php

namespace App\Livewire\Guest\Error;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Active extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.guest.error.active');
    }
}
