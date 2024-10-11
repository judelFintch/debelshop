<div>
    <!-- Panier -->
    <div id="cart" class="fixed top-16 right-4 w-96 bg-white shadow-lg rounded-lg p-6 hidden">
        <h2 class="text-xl font-bold mb-4">Votre Panier</h2>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left">Produit</th>
                    <th class="text-right">Quantité</th>
                    <th class="text-right">Prix</th>
                </tr>
            </thead>
            <tbody id="cart-items" class="space-y-4"></tbody>
        </table>
        <div class="flex justify-between mt-4">
            <span class="font-bold">Total :</span>
            <span id="cart-total" class="font-bold">$0.00</span>
        </div>
        <button class="mt-4 bg-purple-600 text-white px-4 py-2 rounded-lg w-full" onclick="checkout()">Passer à la Caisse</button>
    </div>

    <!-- Bouton Panier -->
    <button class="fixed bottom-4 right-4 bg-purple-600 text-white p-4 rounded-full" onclick="toggleCart()">
        🛒
    </button>
</div>