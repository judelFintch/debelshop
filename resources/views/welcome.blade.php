<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <header class="mx-auto max-w-5xl">
        <nav class="flex items-center justify-between py-8">
            <a href="" class="text-lg font-semibold">
                Debel<span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-700">Shop</span>
            </a>
            <div>
                <ul class="flex items-center gap-x-8">
                    <li><a href="#" class="text-gray-600 text-base">Accueil</a></li>
                    <li><a href="#" class="text-gray-600 text-base">Produit</a></li>
                    <li><a href="#" class="text-gray-600 text-base">Promotion</a></li>
                    <li><a href="#" class="text-gray-600 text-base">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="mx-auto max-w-5xl relative">
        <img
            src="{{ asset('img/banner.jpg') }}"
            alt="images de banner"
            class="w-full h-96 object-cover rounded-lg border border-gray-200 brightness-50"
        >
        <div class="absolute inset-0 py-16 mx-auto max-w-2xl">
            <h1 class="text-7xl font-bold tracking-tight mt-8 text-white text-center">
                Découvrez notre <span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-800">collection</span>
             </h1>
        </div>
    </div>

    <section id="vehicule" class="mx-auto max-w-5xl py-20">
        <div class="py-6 pb-10">
            <h1 class="text-6xl font-bold leading-tight tracking-tight">Nos vehicules</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            <a href="#">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">7500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <a href="#">
                <img src="{{ asset('img/2.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">11500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <a href="#">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">5500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <a href="#">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">7500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <a href="#">
                <img src="{{ asset('img/2.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">11500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
            <a href="#">
                <img src="{{ asset('img/1.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                <div class="flex items-center justify-between pt-4">
                    <h2 class="text-lg font-semibold">Vehicule de luxe</h2>
                    <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">5500 $</span>
                </div>
                <p class="text-gray-600 text-sm justify-around">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </a>
        </div>
    </section>
    <footer class="mx-auto max-w-5xl py-20">
        <div>

        </div>
    </footer>
</body>
</html>
