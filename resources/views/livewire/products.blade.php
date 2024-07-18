<div>
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
            @foreach($products as $product)
                <a href="{{ route('show-product', $product->id) }}" wire:navigate>
                    <img src="{{ asset('img/' . $product->id . '.jpg') }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
                    <div class="flex items-center justify-between pt-4">
                        <h2 class="text-lg font-semibold">{{ $product->title }}</h2>
                        <span class="bg-blue-200 rounded-full font-black text-base px-2 py-0.5">{{ $product->price }} $</span>
                    </div>
                    <p class="text-gray-600 text-sm justify-around">
                        {{ $product->description }}
                    </p>
                </a>
            @endforeach
        </div>
    </section>
</div>
