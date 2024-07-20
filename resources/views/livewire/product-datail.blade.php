<div>
<div class="mx-auto max-w-5xl p-4">
    <div class="flex flex-col md:flex-row items-start gap-8">
        <img src="{{ asset('img/' . $product->id . '.jpg') }}" alt="{{ $product->title }}" class="w-full md:w-1/2 rounded-lg shadow-lg">
        <div class="space-y-6 w-full md:w-1/2">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-bold uppercase">{{ $product->title }}</h2>
                <span class="bg-blue-800 text-white px-4 py-2 rounded-full font-bold text-xl">{{ $product->price }} $</span>
            </div>
            <div class="text-gray-700 leading-relaxed">
                <p>{{ $product->description }}</p>
            </div>
            <form method="post" action="{{ route('process') }}" class="space-y-4">
                @csrf
                <div class="space-y-2">
                    <label for="merchant" class="text-gray-600 font-bold">Marchant</label>
                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="Nom du Marchant" wire:model="merchant" name="merchant" id="merchant">
                </div>
                <div class="space-y-2">
                    <label for="reference" class="text-gray-600 font-bold">Référence</label>
                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-lg" placeholder="Référence" wire:model="reference" name="reference" id="reference">
                </div>
                <div class="space-y-2">
                    <label for="amount" class="text-gray-600 font-bold">Prix</label>
                    <input type="text" class="w-full border border-gray-300 px-4 py-2 rounded-lg" wire:model="amount" value="{{ $product->price }}" placeholder="Prix" name="amount" id="amount">
                </div>
                <div class="space-y-2">
                    <label for="currency" class="text-gray-600 font-bold">Devise</label>
                    <select name="currency" id="currency" wire:model="currency" class="w-full border border-gray-300 px-4 py-2 rounded-lg">
                        
                        <option value="USD">USD</option>
                    </select>
                </div>
                <button class="w-full bg-blue-800 px-4 py-2 mt-4 text-white rounded-full text-lg font-bold hover:bg-blue-700 transition duration-300" type="submit">Payer</button>
            </form>
        </div>
    </div>
</div>
</div>