<div class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 transform -translate-y-12 rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
    <div class="w-full h-12 border-2 border-gray-200 rounded-lg lg:border-0 lg:w-auto lg:flex-1">
        <x-select
            class="w-full h-full font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none"
            right-icon="academic-cap"
            placeholder="Search jobs, keywords"
            :async-data="route('api.search.jobs')"
            :template="[
                    'name'   => 'user-option',
                    'config' => ['src' => 'avatar_url']
                ]"
            option-label="name"
            option-value="id"
            option-description="email"
        />
    </div>
    <div class="w-0.5 bg-gray-100 h-12 lg:block hidden"></div>

    <div class="relative flex items-center w-full h-12 border-2 border-gray-200 rounded-lg lg:w-auto lg:border-0 lg:flex-1">
        <x-select
            class="w-full h-full font-medium text-gray-700 rounded-lg sm:text-lg focus:bg-gray-50 focus:outline-none"
            right-icon="folder-open"
            md
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

        <x-wire-button class="py-3 inline-flex items-center justify-center w-full text-base font-medium" squared primary label="{{ __('pages/home.hero.go') }}" />

    </div>
</div>
