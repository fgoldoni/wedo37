<x-guest-layout>
    <!-- Hero Section -->
    <x-wedo.pages.header :title="__('FAQ & Contact')"></x-wedo.pages.header>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 sm:py-8 lg:px-8 bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
                <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">
                    <p class="text-xs font-bold text-left text-{{ app_color() }}-500 uppercase sm:mx-6 sm:text-center sm:text-normal sm:font-bold" data-primary="{{ app_color() }}-500">
                        Vous avez besoin d'aide ?
                    </p>
                    <h3 class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center sm:mx-0">
                        Questions les plus fréquentes
                    </h3>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('Je voudrais annuler le billet que j’ai reçu et recevoir un remboursement, que dois-je faire ?') }}</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            {!! __('Veuillez contacter l’organisateur de l’événement pour réclamer un remboursement. L\'approbation du remboursement est à l\'entière discrétion de l\'organisateur de l\'événement. Un lien pour contacter l’organisateur peut être trouvé juste en dessous de l’image sur la page d\'événement. L’e-mail de l’organisateur peut aussi être trouvé dans l’e-mail de confirmation. Rappelez-vous d’inclure l’ID de la commande de votre billet (qui peut être trouvé sur votre billet et dans l’e-mail de confirmation) cela aidera à accélérer le processus de remboursement.') !!}
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('Est-il sûr de saisir les détails de ma carte bancaire pour acheter un billet via ' . app_team_name()) . ' ?'}}</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Toutes les connexions à notre plate-forme et aux fournisseurs de paiement sont sécurisées par les protocoles cryptographiques TLS / SSL. Cela signifie que les informations de votre carte seront envoyées par Internet sous forme cryptée et sont sécurisées.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Nous ne gardons pas vos informations de carte sur Sell First. En réalité elle n’atteigne jamais notre plateforme – elles sont soient directement saisis sur le site de notre fournisseur de paiement ou transférer directement sans toucher les serveurs Sell First.
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('[Acheteur de tickets] Préoccupations et questions concernant le coronavirus (Covid-19)') }}</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Nous comprenons que l'épidémie actuelle de coronavirus suscite de nombreuses inquiétudes. Nous sommes là pour vous aider du mieux que nous pouvons.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Veuillez vous tenir au courant des suggestions de votre gouvernement local à ce sujet et suivre tous les conseils et règlements.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            J'ai souscrit une assurance de remboursement. Puis-je l'utiliser ?
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Pour faire une demande de remboursement, veuillez consulter le site Web de l'assureur. Il s'agit de la tierce partie qui fournit l'assurance.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            J'ai une question ou je souhaite obtenir un remboursement pour un événement non annulé. Que dois-je faire ?
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Nous vous suggérons de contacter directement l'organisateur de l'événement. Vous trouverez le formulaire de contact sur la page de l'événement et dans l'e-mail de confirmation que nous vous avons envoyé lorsque vous avez acheté les billets.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Que se passe-t-il si un événement est annulé ?
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Le prix du billet vous sera automatiquement remboursé pour tout événement annulé. Veuillez noter que ce remboursement n'inclut pas les frais ou services supplémentaires et qu'il peut prendre jusqu'à 21 jours pour être reversé sur votre compte.
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('Comment puis-je contacter l’organisateur de l\'événement ?') }}</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Vous pouvez trouver un lien pour contacter l'organisateur d’événement juste en dessous de la bannière sur la page d’événement.
                        </p>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Si vous avez déjà acheté un billet, vous pouvez aussi trouver l’adresse e-mail de l’organisateur dans votre e-mail de confirmation.
                        </p>
                    </div>

                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('J’ai une question à propos d’un événement') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Si vous avez des questions spécifiques à propos d’un événement (temps, lieu, accès, spécifications des exigences etc…), veuillez directement contacter l’organisateur via la page de l’événement sur {{ app_team_name() }}. Un lien pour contacter l’organisateur de l’événement peut être trouvé juste en dessous de l’image (bannière) de la page d’événement.
                        </p>
                    </div>
                </div>
            </section>

            <section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="flex flex-col items-center md:flex-row">

                        <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                            <p class="font-medium text-{{ app_color() }}-500 uppercase" data-primary="{{ app_color() }}-500">{{ app_team_name() }}</p>
                            <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                                Formulaire de Contact.
                            </h2>
                            <p class="text-xl text-gray-600 md:pr-16">
                                Veuillez tout d'abord vérifier si les réponses à vos questions ne se trouvent pas dans la FAQ s'il vous plaît. Sinon, n'hésitez pas à nous envoyer un mail via le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais !
                            </p>
                        </div>

                        <div class="w-full mt-16 md:mt-0 md:w-2/5">
                            <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7" data-rounded="rounded-lg" data-rounded-max="rounded-full">

                                <input type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="name" class="mt-1 mb-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">

                                <input type="email" name="email" id="email" placeholder="{{ __('Email') }}" autocomplete="email" class="mt-1 mb-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">


                                <textarea id="message" name="message" rows="3" class="mt-1 mb-4 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Message ..."></textarea>

                                <div class="block">
                                    <button class="w-full px-3 py-4 font-medium text-white bg-{{ app_color() }}-600 rounded-lg" data-primary="{{ app_color() }}-600" data-rounded="rounded-lg">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                                @if(app_team()->phone)
                                    <p class="w-full mt-4 text-sm text-center text-gray-500">Phone:  <a href="tel: {{ app_team()->phone }}" class="text-{{ app_color() }}-500 underline">{{ app_team()->phone }}</a></p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>



    <!-- Footer Section -->
    <x-wedo.home.footer></x-wedo.home.footer>
</x-guest-layout>
