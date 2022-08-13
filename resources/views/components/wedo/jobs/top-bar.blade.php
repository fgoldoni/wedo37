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
                <div class="col-span-2 gap-y-10 auto-rows-min">
                    <ul role="list" class="mt-6 space-y-8">
                        @forelse(\App\Models\Event::all() as $event)
                            <li class="flow-root">
                                <input x-model="selected" id="area-{{ $event->id }}" value="{{ $event->id }}" type="checkbox" class="hidden">

                                <label for="area-{{ $event->id }}"
                                       @class([
                                            'cursor-pointer -m-3 p-3 flex hover:bg-gray-100 transition ease-in-out duration-150',
                                            'border-' . app_color() . '-500 ring-1 ring-' . app_color() . '-400' => in_array($event->id, $filters['events']),
                                        ])>
                                    <div class="hidden sm:block flex-shrink-0">
                                        <img class="w-32 h-20 object-cover rounded-md" src="{{ $event->avatar_url }}" alt="{{ $event->name }}">
                                    </div>
                                    <div class="min-w-0 flex-1 sm:ml-8">
                                        <h4 class="text-base font-medium text-gray-900 truncate">{{ $event->name }}</h4>
                                        <p class="mt-1 text-sm text-gray-500">{{ $event->description }}</p>
                                    </div>
                                    <svg
                                        @class([
                                            'h-5 w-5 text-' . app_color() . '-400',
                                            'invisible' => !in_array($event->id, $filters['events']),
                                        ])
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </li>
                        @empty
                            No Results
                        @endforelse
                    </ul>
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
