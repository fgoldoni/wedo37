@php
    $filters['events'][] = app_event()?->id;
@endphp
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('tickets.index', ['filters' => $filters])" :active="request()->routeIs('tickets.index')">
                        {{ __('layout.navigation.browse_tickets') }}
                    </x-nav-link>
                    @auth
                        <x-nav-link :href="route('applicants.index')" :active="request()->routeIs('applicants.index')">
                            {{ __('layout.navigation.applications') }}
                        </x-nav-link>
                    @endauth
                </div>
            </div>
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-wedo.navigation.bag class="mr-3"></x-wedo.navigation.bag>
                    <x-wedo.jobs.user-dropdown class="text-gray-700"></x-wedo.jobs.user-dropdown>
                </div>
            @else
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-wedo.navigation.bag></x-wedo.navigation.bag>
                    <a href="{{ route('login') }}" class="ml-3 max-w-xs bg-white flex items-center focus:outline-none border-l border-gray-300 pl-4">
                        <span class="sr-only">Open user menu</span>
                        <p class="mr-2 text-sm text-gray-600 text-right">
                            {{ __('layout.navigation.sign_in') }}
                        </p>
                    </a>
                </div>
            @endauth
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-1 space-y-1">
            <x-responsive-nav-link :href="route('tickets.index', ['filters' => $filters])" :active="request()->routeIs('tickets.index')">
                {{ __('layout.navigation.browse_tickets') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('applicants.index')" :active="request()->routeIs('applicants.index')">
                    {{ __('layout.navigation.applications') }}
                </x-responsive-nav-link>
            @else
                <div class="flex items-center">
                    <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('layout.navigation.sign_in') }}
                    </x-responsive-nav-link>
                    <x-wedo.navigation.bag></x-wedo.navigation.bag>
                </div>
            @endauth
        </div>
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()?->profile_photo_url }}" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">{{ Auth::user()?->name }}</div>
                        <div class="text-sm font-medium text-gray-500">{{ Auth::user()?->email }}</div>
                    </div>
                    <x-wedo.navigation.bag></x-wedo.navigation.bag>
                </div>
                <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('accounts.index')" :active="request()->routeIs('accounts.index')">
                    {{ __('layout.navigation.personal_account') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('resumes.index')" :active="request()->routeIs('resumes.index')">
                    {{ __('layout.navigation.resumes') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('applicants.index')" :active="request()->routeIs('applicants.index')">
                    {{ __('layout.navigation.applications') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('shortlisted.index')" :active="request()->routeIs('shortlisted.index')">
                    {{ __('layout.navigation.shortlisted') }}
                </x-responsive-nav-link>
            </div>
                <div class="mt-3 space-y-1">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('layout.navigation.sign_out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>
