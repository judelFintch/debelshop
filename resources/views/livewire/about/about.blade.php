<div>
    <!-- Alerte de maintenance -->
    <div class="bg-yellow-500 text-black text-center py-3 shadow-lg relative">
        <p class="font-medium">🔧 Une maintenance et des travaux de mise à niveau sont en cours sur le site. Merci de votre patience !</p>
        <button class="absolute top-2 right-4 text-black" onclick="this.parentElement.style.display='none'">✖</button>
    </div>

    <!-- Section d'introduction avec une image de fond -->
    <section>
        <div class="relative">
            <img src="{{ asset('img/4.png') }}" class="w-full h-[520px] brightness-50 object-cover object-top" alt="">
            <div class="absolute inset-0">
                <div class="max-w-5xl mx-auto pt-28 space-y-8 px-4">
                    <div class="w-full md:w-1/2 space-y-4">
                        <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">À propos de Debelshop</h2>
                        <p class="text-gray-100 font-medium leading-relaxed text-base">Chez Debelshop, nous mettons un point d'honneur à offrir des véhicules neufs et d'occasion de haute qualité, ainsi qu'une large gamme de pièces de rechange pour tous types de véhicules.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Notre Histoire -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Notre Histoire</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Debelshop est née d'une passion pour l'automobile. Depuis notre création, nous avons bâti notre réputation sur la confiance, la transparence et la qualité des produits que nous offrons à nos clients. Nous avons pour mission de simplifier l'achat et l'entretien de véhicules en vous offrant des solutions adaptées à vos besoins.</p>
        </div>
    </section>

    <!-- Section Ce que nous faisons -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <img src="{{ asset('img/5.jpg') }}" class="w-full md:w-1/2 h-full rounded-xl border border-gray-200 object-cover" alt="Vente de véhicules et pièces détachées">
            <div class="space-y-6">
                <h3 class="text-3xl font-bold leading-tight tracking-tight">Ce que nous faisons</h3>
                <p class="text-gray-600 text-base leading-relaxed">Chez Debelshop, nous vous proposons une vaste gamme de véhicules neufs et d'occasion, soigneusement sélectionnés pour répondre à vos attentes en termes de performance et de budget. Nous offrons également un large choix de pièces de rechange pour garantir la longévité et la performance de votre véhicule.</p>
                <ul class="flex flex-col space-y-3">
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Vente de véhicules neufs</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Vente de véhicules d'occasion</span>
                    </li>
                    <li class="text-base flex items-center pl-2 gap-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Pièces de rechange pour tous types de véhicules</span>
                    </li>
                </ul>
                <div class="w-full md:w-auto">
                    <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-lg shadow hover:bg-purple-700">Découvrez nos produits</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nos Valeurs -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Nos Valeurs</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Chez Debelshop, nous croyons en des valeurs fortes : la qualité, la transparence, et l'engagement envers nos clients. Nous nous efforçons chaque jour de vous offrir les meilleurs produits, ainsi qu'un service client exceptionnel.</p>
        </div>
    </section>

    <!-- Section d'appel à l'action -->
    <section class="mx-auto max-w-5xl relative pt-28 pb-16 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Vous souhaitez en savoir plus ?</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">N'hésitez pas à nous contacter pour toute question concernant nos produits ou services. Nous sommes là pour vous accompagner dans votre projet automobile.</p>
            <div>
                <a href="#" class="bg-purple-600 text-white px-8 py-3 rounded-lg shadow hover:bg-purple-700">Contactez-nous</a>
            </div>
        </div>
    </section>
</div>
