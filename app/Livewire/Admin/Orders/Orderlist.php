<?php

namespace App\Livewire\Admin\Orders;

use Livewire\Component;
use App\Models\Order;

class Orderlist extends Component
{

    public $orders;
    
    // La commande à modifier (pour les détails)
    public $selectedOrder;

    // La méthode pour récupérer les commandes
    public function mount()
    {
        $this->orders = Order::all(); // Récupérer toutes les commandes
    }

    // Méthode pour mettre à jour le statut de la commande
    public function updateStatus($orderId, $status)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->status = $status;
            $order->save();

            // Recharger les commandes après mise à jour
            $this->orders = Order::all();
            session()->flash('message', 'Statut de la commande mis à jour.');
        }
    }

    // Afficher les détails d'une commande
    public function selectOrder($orderId)
    {
        $this->selectedOrder = Order::find($orderId);
    }

    public function render()
    {
        return view('livewire.admin.orders.orderlist');
    }
}
