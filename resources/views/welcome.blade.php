<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js"></script>
</head>
<body class="antialiased">

    <header class="mx-auto max-w-5xl px-4 md:px-6">
        <nav class="flex items-center justify-between py-6">
            <a href="" class="text-xl font-semibold">
                Debel<span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-700">Shop</span>
            </a>
            <div class="hidden md:flex">
                <ul class="flex items-center gap-x-6">
                    <li><a href="#" class="text-gray-600 text-sm md:text-base">Accueil</a></li>
                    <li><a href="#" class="text-gray-600 text-sm md:text-base">Produit</a></li>
                    <li><a href="#" class="text-gray-600 text-sm md:text-base">Promotion</a></li>
                    <li><a href="#" class="text-gray-600 text-sm md:text-base">Contact</a></li>
                </ul>
            </div>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white">
            <ul class="flex flex-col gap-y-4 p-4">
                <li><a href="#" class="text-gray-600 text-sm">Accueil</a></li>
                <li><a href="#" class="text-gray-600 text-sm">Produit</a></li>
                <li><a href="#" class="text-gray-600 text-sm">Promotion</a></li>
                <li><a href="#" class="text-gray-600 text-sm">Contact</a></li>
            </ul>
        </div>
    </header>

    <div class="mx-auto max-w-5xl relative px-4 md:px-6">
        <img
            src="{{ asset('img/banner.jpg') }}"
            alt="images de banner"
            class="w-full h-64 md:h-96 object-cover rounded-lg border border-gray-200 brightness-50"
        >
        <div class="absolute inset-0 py-10 md:py-16 flex items-center justify-center">
            <h1 class="text-3xl md:text-5xl lg:text-7xl font-bold tracking-tight text-white text-center">
                Découvrez notre <span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-800">collection</span>
            </h1>
        </div>
    </div>

    <section id="vehicule" class="mx-auto max-w-5xl py-12 md:py-20 px-4 md:px-6">
        <div class="pb-8">
            <h1 class="text-3xl md:text-5xl font-bold leading-tight tracking-tight">Nos vehicules</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Vehicle 1 -->
            <a href="#" class="block">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300 w-full" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">7500 $</span>
                </div>
                <p class="text-gray-600 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <!-- Vehicle 2 -->
            <a href="#" class="block">
                <img src="{{ asset('img/2.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300 w-full" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">11500 $</span>
                </div>
                <p class="text-gray-600 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <!-- Vehicle 3 -->
            <a href="#" class="block">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300 w-full" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">5500 $</span>
                </div>
                <p class="text-gray-600 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <!-- Repeat other vehicles similarly -->
        </div>
    </section>
    
    <footer class="mx-auto max-w-5xl py-12 md:py-20 px-4 md:px-6">
        <div>
            <!-- Footer Content -->
        </div>
    </footer>

    <script>
        // Toggle Mobile Menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
