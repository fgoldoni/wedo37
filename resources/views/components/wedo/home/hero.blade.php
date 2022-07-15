<section class="relative w-full h-auto bg-gradient-to-bl from-slate-900" x-data="{ showMenu: false }" data-tails-scripts="//unpkg.com/alpinejs">

    <img class="absolute w-full h-full object-cover mix-blend-overlay bg-center" src="{{ app_team()->image }}" alt="{{ app_team()->name }}">

    <!-- Desktop menu -->
    <div class="flex items-center w-full h-20">
        <nav class="hidden w-full md:block" x-show="!showMenu">
            <ul class="relative z-10 flex items-center px-6 text-sm text-white lg:text-base">
            @auth
                <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <li class="mx-2 lg:mx-3">
                            <a href="{{ route('logout') }}"
                               x-data="{ hover: false }"
                               @mouseenter="hover = true"
                               @mouseleave="hover = false"
                               class="relative inline-block font-medium text-gray-200 hover:text-white"
                               onclick="event.preventDefault(); this.closest('form').submit();"
                            >
                                    <span class="block">
                                        <x-heroicon-o-logout class="w-6 h-6"/>
                                    </span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-{{ app_color() }}-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                                </span>
                            </a>
                        </li>
                    </form>
                @else
                    <li class="mx-2 lg:mx-3">
                        <a href="{{ route('login') }}" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Login</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-{{ app_color() }}-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                                </span>
                        </a>
                    </li>
                @endauth

                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Second Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-{{ app_color() }}-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-auto">
                    <a href="#_" class="w-1/4 py-4 pl-6 pr-4 md:pl-4 md:py-0">
                        <img class="h-12 w-auto" src="{{ app_team()->avatar }}" alt="{{ app_team()->name }}">
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">Fifth Link</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-{{ app_color() }}-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
                <li class="mx-2 lg:mx-3">
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                        <span class="block">{{ auth()->user()?->name }}</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-{{ app_color() }}-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" style="display: none;"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Desktop menu -->

        <!-- Mobile Nav  -->
        <nav class="fixed top-0 z-30 flex flex-col flex-wrap items-center justify-between w-full h-auto px-6 md:hidden">
            <div class="relative z-30 flex items-center justify-between w-full h-20">
                <a href="#_" class="flex items-center flex-shrink-0 mr-6 text-white">
                    <img class="h-12 w-auto" src="{{ app_team()->avatar }}" alt="{{ app_team()->name }}">
                </a>
                <div class="block lg:hidden">
                    <button @click="showMenu = !showMenu" class="flex items-center justify-center w-10 h-10 text-gray-200 rounded-full hover:text-white hover:bg-white hover:bg-opacity-25 focus:outline-none">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End Mobile Nav -->
    </div>

    <!-- Mobile Menu -->
    <div x-show.transition="showMenu" class="absolute top-0 z-20 flex flex-col items-center justify-center w-full h-full space-y-5 text-lg origin-center bg-{{ app_color() }}-500" style="display: none;">
        <a href="#_" class="block text-{{ app_color() }}-200 hover:text-white">First Link</a>
        <a href="#_" class="block text-{{ app_color() }}-200 hover:text-white">Second Link</a>
        <a href="#_" class="block text-{{ app_color() }}-200 hover:text-white">Third Link</a>
    </div>
    <!-- End Mobile Menu -->

    <div class="container flex items-center justify-center h-auto py-56 mx-auto">

        <div class="z-10 flex flex-col items-center xl:px-0 space-y-20">
            <h1 class="mx-6 mt-1 text-2xl text-center text-white sm:text-center sm:mx-0">{{ __('Welcome to') }}
                <br/><br/> <span class="text-5xl sm:text-6xl font-sans">{{ app_team()->display_name }} Portal!</span>
            </h1>
            <div class="flex justify-center md:mt-10">
                <a href="#" onclick="Livewire.emit('openModal', 'wedo.modals.popup.wedo')" class="px-8 py-2 m-2 text-center text-white bg-{{ app_color() }}-500 border-2 border-{{ app_color() }}-500 rounded-full hover:bg-transparent">Short - Application</a>
                <a href="#" class="px-8 py-2 m-2 text-center text-white border-2 border-{{ app_color() }}-500 rounded-full hover:bg-{{ app_color() }}-500">Browse Jobs</a>
            </div>
        </div>

    </div>
</section>
