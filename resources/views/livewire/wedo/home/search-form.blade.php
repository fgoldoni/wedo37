<div class="flex flex-col items-center h-auto max-w-lg p-6 mx-auto space-y-3 transform -translate-y-12 rounded-lg shadow-md lg:h-24 lg:max-w-6xl lg:flex-row lg:space-y-0 lg:space-x-3">
    <div class="w-full border-2 border-gray-200 lg:border-0 lg:w-auto lg:flex-1">
        <x-select
            right-icon="academic-cap"
            wire:model.defer="jobId"
            placeholder="Search jobs, keywords"
            :async-data="route('api.search.jobs')"
            :template="[
                    'name'   => 'user-option',
                    'config' => ['src' => 'avatar_url']
                ]"
            option-label="name"
            option-value="id"
            option-description="category"
        />
    </div>
    <div class="w-0.5 bg-gray-100 h-12 lg:block hidden"></div>

    <div class="w-full border-2 border-gray-200 lg:border-0 lg:w-auto lg:flex-1">
        <x-select
            right-icon="folder-open"
            wire:model.defer="categoryId"
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

    <div class="w-full lg:w-auto">
        <button wire:click="save" type="button" class="inline-flex items-center justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-{{ app_color() }}-600 border border-transparent shadow-sm hover:bg-{{ app_color() }}-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-600 lg:w-64">SEARCH</button>
    </div>
</div>
