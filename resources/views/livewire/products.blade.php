<div>
    <!-- Alerte de maintenance -->
    <div class="bg-yellow-500 text-black text-center py-3 shadow-lg relative">
        <p class="font-medium">🔧 Une maintenance et des travaux de mise à niveau sont en cours sur le site. Merci de votre patience !</p>
        <button class="absolute top-2 right-4 text-black" onclick="this.parentElement.style.display='none'">✖</button>
    </div>

    <!-- Section d'introduction avec une image de fond -->
    <section>
        <div class="relative">
            <img src="{{ asset('img/4.png') }}" class="w-full h-[520px] backdrop-blur-lg brightness-50 object-cover object-top" alt="">
            <div class="absolute inset-0">
                <div class="max-w-5xl mx-auto pt-28 space-y-8 px-4">
                    <div class="w-full md:w-1/2 space-y-4">
                        <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">La qualité est notre priorité</h2>
                        <p class="text-gray-100 font-medium leading-relaxed text-base">Nous nous engageons à vous fournir des véhicules fiables et des pièces automobiles de haute qualité. Chaque produit est soigneusement sélectionné pour garantir votre satisfaction et votre sécurité sur la route.</p>
                    </div>
                    <div class="flex items-center gap-x-6">
                        <a href="#" class="hover-btn bg-purple-600 text-white px-8 py-3 rounded-lg shadow">Découvrir</a>
                        <a href="#" class="hover-btn text-gray-950 bg-slate-100 px-8 py-3 rounded-lg shadow border border-gray-200">Voir les offres</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section des meilleurs produits -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Nos Meilleurs Produits</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Découvrez notre sélection de véhicules neufs et d'occasion, ainsi que de pièces détachées, conçues pour répondre à tous vos besoins en matière de transport et d'entretien automobile.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pt-16">
            @foreach($products as $product)
                <div class="relative transform transition-transform hover:scale-105">
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="h-[400px] object-cover object-center rounded-xl shadow-sm border border-gray-200" alt="">
                    <div class="absolute inset-0 p-4 flex flex-col justify-between">
                        <div>
                            <span class="bg-red-600 px-4 py-2 rounded-lg text-sm text-white font-bold">30% OFF</span>
                        </div>
                        <div class="p-4 rounded-lg bg-gray-600/40 w-full backdrop-blur-lg space-y-2">
                            <div class="flex flex-col">
                                <a wire:navigate href="{{ route('show-product', $product->id) }}" class="text-white font-bold text-base leading-loose">{{ $product->title }}</a>
                                <div class="flex items-center justify-between">
                                    <span class="text-white text-sm font-bold">$ {{ $product->price }}</span>
                                    <a wire:navigate href="{{ route('show-product', $product->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-medium hover:text-purple-400 transition-colors duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="w-full flex justify-center">
                                <a wire:navigate href="{{ route('show-product', $product->id) }}" class="bg-white border border-purple-600 shadow px-6 py-2 w-full text-center hover:bg-purple-600 hover:text-white transition-colors duration-300 ease-out text-purple-600 font-semibold rounded-xl">
                                    Payer maintenant
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pt-16">
            <a href="#" class="flex items-center justify-center gap-x-2">
                <span class="text-sm font-medium text-gray-600">Voir Tous les Produits</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Section promotionnelle pour pièces de véhicules -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="flex flex-col md:flex-row items-center gap-x-8">
            <img src="{{ asset('img/vehicle-parts.jpg') }}" class="w-full md:w-1/2 h-full rounded-xl border border-gray-200 parallax" alt="">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold leading-tight tracking-tight">Des pièces de véhicules de qualité à découvrir</h3>
                <p class="text-gray-600 text-base leading-relaxed">Explorez notre gamme de pièces de rechange de haute qualité pour tous types de véhicules. Que vous soyez un professionnel ou un particulier, nous avons les pièces qu'il vous faut pour un entretien optimal de votre véhicule.</p>
                <ul class="flex flex-col space-y-3">
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Des pièces certifiées et garanties</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Livraison rapide et fiable</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Assistance technique 24/7</span>
                    </li>
                </ul>
                <div class="w-full md:w-auto">
                    <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-lg shadow hover:bg-purple-700">Voir les Pièces</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Contactez-Nous</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Si vous avez des questions ou des besoins spécifiques, n'hésitez pas à nous contacter. Nous sommes à votre disposition pour vous aider et vous conseiller.</p>
        </div>
        <div class="pt-16">
            <form class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Nom</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>
                <div>
                    <label for="message" class="block text-gray-700 font-medium">Message</label>
                    <textarea id="message" rows="4" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>
                <button type="submit" class="bg-purple-600 text-white px-6 py-3 rounded-lg shadow hover:bg-purple-700">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- CSS for hover effects and animations -->
<style>
    .hover-btn {
        transition: transform 0.3s ease, background-color 0.3s ease;
    }
    .hover-btn:hover {
        transform: translateY(-5px);
        background-color: #6a0dad;
    }
    .parallax {
        background-attachment: fixed;
    }
</style>
</div>


