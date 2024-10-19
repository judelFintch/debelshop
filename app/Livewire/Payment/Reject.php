<?php
namespace App\Livewire\Payment;

use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Order;

#[Layout('layouts.app')]
class Reject extends Component
{
    public array $request;

    public function mount(Request $request): void
    {
        $this->request = $request->all();
        $this->rejectOrder();
    }

    public function rejectOrder(): void
    {
        $operationCode = $this->request['reference'] ?? null;
        if ($operationCode) {
            $order = Order::where('reference', $operationCode)->first();
            if ($order) {
                ##refactored this code to unums laravel
                $order->status = 'rejected';
                $order->save();
            }
        }
    }

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.payment.reject');
    }
}
