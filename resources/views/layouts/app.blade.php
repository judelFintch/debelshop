<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>
<body>

<header class="mx-auto max-w-5xl">
<nav class="flex items-center justify-between py-8 px-4">
        <a href="{{ route('products') }}" class="text-lg font-semibold">
            Debel<span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-700">Shop</span>
        </a>
        <div class="flex items-center gap-x-8 md:hidden">
            <button onclick="toggleMenu()" class="text-gray-600 text-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex items-center gap-x-8">
            <ul class="flex items-center gap-x-8">
                <li><a href="{{ route('products') }}" class="text-gray-600 text-base">Accueil</a></li>
                <li><a href="#" class="text-gray-600 text-base">Produit</a></li>
                <li><a href="#" class="text-gray-600 text-base">Promotion</a></li>
                <li><a href="#" class="text-gray-600 text-base">Contact</a></li>
            </ul>
        </div>
        <div id="mobile-menu" class="absolute top-16 right-4 bg-white shadow-lg rounded-lg p-4 md:hidden hidden">
            <ul class="flex flex-col items-start gap-y-4">
                <li><a href="{{ route('products') }}" class="text-gray-600 text-base">Accueil</a></li>
                <li><a href="#" class="text-gray-600 text-base">Produit</a></li>
                <li><a href="#" class="text-gray-600 text-base">Promotion</a></li>
                <li><a href="#" class="text-gray-600 text-base">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
        document.addEventListener('DOMContentLoaded', (event) => {
            if (!sessionStorage.getItem('alertShown')) {
                Swal.fire({
                    title: 'Attention',
                    text: 'Ce site est fourni uniquement à titre de test et ne doit pas être considéré comme un site officiel.',
                    icon: 'warning',
                    confirmButtonText: 'J\'ai compris',
                    background: '#f9fafb',
                    customClass: {
                        popup: 'rounded-lg shadow-lg'
                    }
                }).then(() => {
                    // Mark the alert as shown
                    sessionStorage.setItem('alertShown', 'true');
                });
            }
        });
    </script>

{{ $slot }}



<footer class="mx-auto max-w-5xl py-20">
    <div>
    <footer class="bg-gray-800 text-white py-6 mt-8">
    <div class="max-w-5xl mx-auto text-center">
        <p class="text-sm">&copy; 2024 DebelShop. Tous droits réservés.</p>
        <p class="text-sm mt-2">Ce site est fourni uniquement à titre de test et ne doit pas être considéré comme un site officiel.</p>
    </div>
</footer>


    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>
