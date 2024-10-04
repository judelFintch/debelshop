<div>
    <!-- Section principale du produit -->
    <section class="mx-auto max-w-5xl px-4">
        <div class="flex flex-col md:flex-row items-center gap-x-8">
            <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="rounded-lg w-full md:w-[570px] h-auto object-cover object-center" alt="{{ $product->title }}">
            <div class="space-y-4 mt-4 md:mt-0">
                <h4 class="text-purple-600 font-semibold">New: Version 2024</h4>
                <h2 class="text-3xl font-bold uppercase">{{ $product->title }}</h2>
                <span class="block text-lg font-medium">{{ $product->price }} $</span>

                <p class="text-sm text-gray-600 leading-tight tracking-tight">{{ $product->description }}</p>

                <ul class="flex flex-col space-y-1">
                    <li class="text-sm flex items-center pl-2 gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Une meilleure qualité prix</span>
                    </li>
                    <li class="text-sm flex items-center pl-2 gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Une livraison rapide</span>
                    </li>
                    <li class="text-sm flex items-center pl-2 gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Paiement par monnaie électronique</span>
                    </li>
                </ul>
                <button data-product-id="{{ $product->id }}" class="bg-purple-600 w-full py-2 rounded-lg text-white font-semibold openModal">Payer maintenant</button>
            </div>
        </div>
    </section>

    <!-- Section des produits similaires -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 pt-12">
            @foreach($products as $product)
                <div class="relative rounded-xl overflow-hidden shadow-lg border border-gray-200 hover:shadow-xl transition duration-300">
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="h-[300px] w-full object-cover object-center" alt="{{ $product->title }}">
                    <a href="#" class="absolute inset-0 flex justify-end px-4 py-4 hover:bg-black/30 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </a>
                    <div class="relative p-4 space-y-2 text-center">
                        <h3 class="font-semibold text-xl">{{ $product->title }}</h3>
                        <span class="font-medium text-lg text-green-600">$ {{ $product->price }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Modal pour le paiement (par défaut masqué) -->
    <div id="paymentModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white w-full max-w-lg p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Informations de paiement</h2>
            <form id="paymentForm" method="post" action="{{ route('payment') }}">
                @csrf
                <!-- Champ caché pour l'ID du produit -->
                <input type="hidden" name="product_id">

                <!-- Champ Nom -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Champ Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Champ Adresse -->
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                    <input type="text" id="address" name="address" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-4">
                    <button type="button" id="closeModal" class="bg-gray-600 text-white px-4 py-2 rounded-lg">Annuler</button>
                    <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-lg">Confirmer et Payer</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inclusion de Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Gestion du modal -->
    <script>
        // Ouvre le modal et passe l'ID du produit
        document.querySelectorAll('.openModal').forEach(button => {
            button.addEventListener('click', function () {
                const productId = this.getAttribute('data-product-id');
                document.querySelector('input[name="product_id"]').value = productId;
                document.getElementById('paymentModal').classList.remove('hidden');
            });
        });

        // Ferme le modal
        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('paymentModal').classList.add('hidden');
        });
    </script>

    <!-- Initialisation de Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,  // Boucle infinie
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'slide',  // Transition par glissement
            zoom: true,  // Activer le zoom
        });
    </script>
</div>
