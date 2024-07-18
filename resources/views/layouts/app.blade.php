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
        <a href="{{ route('products') }}" class="text-lg font-semibold">
            Debel<span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-700">Shop</span>
        </a>
        <div>
            <ul class="flex items-center gap-x-8">
                <li><a href="{{ route('products') }}" class="text-gray-600 text-base">Accueil</a></li>
                <li><a href="#" class="text-gray-600 text-base">Produit</a></li>
                <li><a href="#" class="text-gray-600 text-base">Promotion</a></li>
                <li><a href="#" class="text-gray-600 text-base">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

{{ $slot }}

<footer class="mx-auto max-w-5xl py-20">
    <div>

    </div>
</footer>
</body>
</html>
