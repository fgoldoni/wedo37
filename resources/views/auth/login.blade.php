<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-auth-session-status class="mt-4" :status="session('status')" />
        <x-auth-validation-errors class="mt-4" :errors="$errors" />

        <!-- Section 1 -->
        <section class="w-full px-8 sm:mt-36 bg-gray-100 xl:px-8 mb-8">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-wrap items-center justify-center my-8">
                    <div class="max-w-sm mb-16 lg:mb-0 lg:max-w-2xl lg:w-1/2 lg:px-4">
                        <div class="inline-flex items-start justify-center w-full text-center mx-auto">
                            <img src="https://cdn.devdojo.com/tails/avatars/067.jpg" class="absolute transform translate-x-24 ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                            <img src="https://cdn.devdojo.com/tails/avatars/019.jpg" class="absolute transform -translate-x-24 -ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                            <img src="https://cdn.devdojo.com/tails/avatars/036.jpg" class="absolute transform -translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                            <img src="https://cdn.devdojo.com/tails/avatars/008.jpg" class="absolute transform translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                            <img src="https://cdn.devdojo.com/tails/avatars/003.jpg" class="rounded-full w-20 h-20 md:w-24 md:h-24 border-4 border-white relative">
                        </div>
                        <h2 class="my-4 text-4xl font-bold tracking-tight lg:text-6xl xl:text-7xl text-justify">{{ __('pages/auth.login.header') }}</h2>
{{--                        <p class="mb-8 leading-loose text-gray-500">{{ __('pages/auth.login.description', ['team' => app_team_name()]) }}</p>--}}
                        <a href="{{ route('tickets.index') }}" class="inline-block w-full px-6 py-3 font-bold text-center text-white transition bg-{{ app_color() }}-600 rounded hover:bg-{{ app_color() }}-500 lg:w-auto duration-250">{{ __('pages/auth.login.callAction', ['team' => app_team_name()]) }}</a>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="max-w-sm mx-auto lg:mr-0 lg:ml-auto">
                            <div class="overflow-hidden text-center bg-white rounded-md shadow-2xl">
                                <div class="px-6 py-8">
                                    <form method="POST" action="{{ route('login.link') }}">
                                        @csrf
                                        <div class="mb-6">
                                            <span class="text-sm text-gray-300">{{ __('pages/auth.login.welcome') }}</span>
                                            <h4 class="text-2xl font-semibold text-gray-700">{{ __('pages/auth.login.title') }}</h4>
                                        </div>
                                        <input class="py-2.5 px-4 mb-4 w-full bg-gray-50 border-transparent border-none focus:ring-2 focus:ring-opacity-90 focus:ring-{{ app_color() }}-500 rounded focus:outline-none" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required autofocus>
                                        <button class="w-full py-3 mb-4 font-bold text-white bg-{{ app_color() }}-600 rounded hover:bg-{{ app_color() }}-500">{{ __("pages/auth.login.action") }}</button>
                                    </form>
                                    <p class="text-xs text-gray-400">
                                        <span>{{ __("pages/auth.login.helpText") }}</span>
                                    </p>
                                </div>
                                <div class="py-2 text-xs font-medium text-gray-300 border-t border-gray-100 bg-gray-50">{!!   __('pages/auth.login.terms', ['color' => app_color(), 'url' => route('terms')]) !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-wedo.home.footer class="mt-28"></x-wedo.home.footer>
</x-app-layout>
