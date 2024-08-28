<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 font-roboto">

<header class="mx-auto max-w-5xl">
    <nav class="py-6">
        <div class="flex items-center justify-between border border-gray-200 bg-white px-6 py-3 rounded-xl shadow-sm">
            <a class="text-lg font-bold leading-snug tracking-tight" href="{{ route('products') }}">Debel <span class="text-purple-700">Shop</span></a>
            <ul class="flex items-center gap-x-4">
                <li><a href="#" class="text-sm font-bold text-purple-600 transition-colors duration-300 border-b-2 border-purple-400">Accueil</a></li>
                <li><a href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">Articles</a></li>
                <li><a href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">A propos</a></li>
                <li><a href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">Contact</a></li>
            </ul>
            <div  class="flex items-center gap-x-4">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600 font-medium hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600 font-medium hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>

{{ $slot }}

<footer class="mx-auto max-w-5xl pt-32 pb-6 space-y-4">
    <div class="flex items-center justify-between">
        <div class="w-1/2 space-y-4">
            <a class="text-lg font-bold leading-snug tracking-tight" href="{{ route('products') }}">Debel <span class="text-purple-700">Shop</span></a>
            <p class="text-sm leading-tight tracking-tight text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur cumque delectus facilis ipsa maxime molestias optio voluptatum. </p>
        </div>
        <div class="flex items-center justify-end gap-x-20">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Decouverte</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-sm font-medium text-gray-600">Article</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">Categories</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">A propos</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Decouverte</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-sm font-medium text-gray-600">Article</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">Categories</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">A propos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-gray-950 py-1.5">
        <p class="text-sm text-gray-100 text-center">© {{ now()->format('Y') }} DebelShop. Tous droits réservés.</p>
    </div>
</footer>
</body>
</html>
