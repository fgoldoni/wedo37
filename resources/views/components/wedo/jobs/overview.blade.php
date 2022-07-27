@props(['job'])

<div {{ $attributes }}>
    <!-- Tabs -->
    <div class="mt-6 sm:mt-2 2xl:mt-5">
        <div class="border-b border-gray-200">
            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <a href="javascript:;" class="uppercase border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-base" aria-current="page">
                        {{ __('Job overview') }}
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <!-- Details list -->
    <div class="mt-6 w-full mx-auto px-4 sm:px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-cube class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ $job->job_type }}</span>
                </a>
            </div>

            <div class="col-span-1 sm:col-span-2">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-map class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ $job->address }}</span>
                </a>
            </div>

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-scale class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ $job->salary_min }} - {{ $job->salary_max }} / <span class="capitalize">{{ $job->salary_type }}</span></span>
                </a>
            </div>

            @if($job->negotiable)
                <div class="sm:col-span-1">
                    <a href="javascript:;" class="group inline-flex text-base font-medium">
                        <!-- Heroicon name: outline/shield-check -->
                        <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="text-gray-500 hover:text-gray-700">{{ __('Negotiable') }}</span>
                    </a>
                </div>
            @endif

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-clock class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-{{ app_color() }}-500 hover:text-{{ app_color() }}-700">{{ $job->closing_to }}</span>
                </a>
            </div>

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-external-link class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ $job->live_at }}</span>
                </a>
            </div>

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-eye class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ $job->view_count }}</span>
                </a>
            </div>

            <div class="sm:col-span-1">
                <a href="javascript:;" class="group inline-flex text-base font-medium">
                    <x-heroicon-o-hashtag class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                    <span class="text-gray-500 hover:text-gray-700">{{ str_pad($job->id, 4, '0', STR_PAD_LEFT) }}</span>
                </a>
            </div>
        </dl>
    </div>
</div>

