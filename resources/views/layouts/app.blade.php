<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DebelShop Test</title>
   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   
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




<style>
        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            display: none; /* Hidden by default */
            max-width: 300px; /* Adjust the width as needed */
            padding: 12px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Display the SweetAlert2 notification only once per session
            if (!sessionStorage.getItem('alertShown')) {
                Swal.fire({
                    title: 'Attention',
                    text: 'This site is just a test module and is not the official site. You may encounter technical errors or incomplete features.',
                    confirmButtonText: 'I understand',
                    background: '#f9fafb',
                    customClass: {
                        popup: 'rounded-lg shadow-lg'
                    }
                }).then(() => {
                    // Mark the alert as shown
                    sessionStorage.setItem('alertShown', 'true');
                });
            }

            // Display the temporary notification
            const notification = document.getElementById('temp-notification');
            notification.style.display = 'block';
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 1000); // Delay to match opacity transition
            }, 10000); // Display for 5 seconds
        });
    </script>

{{ $slot }}

 <!-- Temporary Notification -->
 <div id="temp-notification" class="notification bg-red-500 text-white p-4 rounded-lg shadow-lg transition-opacity duration-1000">
        <p class="text-base">This site is just a test module and is not the official site. You may encounter technical errors or incomplete features..</p>
    </div>

<footer class="mx-auto max-w-5xl py-20">
    <div>
    <footer class="bg-gray-800 text-white py-6 mt-8">
    <div class="max-w-5xl mx-auto text-center">
        <p class="text-sm">&copy; 2024 DebelShop. Tous droits réservés.</p>
        <p class="text-sm mt-2">Ce site n'est qu'un module de test et n'est pas le site officiel. Vous pourriez rencontrer des erreurs techniques ou des fonctionnalités incomplètes..<br>
        This site is just a test module and is not the official site. You may encounter technical errors or incomplete features.</p>
    </div>
</footer>


    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>
