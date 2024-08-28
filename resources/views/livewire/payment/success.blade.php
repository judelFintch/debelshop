<div>
    <div class="mx-auto max-w-lg py-20">
        <div class="flex flex-col items-center justify-center space-y-3">
            <div class="border-b-2 border-dashed border-gray-200 pb-8">
                <div class="flex flex-col justify-center items-center space-y-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-3xl text-purple-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                    </svg>
                    <p class="text-gray-600 text-lg font-semibold">Incroyable</p>
                </div>

                <div class="text-center space-y-2">
                    <h1 class="text-2xl font-bold text-gray-800 mt-4">Feliciation. Paiement effectué avec succès</h1>
                    <p >
                        <span class="text-gray-500 uppercase text-sm font-semibold">Numero de Reference:</span>
                        <span class="text-lg font-bold text-gray-950">#{{ $request['reference'] }}</span>
                    </p>
                </div>
            </div>

            <div class="space-y-6 pt-2">
                <p class="text-sm text-center leading-loose text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </p>
                <div class="flex items-center justify-center gap-x-4">
                    <a wire:navigate href="{{ route('products') }}" class="px-6 py-2 bg-purple-600 text-white font-bold rounded-lg shadow-sm hover:bg-purple-700 transition-colors duration-300 ease-in">Retour à l'accueil</a>
                    <a wire:navigate href="{{ route('products') }}" class="px-6 py-2 border border-gray-200 bg-gray-200 text-gray-800 font-bold rounded-lg shadow-sm hover:bg-gray-300 transition-colors duration-300 ease-in">Voir mes commandes</a>
                </div>
            </div>
        </div>
    </div>
</div>
