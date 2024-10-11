<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    
</head>
<body class="antialiased bg-gray-50 font-roboto" x-data="{ menuOpen: false }">
<style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            opacity: 0.9;
            transition: opacity 0.3s ease;
        }
    </style>

<header class="mx-auto max-w-5xl px-4 md:px-6">
    <nav class="py-4 md:py-6">
        <div class="flex items-center justify-between border border-gray-200 bg-white px-4 py-3 rounded-xl shadow-sm">
            <a wire:navigate class="text-lg font-bold leading-snug tracking-tight" href="{{ route('products') }}">Debel <span class="text-purple-700">Shop</span></a>

           
            <div class="hidden md:block text-gray-600">
                <span class="text-sm">info :+243 974 762 200</span>
            </div>

            <div class="md:hidden">
                <button @click="menuOpen = !menuOpen" class="focus:outline-none">
                    <svg x-show="!menuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="menuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <ul class="hidden md:flex items-center gap-x-4">
                <li><a  href="{{route('products')}}" class="text-sm font-bold text-purple-600 transition-colors duration-300 border-b-2 border-purple-400">Accueil</a></li>
                <li><a wire:navigate href="{{route('articles')}}" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">Articles</a></li>
                <li><a wire:navigate href="{{route('about')}}" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">A propos</a></li>
                <li><a wire:navigate href="{{route('contact')}}" class="text-sm font-bold text-gray-600 hover:text-purple-600 transition-colors duration-300 hover:border-b-2 hover:border-purple-400">Contact</a></li>
            </ul>

            <div class="hidden md:flex items-center gap-x-4">
                <a href="#" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </a>
                <a href="#" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </a>
            </div>
        </div>

        <div x-show="menuOpen" class="md:hidden mt-4 space-y-4">
            <ul class="flex flex-col items-center space-y-4">
                <li><a wire:navigate href="{{route('products')}}" class="text-sm font-bold text-purple-600">Accueil</a></li>
                <li><a wire:navigate href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600">Articles</a></li>
                <li><a wire:navigate href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600">A propos</a></li>
                <li><a wire:navigate href="#" class="text-sm font-bold text-gray-600 hover:text-purple-600">Contact</a></li>
            </ul>

            <div class="flex justify-center gap-x-4 pt-4">
                <a href="#" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                </a>
                <a href="#" wire:navigate>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 hover:text-purple-600 transition-colors duration-300 ease-in">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>

<div class="px-4 md:px-0">
    {{ $slot }}
</div>

<footer class="w-full bg-gray-100 py-8 px-4 mt-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between space-y-8 md:space-y-0 md:space-x-10">
        <div class="md:w-1/2 space-y-4">
            <a wire:navigate class="text-2xl font-bold leading-snug tracking-tight" href="{{ route('products') }}">
                Debel <span class="text-purple-700">Shop</span>
            </a>
            <p class="text-sm leading-tight tracking-tight text-gray-600">
                Nous nous engageons à vous fournir des véhicules fiables et des pièces automobiles de haute qualité. Chaque produit est soigneusement sélectionné pour garantir votre satisfaction et votre sécurité sur la route.
            </p>
        </div>

        <div class="flex flex-col md:flex-row md:space-x-10 space-y-6 md:space-y-0">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Découverte</h3>
                <ul class="space-y-1">
                    <li><a href="{{route('articles')}}" class="text-sm font-medium text-gray-600">Articles</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">Catégories</a></li>
                    <li><a href="{{route('about')}}" class="text-sm font-medium text-gray-600">À propos</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Soutien</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-sm font-medium text-gray-600">Support</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">Conditions</a></li>
                    <li><a href="#" class="text-sm font-medium text-gray-600">Confidentialité</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-gray-950 py-4 mt-8">
        <p class="text-sm text-gray-100 text-center">
            © {{ now()->format('Y') }} DebelShop. Tous droits réservés.
        </p>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

</body>
</html>
