<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>

    <!-- Fonts -->
    <title>DebelShop Test</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="{{ asset('stylesheet" href="admin/assets/css/theme.css?ver=3.1.2') }}">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center font-bold text-xl">
                {{ config('app.name', 'Laravel') }}
            </div>
            <nav class="flex-grow">
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}" class="block p-4 hover:bg-gray-700">Dashboard</a>
                    </li>
                    <!-- Ajoutez d'autres liens de navigation ici -->
                    <li>
                        <a href="" class="block p-4 hover:bg-gray-700">Profile</a>
                    </li>
                    <!-- Logout -->
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block w-full p-4 text-left hover:bg-gray-700">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6">
            <!-- Dashboard content -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                {{ $slot }} <!-- Le contenu de la page spécifique sera injecté ici -->
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/chart-ecommerce.js?ver=3.1.2') }}">
</body>
</html>
