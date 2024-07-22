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
                <div class="mt-4">
                    <label for="quantity-{{ $product->id }}" class="block text-sm font-medium text-gray-700">Quantité</label>
                    <input type="number" id="quantity-{{ $product->id }}" name="quantity" min="1" value="1" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm quantity-input" data-price="{{ $product->price }}" data-product-id="{{ $product->id }}">
                </div>
                <div class="mt-2">
                    <span class="text-gray-700">Total: </span>
                    <span id="total-{{ $product->id }}" class="text-gray-700 font-semibold">{{ $product->price }} $</span>
                </div>
                <a href="{{ route('show-product', $product->id) }}" id="pay-button-{{ $product->id }}" class="block pay-button">
                    <button class="mt-4 w-full py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">Payer</button>
                </a>
            </div>
        @endforeach
    </div>
</section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInputs = document.querySelectorAll('.quantity-input');

        quantityInputs.forEach(input => {
            input.addEventListener('input', function() {
                const price = parseFloat(this.dataset.price);
                const quantity = parseInt(this.value);
                const total = (price * quantity).toFixed(2);
                const totalElement = document.getElementById('total-' + this.id.split('-')[1]);
                totalElement.textContent = total + ' $';
                
                // Update the pay button link with the new total
                const payButton = document.getElementById('pay-button-' + this.id.split('-')[1]);
                const productId = this.id.split('-')[1];
                const url = new URL(payButton.href);
                url.searchParams.set('quantity', quantity);
                url.searchParams.set('total', total);
                payButton.href = url.toString();
            });
        });
    });
</script>
