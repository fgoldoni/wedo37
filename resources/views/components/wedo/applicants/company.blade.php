@props([
    'company'
])
<section aria-labelledby="summary-heading" class="bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 mt-8 sm:mt-2 2xl:mt-5 lg:col-span-5">
    <div class="truncate flex items-center">
        <div class="h-10 w-10 flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="{{ $company->avatar_url }}" alt="">
        </div>
        <div class="ml-4">
            <div class="text-lg font-medium text-gray-900">{{ $company->name }}</div>
            <x-wedo.secondary-button class="w-full" link="mailto:{{ $company->email }}" target="_blank">
                <span>{{ $company->email }}</span>
            </x-wedo.secondary-button>
        </div>
    </div>

    <dl class="mt-6 space-y-4">
        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="text-sm text-gray-600">Primary industry:</dt>
            <dd class="text-sm font-medium text-gray-900">{{ $company?->name }}</dd>
        </div>
        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex items-center text-sm text-gray-600">
                <span>Company size</span>
            </dt>
            <dd class="text-sm font-medium text-gray-900">{{ $company?->size }}</dd>
        </div>
        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex items-center text-sm text-gray-600">
                <span>Founded in</span>
            </dt>
            <dd class="text-sm font-medium text-gray-900">{{ $company?->founded }}</dd>
        </div>
        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex items-center text-sm text-gray-600">
                <span>Location</span>
            </dt>
            <dd class="text-sm font-medium text-gray-900 truncate ml-2">{{ $company?->location }}</dd>
        </div>
        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
            <dt class="flex items-center text-sm text-gray-600">
                <span>Phone</span>
            </dt>
            <dd class="text-sm font-medium text-gray-900">{{ $company?->phone }}</dd>
        </div>
    </dl>
    <div class="mt-6">
        <x-wedo.secondary-button class="w-full" :link="$company->website" target="_blank">
            <x-heroicon-o-external-link class="-ml-1 mr-2 h-5 w-5 text-white"/>
            <span class="truncate">{{ $company->website }}</span>
        </x-wedo.secondary-button>
    </div>
</section>
