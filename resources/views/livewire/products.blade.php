<div>
    <section>
        <div class="relative">
            <img src="{{ asset('img/Apple-iPhone-15.jpg') }}" class="w-full h-[520px] backdrop-blur-lg brightness-50 object-cover object-top" alt="">
            <div class="absolute inset-0">
                <div class="max-w-5xl mx-auto pt-28 space-y-8 px-4">
                    <div class="w-full md:w-1/2 space-y-4">
                        <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">La qualité est notre priorité</h2>
                        <p class="text-gray-100 font-medium leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur debitis distinctio, dolorem expedita fugit neque nostrum obcaecati possimus.</p>
                    </div>
                    <div class="flex items-center gap-x-6">
                        <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-lg shadow">Découvrir</a>
                        <a href="#" class="text-gray-950 bg-slate-100 px-8 py-3 rounded-lg shadow border border-gray-200">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Nos Meilleurs Produits</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto autem cum distinctio, explicabo id in natus obcaecati.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pt-16">
            @foreach($products as $product)
                <div class="relative">
                    <img src="{{ asset('img/banner.jpg') }}" class="h-[400px] object-cover object-center rounded-xl shadow-sm border border-gray-200" alt="">
                    <div class="absolute inset-0 p-4 flex flex-col justify-between">
                        <div>
                            <span class="bg-red-400 px-4 py-2 rounded-lg backdrop-blur-lg text-sm text-white">30% OFF</span>
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

    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="flex flex-col md:flex-row items-center gap-x-8">
            <img src="{{ asset('img/google-pixel-9.jpg') }}" class="w-full md:w-1/2 h-full rounded-xl border border-gray-200" alt="">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold leading-tight tracking-tight">Des téléphones de qualité à découvrir</h3>
                <p class="text-gray-600 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem provident, vitae.
                </p>
                <ul class="flex flex-col space-y-3">
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Un meilleur rapport qualité/prix</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Livraison rapide</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Paiement par monnaie électronique</span>
                    </li>
                </ul>
                <div class="flex group">
                    <a href="#" class="flex items-center border border-gray-400 bg-white group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 px-8 gap-x-2 py-3 rounded-lg shadow">
                        <span class="text-sm font-medium">Shop The Collection</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Nos Meilleurs Produits</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto autem cum distinctio, explicabo id in natus obcaecati.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pt-16">
            @foreach($products as $product)
                <div class="relative">
                    <img src="{{ asset('img/banner.jpg') }}" class="h-[300px] object-cover object-center rounded-xl shadow-sm border border-gray-200" alt="">
                    <a href="#" class="absolute inset-0 flex justify-end px-4 py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </a>
                    <div class="relative space-y-4">
                        <div class="text-center">
                            <h3 class="font-semibold text-xl leading-loose">{{ $product->title }}</h3>
                            <span class="font-medium text-lg">$ {{ $product->price }}</span>
                        </div>
                        <div class="w-full flex justify-center">
                            <a wire:navigate href="{{ route('show-product', $product->id) }}" class="bg-white border border-purple-600 shadow px-6 py-2 w-full text-center hover:bg-purple-600 hover:text-white transition-colors duration-300 ease-out text-purple-600 font-semibold rounded-xl">
                                Payer maintenant
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
