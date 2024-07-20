<div>
<div class="mx-auto max-w-5xl relative">
    <img src="{{ asset('img/banner.jpg') }}" alt="images de banner" class="w-full h-96 object-cover rounded-lg border border-gray-200 brightness-50">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-4xl md:text-7xl font-bold tracking-tight text-white text-center">
            Découvrez notre <span class="bg-transparent bg-clip-text bg-gradient-to-tr from-blue-600 to-blue-800">collection</span>
        </h1>
    </div>
</div>

<section id="vehicule" class="mx-auto max-w-5xl py-20 px-4">
    <div class="py-6 pb-10 text-center">
        <h1 class="text-3xl md:text-6xl font-bold leading-tight tracking-tight">Nos Produits</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                <a href="{{ route('show-product', $product->id) }}" class="block">
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="w-full h-48 object-cover rounded-lg" alt="Support d'ordinateur {{ $product->id }}">
                    <div class="mt-4">
                        <h2 class="text-lg font-semibold">Support d'ordinateur {{ $product->id }}</h2>
                        <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">{{ $product->price }} $</span>
                    </div>
                    <p class="text-gray-600 text-sm mt-2">
                        Optez pour ce support d'ordinateur portable et transformez votre espace de travail en un environnement ergonomique et productif.
                    </p>
                </a>
                <a href="{{ route('show-product', $product->id) }}" class="block">
                    <button class="mt-4 w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">Payer</button>
                </a>
            </div>
        @endforeach
    </div>
</section>

</div>