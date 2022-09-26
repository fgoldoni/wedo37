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
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('How to book tickets') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            {!! __('Our platform works with your content to provides insights and metrics on how you can grow your business and scale your infastructure.') !!}
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('How can i present my ticket at the event entrance') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            Yes, we do! Team pricing is available for any plan. You can take advantage of 30% off for signing up for team pricing of 10 users or more.
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('Where can i find my tickets') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
                        </p>
                    </div>
                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('What does a ticket look like') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
                        </p>
                    </div>

                    <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                        <h3 class="text-lg font-bold text-{{ app_color() }}-500 sm:text-xl md:text-2xl" data-primary="{{ app_color() }}-500">{{ __('How to contact an event organizer') }} ?</h3>
                        <p class="mt-2 text-base text-gray-600 sm:text-lg md:text-normal">
                            You can easily change your site settings inside of your site dashboard by clicking the top right menu and clicking the settings button.
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
