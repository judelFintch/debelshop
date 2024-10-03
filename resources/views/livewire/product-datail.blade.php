<div>
    <section class="mx-auto max-w-5xl px-4">
        <div class="flex flex-col md:flex-row items-start gap-x-8">
            <!-- Slider Swiper à gauche -->
            <div class="w-full md:w-1/2 h-auto">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Les images du produit -->
                        <div class="swiper-slide">
                            <img src="{{ asset('img/' . $product->id . '-1.jpg') }}" class="rounded-lg w-full h-auto object-cover object-center" alt="{{ $product->title }}">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/' . $product->id . '-2.jpg') }}" class="rounded-lg w-full h-auto object-cover object-center" alt="{{ $product->title }}">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/' . $product->id . '-3.jpg') }}" class="rounded-lg w-full h-auto object-cover object-center" alt="{{ $product->title }}">
                        </div>
                    </div>

                    <!-- Pagination (points) -->
                    <div class="swiper-pagination"></div>

                    <!-- Flèches de navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <!-- Informations produit à droite -->
            <div class="w-full md:w-1/2 space-y-6 mt-4 md:mt-0">
                <h4 class="text-purple-600 font-semibold text-lg">New: Version 2024</h4>
                <h2 class="text-3xl font-bold uppercase">{{ $product->title }}</h2>
                <span class="block text-xl font-medium text-green-600">{{ $product->price }} $</span>

                <p class="text-base text-gray-600 leading-tight tracking-wide">{{ $product->description }}</p>

                <ul class="space-y-2">
                    <li class="flex items-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Une meilleure qualité prix</span>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Une livraison rapide</span>
                    </li>
                    <li class="flex items-center gap-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Paiement par monnaie électronique</span>
                    </li>
                </ul>

                <form method="post" action="{{ route('payment') }}">
                    @csrf
                    <input type="hidden" readonly name="product" id="product" value="{{ $product->id }}">
                    <button class="bg-purple-600 w-full py-3 rounded-lg text-white font-semibold transition hover:bg-purple-700 active:bg-purple-800" type="submit">Confirmer</button>
                </form>
            </div>
        </div>
    </section>

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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
            effect: 'slide',  // Vous pouvez aussi essayer 'fade' pour une autre transition
            zoom: true,  // Activer le zoom
        });
    </script>
</div>
