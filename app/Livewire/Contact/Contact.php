<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Contact extends Component
{
    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.contact.contact');
    }
}
