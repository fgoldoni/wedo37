<x-guest-layout>

    <!-- Section 1 -->
    <section class="relative w-full h-auto bg-no-repeat bg-cover" x-data="{ showMenu: false }" style="background-image: url({{ \App\Http\Middleware\EnsureTeamMiddleware::companyFromCache()->image }});" data-tails-scripts="//unpkg.com/alpinejs">

        <div class="absolute inset-0 z-0 h-full bg-purple-700 opacity-25"></div>

        <!-- Desktop menu -->
        <div class="flex items-center w-full h-20">
            <nav class="hidden w-full md:block" x-show="!showMenu" x-cloak="">
                <ul class="relative z-10 flex items-center px-6 text-sm text-white lg:text-base">
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">First Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        </span>
                        </a>
                    </li>
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Second Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        </span>
                        </a>
                    </li>
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Third Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        </span>
                        </a>
                    </li>
                    <li class="mx-auto">
                        <a href="#_" class="w-1/4 py-4 pl-6 pr-4 md:pl-4 md:py-0">
                            <span class="text-3xl font-black leading-none text-white select-none logo">tails<span class="text-pink-500">.</span></span>
                        </a>
                    </li>
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Fourth Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        </span>
                        </a>
                    </li>
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Fifth Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                        </span>
                        </a>
                    </li>
                    <li class="mx-2 lg:mx-3">
                        <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-medium text-gray-200 hover:text-white">
                            <span class="block">Sixth Link</span>
                            <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-pink-500" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
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
                        <span class="text-3xl font-black leading-none text-white select-none logo">tails<span class="text-pink-500">.</span></span>
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
        <div x-show.transition="showMenu" class="absolute top-0 z-20 flex flex-col items-center justify-center w-full h-full space-y-5 text-lg origin-center bg-pink-500" x-cloak="">
            <a href="#_" class="block text-pink-200 hover:text-white">First Link</a>
            <a href="#_" class="block text-pink-200 hover:text-white">Second Link</a>
            <a href="#_" class="block text-pink-200 hover:text-white">Third Link</a>
        </div>
        <!-- End Mobile Menu -->

        <div class="container flex items-center justify-center h-auto py-32 mx-auto">

            <div class="z-10 flex flex-col items-center px-8 xl:px-0">
                <h1 class="mx-6 mt-1 text-xl text-5xl font-black text-center text-white lg:text-6xl sm:text-center sm:mx-0">Welcome to <br class="block lg:hidden">{{ \App\Http\Middleware\EnsureTeamMiddleware::companyFromCache()->display_name }}!</h1>
                <p class="w-2/3 my-6 text-xl font-normal text-center text-gray-200">Find Jobs, Employment & Career Opportunities.</p>
                <div class="flex justify-center md:mt-10">
                    <a href="#" class="px-8 py-2 m-2 text-4xl text-center font-bold text-white bg-pink-500 border-2 border-pink-500 rounded-full hover:bg-transparent">Get Started</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Section 2 -->
    <section class="relative px-10 py-16 overflow-hidden bg-gray-100">
        <img class="absolute left-0 z-0 w-3/4 transform -translate-y-1/2 opacity-70 top-1/2" src="https://cdn.devdojo.com/tails/images/gradient-blob.svg">
        <img class="absolute left-0 z-0 object-cover object-center w-full h-full opacity-50 top-24" src="https://cdn.devdojo.com/tails/images/swirl-white.svg">
        <div class="container relative z-10 px-4 mx-auto">
            <div class="w-full mb-8 sm:w-1/2 md:w-3/4 sm:pr-4 md:pr-12 sm:-mb-32 md:-mb-24 lg:-mb-36 xl:-mb-28">
                <h2 class="tracking-widest text-indigo-500 uppercase">Features</h2>
                <p class="my-3 text-5xl font-bold tracking-tighter text-indigo-900 lg:text-6xl">Integrated Editor</p>
                <p class="max-w-sm text-lg text-gray-500">Check out our awesome features including a beautiful dashboard, member management, integrations center, and much more.</p>
            </div>

            <div class="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 sm:row-start-2 md:row-start-3">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/beautiful-dashboard.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Beautiful Dashboard</h4>
                        </div>
                    </a>
                </div>
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 xl:col-start-2 sm:row-start-4 md:row-start-5 xl:row-start-2">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/member-management.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Member Management</h4>
                        </div>
                    </a>
                </div>
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-2 sm:row-start-6 md:row-start-2 xl:row-start-4">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/custom-navigation.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Custom Navigation</h4>
                        </div>
                    </a>
                </div>
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-3 sm:row-start-1 md:row-start-4 xl:row-start-1">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/integration-center.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Integration Center</h4>
                        </div>
                    </a>
                </div>
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-3 sm:row-start-3 md:row-start-1 xl:row-start-3">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/design-handoff.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Design Handoff</h4>
                        </div>
                    </a>
                </div>
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-4 sm:row-start-5 md:row-start-3 xl:row-start-2">
                    <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-30"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/3rd-party-modules.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">3rd Party Modules</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <footer class="text-center bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto space-y-6">
                <p class="text-xs font-medium">© 2022 Tails</p>
                <div class="flex justify-center space-x-6">
                    <a href="#_" target="_blank" class="text-red-500">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 80 56" xmlns="http://www.w3.org/2000/svg"><path d="m41.771 55.637-16.395-.3c-5.308-.104-10.63.104-15.834-.978-7.916-1.618-8.477-9.548-9.064-16.2-.809-9.35-.496-18.872 1.03-28.145.862-5.204 4.252-8.309 9.495-8.647C28.703.141 46.52.287 64.18.86c1.865.052 3.743.339 5.582.665 9.078 1.591 9.299 10.578 9.888 18.143.586 7.642.339 15.325-.783 22.915-.9 6.285-2.622 11.556-9.888 12.065-9.104.665-18 1.2-27.129 1.03 0-.04-.052-.04-.078-.04Zm-9.638-15.912c6.86-3.94 13.59-7.813 20.411-11.725-6.873-3.94-13.59-7.813-20.411-11.726v23.451Z" fill-rule="nonzero"></path></svg>
                    </a>
                    <a href="" target="_blank" class="text-blue-500">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                    </a>
                    <a href="#_" target="_blank" class="text-gray-900">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 p-6 text-sm font-medium bg-gray-100 rounded-lg sm:grid-cols-3 lg:grid-cols-6">
                    <a href="" class="hover:opacity-75">Home</a>
                    <a href="" class="hover:opacity-75">Features</a>
                    <a href="" class="hover:opacity-75">Blog</a>
                    <a href="" class="hover:opacity-75">Contact</a>
                    <a href="" class="hover:opacity-75">Terms</a>
                    <a href="" class="hover:opacity-75">Privacy</a>
                </div>

                <p class="max-w-lg mx-auto text-xs text-gray-500">
                    Tails is a product developed by the DevDojo. You are free to use the templates in your applications to improve your user experience.
                </p>
            </div>
        </div>
    </footer>





</x-guest-layout>
