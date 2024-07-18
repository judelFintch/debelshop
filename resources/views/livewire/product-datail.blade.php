<div>
    <div class="mx-auto max-w-5xl">
        <div class="flex items-start gap-x-8">
            <img src="{{ $product->image }}" alt=" {{ $product->title }}">
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-3xl font-bold uppercase">{{ $product->title }}</h2>
                    <span class="bg-blue-800 text-white px-2 py-1 rounded-full font-bold">{{ $product->price }} $</span>
                </div>

                <p class="text-base text-gray-600 leading-tight tracking-tight">{{ $product->description }}</p>

                <form method="post" action="{{ route('process') }}">
                    @csrf
                    <div class="space-y-1">
                        <label for="merchant" class="text-gray-600 font-bold">Marchant</label>
                        <input type="text" class="w-full border border-gray-200 px-4 py-2 rounded" placeholder="Marchant" wire:model="merchant" name="merchant" id="merchant">
                    </div>
                    <div class="space-y-1">
                        <label for="reference" class="text-gray-600 font-bold">Reference</label>
                        <input type="text" class="w-full border border-gray-200 px-4 py-2 rounded" placeholder="reference" wire:model="reference" name="reference" id="reference">
                    </div>
                    <div class="space-y-1">
                        <label for="amount" class="text-gray-600 font-bold">Prix</label>
                        <input type="text" class="w-full border border-gray-200 px-4 py-2 rounded" wire:model="amount" value="{{ $product->price }}" placeholder="prix" name="amount" id="amount">
                    </div>
                    <div class="space-y-1">
                        <label for="currency" class="text-gray-600 font-bold">Devise</label>
                        <select name="currency" id="currency" wire:model="currency" class="w-full border border-gray-200 px-4 py-2 rounded">
                            <option>Selectionner la devise</option>
                            <option value="USD">USD</option>
                        </select>
                    </div>
                    <button class="w-full bg-blue-800 px-4 py-2 mt-4 text-white rounded-full text-lg font-bold" type="submit">Payer</button>
                </form>
            </div>

        </div>
    </div>
</div>
