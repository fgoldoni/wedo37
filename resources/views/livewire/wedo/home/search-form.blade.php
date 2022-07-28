<div class="flex flex-col bg-gray-200 items-center h-auto max-w-lg p-6 mx-auto space-y-3 transform -translate-y-12 rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
    <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
        <input type="text" class="w-full h-full px-4 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none" placeholder="{{ __('pages/home.hero.keywords') }}">
    </div>
    <div class="w-0.5 bg-gray-100 h-10 lg:block hidden"></div>

    <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
        <x-select
            class="w-full h-full mt-1 font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none"
            right-icon="folder-open"
            placeholder="Domain"
            :async-data="route('api.search.categories')"
            :template="[
                    'name'   => 'user-option',
                    'config' => ['src' => 'avatar_url']
                ]"
            option-label="name"
            option-value="id"
            option-description="email"
        />
    </div>

    <div class="w-full h-full lg:w-auto">
        <button type="button" class="inline-flex items-center justify-center w-full h-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm hover:bg-{{ app_color() }}-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-600 lg:w-64">
            {{ __('pages/home.hero.go') }}
        </button>
    </div>
</div>
