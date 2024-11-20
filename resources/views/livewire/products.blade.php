<div>

    <style>
        #cart-items img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
        }
    </style>
    <section class="relative w-full overflow-hidden" aria-label="Carrousel d'images">
        <div class="carousel-wrapper flex transition-transform duration-700">
            <div class="carousel-item w-full" aria-hidden="false">
                <img src="{{ asset('img/4.png') }}" class="w-full h-[520px] brightness-50 object-cover object-top"
                    alt="Image 1">
            </div>
            <div class="carousel-item w-full" aria-hidden="true">
                <img src="{{ asset('img/bg-1.jpg') }}" class="w-full h-[520px] brightness-50 object-cover object-top"
                    alt="Image 2">
            </div>
        </div>
        <div class="absolute inset-0">
            <div class="max-w-7xl mx-auto pt-28 space-y-8 px-6">
                <div class="w-full md:w-2/3 space-y-4">
                    <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">La qualité et la confiance,
                        notre engagement chez Debelshop</h2>
                    <p class="text-gray-100 font-medium leading-relaxed text-lg">
                        Chez Debelshop, la qualité est notre priorité. Nous nous engageons à vous fournir des véhicules
                        fiables et des pièces automobiles de haute qualité,
                        soigneusement sélectionnées pour garantir performance et durabilité.</p>
                </div>
                <div class="flex items-center gap-x-6">
                    <a href="#"
                        class="hover-btn bg-purple-600 text-white px-8 py-3 rounded-lg shadow transition duration-200 ease-in-out transform hover:scale-105">Découvrir</a>
                    <a href="#"
                        class="hover-btn text-gray-950 bg-slate-100 px-8 py-3 rounded-lg shadow border border-gray-200 transition duration-200 ease-in-out transform hover:scale-105">Voir
                        les offres</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Meilleurs Produits -->
    <section class="max-w-7xl mx-auto pt-28 px-6" aria-labelledby="best-products">
        <h3 id="best-products" class="text-4xl font-extrabold leading-tight tracking-tight text-center">Nos Meilleurs
            Produits</h3>
        <p class="font-medium text-gray-600 text-lg leading-relaxed text-center mx-auto w-full md:w-[600px]">Découvrez
            notre sélection de véhicules et pièces détachées.</p>

        <!-- Barre de filtre par catégories -->
        <div class="flex justify-center space-x-4 my-8">
            <button
                class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all"
                onclick="filterCategory('all')">Tous</button>
            <button
                class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all"
                onclick="filterCategory('neuf')">Véhicules Neufs</button>
            <button
                class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all"
                onclick="filterCategory('occasion')">Véhicules d'Occasion</button>
            <button
                class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all"
                onclick="filterCategory('pieces')">Pièces Détachées</button>
        </div>

        <!-- Produits avec filtre -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-12">
            @foreach ($products as $product)
                <div class="relative transform transition-transform hover:scale-105 shadow-lg rounded-lg border border-gray-200 overflow-hidden product-item"
                    data-category="{{ $product->category }}">
                    <div class="relative w-full" style="padding-bottom: 75%;">
                        @php
                            $imageExtensions = ['jpg', 'jpeg', 'png'];
                            $imagePath = null;
                            foreach ($imageExtensions as $extension) {
                                $path = public_path('img/' . $product->id . '.' . $extension);
                                if (file_exists($path)) {
                                    $imagePath = asset('img/' . $product->id . '.' . $extension);
                                    break;
                                }
                            }
                        @endphp
                        <img src="{{ $imagePath ?: asset('img/default.jpg') }}"
                            class="absolute top-0 left-0 w-full h-full object-cover object-center transition-transform duration-500 hover:scale-110"
                            alt="Image du produit {{ $product->title }}">
                    </div>

                    @if ($product->discount)
                        <span
                            class="absolute top-4 left-4 bg-red-600 px-4 py-2 rounded-lg text-sm text-white font-bold">-{{ $product->discount }}%</span>
                    @endif

                    <div class="absolute top-2 right-2">
                        @if ($product->isNew)
                            <span class="bg-green-600 px-2 py-1 rounded-lg text-xs text-white font-bold">Nouveau</span>
                        @elseif($product->isUsed)
                            <span class="bg-orange-600 px-2 py-1 rounded-lg text-xs text-white font-bold">Usage</span>
                        @endif
                    </div>

                    <div class="p-4 flex flex-col space-y-2">
                        <div class="flex justify-between items-center">
                            <a href="{{ route('show.product', $product->id) }}"
                                class="text-gray-900 font-bold text-lg">{{ $product->title }}</a>
                        </div>

                        <div class="flex items-center">
                            @if ($product->inStock)
                                <span class="text-green-600 font-semibold">En Stock</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600 ml-2"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            @else
                                <span class="text-red-600 font-semibold">Rupture de Stock</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600 ml-2" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            @endif
                        </div>

                        <span class="text-gray-900 text-lg font-bold">$ {{ $product->price }}</span>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">
                                <button class="px-3 py-1 bg-gray-200 hover:bg-gray-300"
                                    onclick="updateQuantity({{ $product->id }}, -1)">-</button>
                                <input type="number" id="quantity-{{ $product->id }}" value="1" min="1"
                                    class="w-12 text-center border-none" readonly />
                                <button class="px-3 py-1 bg-gray-200 hover:bg-gray-300"
                                    onclick="updateQuantity({{ $product->id }}, 1)">+</button>
                            </div>
                            <a id="detail-link-{{ $product->id }}" href="{{ route('show.product', $product->id) }}"
                                class="bg-blue-600 text-white px-4 py-2 ml-4 hover:bg-blue-700 transition-colors duration-300 ease-out font-semibold rounded-lg"
                                onclick="updateDetailLink(event, {{ $product->id }})">
                                <span id="detail-text-{{ $product->id }}">Details</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        <!-- Bouton Voir Tous les Produits -->
        <div class="pt-16 text-center">
            <a href="" class="flex items-center justify-center gap-x-2">
                <span class="text-sm font-medium text-gray-600">Voir Tous les Produits</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="w-5 h-5 text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Section promotionnelle pour pièces de véhicules -->
    <section class="max-w-7xl mx-auto pt-28 px-6" aria-labelledby="promotion-pieces">
        <div class="flex flex-col md:flex-row items-center gap-x-8">
            <img src="{{ asset('img/4.jpg') }}"
                class="w-full md:w-1/2 h-full rounded-xl border border-gray-200 parallax"
                alt="Promotion pièces de véhicules">
            <div class="space-y-6">
                <h3 id="promotion-pieces" class="text-3xl font-bold leading-tight tracking-tight">Des pièces de
                    véhicules de qualité à découvrir</h3>
                <p class="text-gray-600 text-base leading-relaxed">Explorez notre gamme de pièces de rechange de haute
                    qualité pour tous types de véhicules.</p>
                <ul class="flex flex-col space-y-3">
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9V5.25a2.25 2.25 0 0 1 4.5 0V9" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 9.75H19.5M7.5 19.5v-4.5a2.25 2.25 0 0 1 4.5 0v4.5" />
                        </svg>
                        <span class="text-gray-700">Pièces détachées pour tous types de véhicules</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 15.75v-7.5a1.5 1.5 0 0 1 3 0v7.5" />
                        </svg>
                        <span class="text-gray-700">Produits d'origine certifiés</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V2.25m0 17.25V18" />
                        </svg>
                        <span class="text-gray-700">Prix compétitifs et livraison rapide</span>
                    </li>
                </ul>
                <a href="#"
                    class="bg-purple-600 text-white px-6 py-3 hover:bg-purple-700 transition-all duration-300 ease-out font-semibold rounded-lg">Voir
                    nos Pièces</a>
            </div>
        </div>
    </section>

    <x-cart></x-cart>



    <script type="text/javascript">
        function updateQuantity(productId, change) {
            const quantityInput = document.getElementById(`quantity-${productId}`);
            const detailText = document.getElementById(`detail-text-${productId}`);
            let currentQuantity = parseInt(quantityInput.value);

            // Calculer la nouvelle quantité (minimale: 1)
            currentQuantity = Math.max(1, currentQuantity + change);
            quantityInput.value = currentQuantity;

            // Mettre à jour le texte du bouton "Détails"
            detailText.textContent = `Payer (${currentQuantity})`;
        }

        function updateDetailLink(event, productId) {
            event.preventDefault(); // Empêche le lien par défaut de se charger
            const quantity = document.getElementById(`quantity-${productId}`).value;

            // Mettre à jour l'URL avec la quantité
            const detailLink = document.getElementById(`detail-link-${productId}`);
            detailLink.href = `${detailLink.href.split('?')[0]}?quantity=${quantity}`;

            // Redirige vers le lien mis à jour
            window.location.href = detailLink.href;
        }
    </script>
