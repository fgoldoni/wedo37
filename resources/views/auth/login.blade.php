<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-auth-session-status class="mt-4" :status="session('status')" />
            <x-auth-validation-errors class="mt-4" :errors="$errors" />

            <!-- Section 1 -->
            <section class="w-full px-8 sm:mt-36 bg-gray-100 xl:px-8">
                <div class="px-10 mx-auto max-w-7xl">
                    <div class="flex flex-wrap items-center justify-center">
                        <div class="max-w-sm mb-16 lg:mb-0 lg:max-w-2xl lg:w-1/2 lg:px-4">
                            <a class="inline-block mb-6 text-3xl font-bold leading-none" href="javascript:;">
                                <svg class="w-auto h-12" viewBox="0 0 73 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M46.8676 24C46.8676 36.4264 36.794 46.5 24.3676 46.5C11.9413 46.5 1.86765 36.4264 1.86765 24C1.86765 11.5736 11.9413 1.5 24.3676 1.5C36.794 1.5 46.8676 11.5736 46.8676 24Z" class="ccustom" fill="#68DBFF"></path> <path d="M71.1324 24C71.1324 36.4264 61.1574 46.5 48.8529 46.5C36.5484 46.5 26.5735 36.4264 26.5735 24C26.5735 11.5736 36.5484 1.5 48.8529 1.5C61.1574 1.5 71.1324 11.5736 71.1324 24Z" class="ccompli1" fill="#FF7917"></path> <path d="M36.6705 42.8416C42.8109 38.8239 46.8676 31.8858 46.8676 24C46.8676 16.1144 42.8109 9.17614 36.6705 5.15854C30.5904 9.17614 26.5735 16.1144 26.5735 24C26.5735 31.8858 30.5904 38.8239 36.6705 42.8416Z" class="ccompli2" fill="#5D2C02"></path> </svg>
                            </a>
                            <h2 class="mb-4 text-4xl font-bold tracking-tight lg:text-6xl xl:text-7xl">{{ __('pages/auth.login.header') }}</h2>
                            <p class="mb-8 leading-loose text-gray-500">{{ __('pages/auth.login.description', ['team' => app_team_name()]) }}</p>
                            <a href="{{ route('jobs.index') }}" class="inline-block w-full px-6 py-3 font-bold text-center text-white transition bg-{{ app_color() }}-600 rounded hover:bg-{{ app_color() }}-500 lg:w-auto duration-250">{{ __('pages/auth.login.callAction', ['team' => app_team_name()]) }}</a>
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
                                            <input class="py-2.5 px-4 mb-4 w-full bg-gray-50 border-transparent border-none focus:ring-2 focus:ring-opacity-90 focus:ring-{{ app_color() }}-500 rounded focus:outline-none" type="email" name="email" :value="old('email')" placeholder="Email address" required autofocus>
                                            <button class="w-full py-3 mb-4 font-bold text-white bg-{{ app_color() }}-600 rounded hover:bg-{{ app_color() }}-500">{{ __("pages/auth.login.action") }}</button>
                                        </form>
                                        <p class="text-xs text-gray-400">
                                            <span>{{ __("pages/auth.login.helpText") }}</span>
                                        </p>
                                    </div>
                                    <div class="py-2 text-xs font-medium text-gray-300 border-t border-gray-100 bg-gray-50">By signing up, you agree to our <a href="#_" class="text-{{ app_color() }}-400 underline">Terms of Service</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <x-wedo.home.footer class="mt-28"></x-wedo.home.footer>
</x-app-layout>
