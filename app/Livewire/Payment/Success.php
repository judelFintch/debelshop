<?php

namespace App\Livewire\Payment;

use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\DetailsOrder;

#[Layout('layouts.app')]
class Success extends Component
{
    public array $request;
    public $ordersDetails = [];

    public function mount(Request $request)
    {
        // Récupère la référence de la commande depuis la requête ou utilise une valeur par défaut
        $this->request = $request->all() ?: ['reference' => 'ORD/CME/DEBELSHOP/2024-10-25/2/92'];

        // Recherche de la commande en fonction de la référence et stockage des détails
           $order = DetailsOrder::with  ('order', $this->request['reference'])->first();
           $this->ordersDetails = $order;
         //$order = Order::All();
        

        if ($order) {
            $this->ordersDetails = $order->toArray(); // Convertir en tableau pour l'affichage
        } else {
            // Gestion si la commande n'est pas trouvée
            session()->flash('error', 'Commande introuvable');
        }
    }

    public function render()
    {
        return view('livewire.payment.success', [
            'ordersDetails' => $this->ordersDetails, // Passer les détails de la commande à la vue
        ]);
    }
}
