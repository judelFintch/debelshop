<div>
    <!-- Alerte de maintenance -->
    <div class="bg-yellow-500 text-black text-center py-3 shadow-lg relative">
        <p class="font-medium">🔧 Une maintenance et des travaux de mise à niveau sont en cours sur le site. Merci de votre patience !</p>
        <button class="absolute top-2 right-4 text-black" onclick="this.parentElement.style.display='none'">✖</button>
    </div>

    <!-- Section d'introduction avec une image de fond -->
    <section>
        <div class="relative">
            <img src="{{ asset('img/4.png') }}" class="w-full h-[520px] brightness-50 object-cover object-top" alt="Présentation des articles">
            <div class="absolute inset-0">
                <div class="max-w-5xl mx-auto pt-28 space-y-8 px-4">
                    <div class="w-full md:w-1/2 space-y-4">
                        <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">Nos Articles</h2>
                        <p class="text-gray-100 font-medium leading-relaxed text-base">Explorez notre sélection complète de véhicules neufs, d'occasion, et de pièces de rechange pour tous vos besoins automobiles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Filtre et Catégories -->
    <section class="mx-auto max-w-5xl relative pt-16 px-4">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0 md:space-x-8">
            <!-- Liste de catégories -->
            <div class="flex space-x-4">
                <button class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-colors">Tous</button>
                <button class="bg-gray-200 text-gray-900 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">Véhicules Neufs</button>
                <button class="bg-gray-200 text-gray-900 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">Véhicules d'Occasion</button>
                <button class="bg-gray-200 text-gray-900 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">Pièces de Rechange</button>
            </div>

            <!-- Filtres supplémentaires -->
            <div class="flex space-x-4">
                <!-- Filtre par prix -->
                <div class="relative">
                    <select class="block appearance-none bg-gray-200 border border-gray-300 text-gray-900 py-2 px-4 rounded-lg focus:outline-none">
                        <option>Trier par prix</option>
                        <option>Prix : Croissant</option>
                        <option>Prix : Décroissant</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 absolute top-2 right-3 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15l3.75-3.75L15.75 15M8.25 9l3.75 3.75L15.75 9" />
                    </svg>
                </div>

                <!-- Filtre par disponibilité -->
                <div class="relative">
                    <select class="block appearance-none bg-gray-200 border border-gray-300 text-gray-900 py-2 px-4 rounded-lg focus:outline-none">
                        <option>Trier par disponibilité</option>
                        <option>En stock</option>
                        <option>Sur commande</option>
                    </select>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 absolute top-2 right-3 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15l3.75-3.75L15.75 15M8.25 9l3.75 3.75L15.75 9" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Liste des produits -->
    <section class="mx-auto max-w-5xl relative pt-16 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
            <div class="relative transform transition-transform hover:scale-105 shadow-lg rounded-lg border border-gray-200 overflow-hidden">
                <!-- Image produit -->
                <div class="relative w-full" style="padding-bottom: 75%;">
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover object-center transition-transform duration-500 hover:scale-110" alt="{{ $product->title }}">
                </div>

                <!-- Badge réduction -->
                @if($product->discount)
                <span class="absolute top-4 left-4 bg-red-600 px-4 py-2 rounded-lg text-sm text-white font-bold">-{{ $product->discount }}%</span>
                @endif

                <!-- Détails produit -->
                <div class="p-4 flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        @if($product->isNew)
                        <span class="bg-purple-600 px-4 py-1 rounded-lg text-sm text-white font-bold">Nouveau</span>
                        @endif
                        <a wire:navigate href="{{ route('show-product', $product->id) }}" class="text-gray-900 font-bold text-lg">{{ $product->title }}</a>
                    </div>
                    
                    <!-- Avis produit -->
                    <div class="flex items-center space-x-1">
                        <span class="text-yellow-500">★★★★☆</span>
                        <span class="text-gray-500 text-sm">(15 avis)</span>
                    </div>

                    
                    <span class="text-gray-900 text-lg font-bold">$ {{ $product->price }}</span>

                
                    <div class="w-full">
                        <a wire:navigate href="{{ route('show-product', $product->id) }}" class="bg-purple-600 text-white px-6 py-2 w-full text-center hover:bg-purple-700 transition-colors duration-300 ease-out font-semibold rounded-lg">Payer maintenant</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    
        <div class="pt-16 text-center">
            <a href="#" class="flex items-center justify-center gap-x-2">
                <span class="text-sm font-medium text-gray-600">Voir plus de produits</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </section>
</div>
