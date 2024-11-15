<div class="p-6 space-y-6">

    <!-- Message de succès -->
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('message') }}
        </div>
    @endif

    <!-- Titre -->
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Liste des Commandes</h2>

    <!-- Tableau des commandes -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-50">
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Référence</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Nom</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Statut</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3 text-sm">{{ $order->reference }}</td>
                        <td class="px-4 py-3 text-sm">{{ $order->name }}</td>
                        <td class="px-4 py-3 text-sm">{{ $order->email }}</td>
                        <td class="px-4 py-3 text-sm">
                            <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                {{ $order->status == 'pending' ? 'bg-yellow-500 text-white' : 
                                    ($order->status == 'completed' ? 'bg-green-500 text-white' : 'bg-red-500 text-white') }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="space-x-2">
                                <button wire:click="selectOrder({{ $order->id }})" class="text-blue-500 hover:underline">
                                    Détails
                                </button>

                                <div class="mt-2">
                                    @if ($order->status != 'completed')
                                        <button wire:click="updateStatus({{ $order->id }}, 'completed')" class="text-green-500 hover:underline">
                                            Marquer comme complété
                                        </button>
                                    @endif
                                    <button wire:click="updateStatus({{ $order->id }}, 'canceled')" class="text-red-500 hover:underline">
                                        Annuler
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Détails de la commande sélectionnée -->
    @if ($selectedOrder)
        <div class="mt-6 bg-gray-100 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Détails de la Commande</h3>
            <p><strong>Référence:</strong> {{ $selectedOrder->reference }}</p>
            <p><strong>Nom:</strong> {{ $selectedOrder->name }}</p>
            <p><strong>Email:</strong> {{ $selectedOrder->email }}</p>
            <p><strong>Adresse:</strong> {{ $selectedOrder->address }}</p>
            <p><strong>Statut:</strong> 
                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                    {{ $selectedOrder->status == 'pending' ? 'bg-yellow-500 text-white' : 
                        ($selectedOrder->status == 'completed' ? 'bg-green-500 text-white' : 'bg-red-500 text-white') }}">
                    {{ ucfirst($selectedOrder->status) }}
                </span>
            </p>
        </div>
    @endif

</div>
