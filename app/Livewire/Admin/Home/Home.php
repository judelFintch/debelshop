<?php

namespace App\Livewire\Admin\Home;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Home extends Component
{

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.admin.home.home');
    }
}
