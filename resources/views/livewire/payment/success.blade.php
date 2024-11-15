<div>
    <div class="mx-auto max-w-3xl py-20">
        <div class="border border-gray-300 p-8 rounded-lg shadow-lg">
            <!-- En-tête de la facture -->
            <div class="flex justify-between items-center border-b border-dashed pb-4 mb-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Facture</h1>
                    <p class="text-sm text-gray-600">Date: <span class="font-semibold"></span></p>
                    <p class="text-sm text-gray-600">Numéro de référence: <span class="font-semibold">{{ $request['reference'] }}</span></p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-purple-600">DEBELSHOP</p>
                    <p class="text-sm text-gray-600">34 av kibati Q: Industriel</p>
                    <p class="text-sm text-gray-600">Téléphone: +243 974 762 200</p>
                </div>
            </div>
            
    
            <!-- Informations du client -->
            <div class="mb-6">
                <p class="text-lg font-semibold text-gray-800">Facturé à :</p>
                <p class="text-sm text-gray-600">Nom: <span class="font-semibold"></span></p>
                <p class="text-sm text-gray-600">Adresse: <span class="font-semibold"></span></p>
                <p class="text-sm text-gray-600">Email : <span class="font-semibold"></span></p>
            </div>
    
            <!-- Détails de la commande -->
            <div class="mb-6">
                <table class="w-full text-sm text-gray-600">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="py-2 text-left">Article</th>
                            <th class="py-2 text-right">Quantité</th>
                            <th class="py-2 text-right">Prix unitaire</th>
                            <th class="py-2 text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
        
                        <tr class="border-b border-gray-200">
                            <td class="py-2"><strong>{{ $ordersDetails['name'] }}</strong><br><span class="text-gray-500">Description: {{ $ordersDetails['name'] }}</span></td>
                            <td class="py-2 text-right">{{ $ordersDetails['quantity'] }}</td>
                            <td class="py-2 text-right">€{{ number_format($ordersDetails['product_price'], 2) }}</td>
                            <td class="py-2 text-right">€{{ number_format($ordersDetails['product_price'] * $ordersDetails['quantity'], 2) }}</td>
                        </tr>
            
                    </tbody>
                </table>
            </div>
    
            <!-- Récapitulatif des coûts -->
            <div class="border-t border-dashed pt-4 mb-6">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Sous-total</span>
                    <span class="font-semibold text-gray-800">€</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">TVA (20%)</span>
                    <span class="font-semibold text-gray-800">€</span>
                </div>
                <div class="flex justify-between text-sm font-semibold">
                    <span class="text-gray-800">Total</span>
                    <span class="text-gray-800">€</span>
                </div>
            </div>
    
            <!-- Statut de la commande -->
            <div class="mb-6">
                <p class="text-sm text-gray-600"><strong>Statut de la commande :</strong> <span class="font-semibold">{{ $ordersDetails['status'] }}</span></p>
                <p class="text-sm text-gray-600"><strong>Date de création :</strong> <span class="font-semibold">{{ $ordersDetails['created_at'] }}</span></p>
            </div>
    
            <!-- Boutons d'action -->
            <div class="flex items-center justify-center gap-x-4">
                <a href="{{ route('products') }}" class="px-6 py-3 bg-purple-600 text-white font-bold rounded-lg shadow-sm hover:bg-purple-700 transition-colors duration-300 ease-in">Retour à l'accueil</a>
                <a href="" class="px-6 py-3 border border-gray-200 bg-gray-200 text-gray-800 font-bold rounded-lg shadow-sm hover:bg-gray-300 transition-colors duration-300 ease-in">Voir mes commandes</a>
            </div>
        </div>
    </div>
    
</div>
