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
                        <h2 class="text-6xl font-bold tracking-tight text-white leading-tight">La qualité est notre priorité</h2>
                        <p class="text-gray-100 font-medium leading-relaxed text-base">Nous nous engageons à vous fournir des véhicules fiables et des pièces automobiles de haute qualité. Chaque produit est soigneusement sélectionné pour garantir votre satisfaction et votre sécurité sur la route.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <section class="mx-auto max-w-5xl relative pt-28 px-4">
        <div class="text-center space-y-6">
            <h3 class="text-4xl font-extrabold leading-tight tracking-tight">Contactez-nous</h3>
            <p class="font-medium text-gray-600 text-lg leading-relaxed mx-auto w-full md:w-[600px]">Vous avez une question ou besoin d'une assistance ? Contactez notre équipe de support disponible 24/7.</p>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-start gap-8 pt-16">
            <!-- Formulaire de contact -->
            <form action="#" method="POST" class="w-full md:w-1/2 space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm" required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm" required>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm" required></textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="bg-purple-600 text-white px-8 py-3 rounded-lg shadow hover:bg-purple-700 transition-colors duration-300 ease-out">Envoyer le message</button>
                </div>
            </form>

            <!-- Coordonnées de contact -->
            <div class="w-full md:w-1/3 space-y-6">
                <div class="space-y-2">
                    <h4 class="text-lg font-bold text-gray-900">Adresse</h4>
                    <p class="text-gray-600">123 Rue des Automobiles, Ville XYZ, Pays</p>
                </div>

                <div class="space-y-2">
                    <h4 class="text-lg font-bold text-gray-900">Téléphone</h4>
                    <p class="text-gray-600">+123 456 7890</p>
                </div>

                <div class="space-y-2">
                    <h4 class="text-lg font-bold text-gray-900">E-mail</h4>
                    <p class="text-gray-600">support@votreentreprise.com</p>
                </div>
            </div>
        </div>
    </section>
</div>
