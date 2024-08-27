<div>
    <div class="mx-auto max-w-5xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4">
            <div class="relative">
                <img src="{{ asset('img/banner.jpg') }}" class="h-[400px] object-cover object-center rounded-lg" alt="">
                <div class="absolute inset-0 p-4 flex items-end">
                    <div class="p-4 rounded-lg bg-gray-600/40 w-full backdrop-blur-lg space-y-1">
                        <div class="flex items-center justify-between">
                            <h1 class="text-white font-bold text-base leading-loose">Macbook Air M2</h1>
                            <span class="text-white font-bold text-base leading-loose">900$</span>
                        </div>

                        <p class="text-gray-100 font-medium leading-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores fuga harum</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('img/banner.jpg') }}" class="h-[400px] object-cover object-center rounded-lg" alt="">
                <div class="absolute inset-0 top-0 left-0 p-4">
                    <h1 class="text-white font-bold text-base leading-loose">Macbook Air M2</h1>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('img/banner.jpg') }}" class="h-[400px] object-cover object-center rounded-lg" alt="">
                <div class="absolute inset-0 top-0 left-0 p-4">
                    <h1 class="text-white font-bold text-base leading-loose">Macbook Air M2</h1>
                </div>
            </div>
        </div>
    </div>

    <section id="vehicule" class="mx-auto max-w-5xl py-20">
        <div class="py-6 pb-10">
            <h1 class="text-6xl font-bold leading-tight tracking-tight">Nos vehicules</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            @foreach($products as $product)
                <a href="{{ route('show-product', $product->id) }}" wire:navigate>
                    <img src="{{ $product->image  }}" class="rounded-lg hover:brightness-50 transition-all ease-in-out duration-300" alt="">
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
