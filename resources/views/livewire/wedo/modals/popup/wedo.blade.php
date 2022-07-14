<div class="relative text-base text-left transform transition w-full md:max-w-4xl lg:max-w-6xl">
    <div class="relative w-full h-50 text-white bg-gradient-to-tl from-purple-900 to-green-700">
        <img class="absolute w-full h-full object-cover object-center mix-blend-overlay bg-center" src="{{ app_team()->image }}" alt="{{ app_team()->name }}">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-full p-4">
                        <img class="h-12 w-auto" src="{{ app_team()->avatar }}" alt="{{ app_team()->name }}">
                    </div>
                </div>
            </div>


            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-full text-right p-4">
                        <button type="button" class="hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                            <span class="sr-only">Close</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-full text-center py-20 text-2xl">
                        We are searching for you!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 p-4 bg-white">
        <p class="text-base text-gray-600 line-clamp-2 text-center">
            The easiest application to get your new Jobs, Employment & Career Opportunities!
        </p>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 p-4">
        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href="#" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                    <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                </a>
            </div>
        </div>

        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href="#" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                    <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                </a>
            </div>
        </div>

        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href="#" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                    <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                </a>
            </div>
        </div>

        <div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="flex-1 min-w-0">
                <a href="#" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Leslie Alexander</p>
                    <p class="text-sm text-gray-500 truncate">Co-Founder / CEO</p>
                </a>
            </div>
        </div>
    </div>


    <button wire:click="$emit('closeModal')" type="submit" class="uppercase mt-8 w-full bg-{{ app_color() }}-600 border border-transparent py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">Become a team member now!</button>



</div>
