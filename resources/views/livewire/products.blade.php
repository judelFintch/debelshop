<div>
    <!-- Notification de maintenance -->
    <div class="bg-yellow-500 text-black text-center py-3 shadow-lg relative">
        <p class="font-medium">🔧 Une maintenance et des travaux de mise à niveau sont en cours sur le site. Merci de votre patience !</p>
        <button class="absolute top-2 right-4 text-black" onclick="this.parentElement.style.display='none'">✖</button>
    </div>

    <!-- Carrousel d'images -->
    <section class="relative w-full overflow-hidden">
        <div class="carousel-wrapper flex transition-transform duration-700">
            <div class="carousel-item w-full">
                <img src="{{ asset('img/4.png') }}" class="w-full h-[520px] brightness-50 object-cover object-top" alt="Image 1">
            </div>
            <div class="carousel-item w-full">
                <img src="{{ asset('img/bg-1.jpg') }}" class="w-full h-[520px] brightness-50 object-cover object-top" alt="Image 2">
            </div>
        </div>
        <div class="absolute inset-0">
            <div class="max-w-7xl mx-auto pt-28 space-y-8 px-6">
                <div class="w-full md:w-2/3 space-y-4">
                    <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">La qualité est notre priorité</h2>
                    <p class="text-gray-100 font-medium leading-relaxed text-lg">Nous nous engageons à vous fournir des véhicules fiables et des pièces automobiles de haute qualité. Chaque produit est soigneusement sélectionné pour garantir votre satisfaction et votre sécurité sur la route.</p>
                </div>
                <div class="flex items-center gap-x-6">
                    <a href="#" class="hover-btn bg-purple-600 text-white px-8 py-3 rounded-lg shadow">Découvrir</a>
                    <a href="#" class="hover-btn text-gray-950 bg-slate-100 px-8 py-3 rounded-lg shadow border border-gray-200">Voir les offres</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Meilleurs Produits -->
    <section class="max-w-7xl mx-auto pt-28 px-6">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Nos Meilleurs Produits</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Découvrez notre sélection de véhicules neufs et d'occasion, ainsi que de pièces détachées, conçues pour répondre à tous vos besoins en matière de transport et d'entretien automobile.</p>
        </div>

        <!-- Barre de filtre par catégories -->
        <div class="flex justify-center space-x-4 my-8">
            <button class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all" onclick="filterCategory('all')">Tous</button>
            <button class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all" onclick="filterCategory('neuf')">Véhicules Neufs</button>
            <button class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all" onclick="filterCategory('occasion')">Véhicules d'Occasion</button>
            <button class="filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition-all" onclick="filterCategory('pieces')">Pièces Détachées</button>
        </div>

        <!-- Produits avec filtre -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-12">
            @foreach($products as $product)
            <div class="relative transform transition-transform hover:scale-105 shadow-lg rounded-lg border border-gray-200 overflow-hidden product-item" data-category="{{ $product->category }}">
                <div class="relative w-full" style="padding-bottom: 75%;">
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover object-center transition-transform duration-500 hover:scale-110" alt="Image du produit {{ $product->title }}">
                </div>

                @if($product->discount)
                <span class="absolute top-4 left-4 bg-red-600 px-4 py-2 rounded-lg text-sm text-white font-bold">-{{ $product->discount }}%</span>
                @endif

                <div class="p-4 flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        @if($product->isNew)
                        <span class="bg-purple-600 px-4 py-1 rounded-lg text-sm text-white font-bold">Nouveau</span>
                        @endif
                        <a href="{{ route('show-product', $product->id) }}" class="text-gray-900 font-bold text-lg">{{ $product->title }}</a>
                    </div>

                    <div class="flex items-center space-x-1">
                        <span class="text-yellow-500">
                            ★★★★☆
                        </span>
                        <span class="text-gray-500 text-sm">(15 avis)</span>
                    </div>

                    <span class="text-gray-900 text-lg font-bold">$ {{ $product->price }}</span>

                    <div class="w-full">
                        <a href="{{ route('show-product', $product->id) }}" class="bg-purple-600 text-white px-6 py-2 w-full text-center hover:bg-purple-700 transition-colors duration-300 ease-out font-semibold rounded-lg">Payer maintenant</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Bouton Voir Tous les Produits -->
        <div class="pt-16 text-center">
            <a href="#" class="flex items-center justify-center gap-x-2">
                <span class="text-sm font-medium text-gray-600">Voir Tous les Produits</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Section promotionnelle pour pièces de véhicules -->
    <section class="max-w-7xl mx-auto pt-28 px-6">
        <div class="flex flex-col md:flex-row items-center gap-x-8">
            <img src="{{ asset('img/4.jpg') }}" class="w-full md:w-1/2 h-full rounded-xl border border-gray-200 parallax" alt="">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold leading-tight tracking-tight">Des pièces de véhicules de qualité à découvrir</h3>
                <p class="text-gray-600 text-base leading-relaxed">Explorez notre gamme de pièces de rechange de haute qualité pour tous types de véhicules. Que vous soyez un professionnel ou un particulier, nous avons les pièces qu'il vous faut pour un entretien optimal de votre véhicule.</p>
                <ul class="flex flex-col space-y-3">
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9V5.25a2.25 2.25 0 0 1 4.5 0V9" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 9.75H19.5M7.5 19.5v-4.5a2.25 2.25 0 0 1 4.5 0v4.5" />
                        </svg>
                        <span class="text-gray-700">Pièces détachées pour tous types de véhicules</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 15.75v-7.5a1.5 1.5 0 0 1 3 0v7.5" />
                        </svg>
                        <span class="text-gray-700">Produits d'origine certifiés</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V2.25m0 17.25V18" />
                        </svg>
                        <span class="text-gray-700">Prix compétitifs et livraison rapide</span>
                    </li>
                </ul>
                <a href="#" class="bg-purple-600 text-white px-6 py-3 hover:bg-purple-700 transition-all duration-300 ease-out font-semibold rounded-lg">Voir nos Pièces</a>
            </div>
        </div>
    </section>
</div>
<script>
    // Filtrage des catégories
    function filterCategory(category) {
        let products = document.querySelectorAll('.product-item');
        products.forEach(product => {
            product.style.display = 'block';
            if (category !== 'all' && product.getAttribute('data-category') !== category) {
                product.style.display = 'none';
            }
        });
    }
</script>

<script>
    let currentIndex = 0;
    const carouselItems = document.querySelectorAll('.carousel-item');
    const totalItems = carouselItems.length;

    function showCarouselItem(index) {
        // Masquer tous les éléments
        carouselItems.forEach(item => {
            item.style.display = 'none';
        });

        // Afficher l'élément actuel
        carouselItems[index].style.display = 'block';
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        showCarouselItem(currentIndex);
    }

    function previousSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showCarouselItem(currentIndex);
    }

    // Initialiser le carrousel en affichant le premier élément
    showCarouselItem(currentIndex);

    // Lancer un intervalle pour faire défiler automatiquement le carrousel toutes les 5 secondes
    setInterval(nextSlide, 5000);
</script>
