<div>
    <div class="mx-auto max-w-lg py-20">
        <div class="flex flex-col items-center justify-center space-y-3">
            <div class="border-b-2 border-dashed border-gray-200 pb-8">
                <div class="flex flex-col justify-center items-center space-y-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-20 text-3xl text-red-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>
                    <p class="text-gray-600 text-lg font-semibold">{{ $request['status'] }}</p>
                </div>

                <div class="text-center space-y-2">
                    <h1 class="text-2xl font-bold text-gray-800 mt-4">Ops. Votre paiement a echouer</h1>
                </div>
            </div>

            <div class="space-y-6 pt-2">
                <p class="text-sm text-center leading-loose text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                </p>
                <div class="flex items-center justify-center gap-x-4">
                    <a wire:navigate href="{{ route('products') }}" class="px-6 py-2 bg-purple-600 text-white font-bold rounded-lg shadow-sm hover:bg-purple-700 transition-colors duration-300 ease-in">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>
