<div class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 overflow-hidden transform -translate-y-12 rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
    <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
        <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="{{ __('pages/home.hero.keywords') }}">
    </div>
    <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>
    <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
        <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="{{ __('pages/home.hero.area') }}">
        <svg class="absolute right-0 w-6 h-6 mr-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="w-full h-full lg:w-auto">
        <button type="button" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 lg:w-64">
            {{ __('pages/home.hero.go') }}
        </button>
    </div>
</div>
