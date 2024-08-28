<?php

namespace App\Livewire\Payment;

use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Success extends Component
{
    public array $request;

    public function mount(Request $request)
    {
        $this->request = $request->all();
    }

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.payment.success');
    }
}
