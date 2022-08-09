@props(['filters'])

@php

    $filtersCount =0;

    foreach ($filters as $filter)
    {
        $filtersCount += empty($filter) ? 0 : (is_array($filter) ? count($filter) : 1);
    }

@endphp

<section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
    <h2 id="filter-heading" class="sr-only">Filters</h2>
    <div
        x-data="{ openFilters: false }"

        aria-labelledby="filter-heading"

        class="relative z-10 border-t border-b border-secondary-200 grid items-center">

        <div class="relative col-start-1 row-start-1 py-4">
            <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-0">
                <div>
                    <button  @click="openFilters = !openFilters" type="button" class="relative inline-block group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
                        <!-- Heroicon name: solid/filter -->
                        <x-heroicon-o-adjustments class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500"/>
                        Filters
                        @if($filtersCount)
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-{{ app_color() }}-600 rounded-full">
                                {{ $filtersCount }}
                            </span>
                        @endif
                    </button>
                </div>
                <div class="pl-6">
                    <button type="button" class="text-gray-500 hover:text-gray-900" wire:click="resetFilters">Clear all</button>
                </div>
            </div>
        </div>
        <div

            x-show="openFilters"

            x-transition:enter="transition-opacity ease-linear duration-300"

            x-transition:enter-start="opacity-0"

            x-transition:enter-end="opacity-100"

            x-transition:leave="transition-opacity ease-linear duration-300"

            x-transition:leave-start="opacity-100"

            x-transition:leave-end="opacity-0"

            x-cloak

            x-data="{
                selected:  @entangle($attributes->wire('model')),
            }"


            class="border-t border-secondary-200 bg-secondary-200 py-10" id="disclosure-1">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                <div class="grid grid-cols-1 gap-y-10 auto-rows-min">
                    <fieldset>
                        <legend class="block font-medium">{{ __('Job Type') }}</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            @forelse(app_job_types() as $jobType)
                                <div class="flex items-center text-base sm:text-sm">
                                    <input x-model="selected" id="area-{{ $jobType->id }}" value="{{ $jobType->id }}" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="area-{{ $jobType->id }}" class="ml-3 min-w-0 flex-1 text-gray-600"> {{ $jobType->name }} </label>
                                </div>
                            @empty
                                No Results
                            @endforelse
                        </div>
                    </fieldset>
                </div>
                <div class="grid grid-cols-1 gap-y-10 auto-rows-min">
                    <fieldset>
                        <legend class="block font-medium">{{ __('Area') }}</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            @forelse(app_areas() as $area)
                                <div class="flex items-center text-base sm:text-sm">
                                    <input x-model="selected" id="area-{{ $area->id }}" value="{{ $area->id }}" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="area-{{ $area->id }}" class="ml-3 min-w-0 flex-1 text-gray-600"> {{ $area->name }} </label>
                                </div>
                            @empty
                                No Results
                            @endforelse
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-1 py-4">
            <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <x-dropdown content-classes="relative inline-block">
                    <x-slot name="trigger">
                        <div class="flex">
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sort
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </x-slot>

                    <x-dropdown.item label="Most Popular" />
                    <x-dropdown.item separator label="{{ __('Today') }}" wire:click="$set('filters.days', 1)"/>
                    <x-dropdown.item separator label="{{ __('Last 2 Days') }}" wire:click="$set('filters.days', 2)"/>
                    <x-dropdown.item separator label="{{ __('Last 7 Days') }}" wire:click="$set('filters.days', 7)"/>
                    <x-dropdown.item separator label="{{ __('Last 30 Days') }}" wire:click="$set('filters.days', 3)"/>
                </x-dropdown>
            </div>
        </div>

    </div>
</section>
