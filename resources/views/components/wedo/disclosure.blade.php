@props([
    'title' => 'Details',
    'open' => false,
])
<div {{ $attributes->merge(['class' => 'border-t border-gray-200 p-6 bg-white rounded-lg shadow-md  border-2 border-secondary-200 col-span-1 sm:col-span-2']) }}>
    <h2 class="sr-only">{{ $title }}</h2>
    <div wire:ignore x-data="{ open: '{{ $open }}' }">
        <h3>
            <!-- Expand/collapse question button -->
            <button @click="open = !open" type="button" class="rounded-lg bg-slate-100 px-4 py-3 w-full flex items-center justify-between text-sm text-secondary-500 hover:text-secondary-600" aria-controls="disclosure-1" aria-expanded="false">
            <!-- Open: "text-{{ app_color() }}-600", Closed: "text-gray-900" -->
                <span class="capitalize text-base font-medium text-gray-900" :class="{ 'text-{{ app_color() }}-600': open, 'text-gray-900': !(open) }"> {{ $title }} </span>
                <span class="ml-6 flex items-center">

                      <svg class="h-6 w-6 text-gray-400 group-hover:text-gray-500 block"  :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
                    <!--
                      Heroicon name: outline/minus-sm

                      Open: "block", Closed: "hidden"
                    -->
                      <svg class="hidden h-6 w-6 text-{{ app_color() }}-400 group-hover:text-{{ app_color() }}-500" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                      </svg>
                    </span>
            </button>
        </h3>
        <div class="pt-6 col-span-1 sm:col-span-3" x-show="open" x-cloak x-transition:enter="transition duration-100 ease-out" x-transition:enter-start="transform scale-95 opacity-0" x-transition:enter-end="transform scale-100 opacity-100" x-transition:leave="transition duration-75 ease-out" x-transition:leave-start="transform scale-100 opacity-100" x-transition:leave-end="transform scale-95 opacity-0">
            {{ $slot }}
        </div>
    </div>
</div>
