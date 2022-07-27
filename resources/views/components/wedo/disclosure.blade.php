@props([
    'title' => 'Additional details',
    'open' => false,
])
<div {{ $attributes->merge(['class' => 'w-full mx-auto px-4 sm:px-6 lg:px-8']) }}>
    <h2 class="sr-only">{{ $title }}</h2>
    <div wire:ignore x-data="{
            open: '{{ $open }}',
            display_name: '',
        }">
        <h3>
            <!-- Expand/collapse question button -->
            <button @click="open = !open" type="button" class="group relative w-full py-6 flex justify-between items-center text-left" aria-controls="disclosure-1" aria-expanded="false">
            <!-- Open: "text-{{ app_color() }}-600", Closed: "text-gray-900" -->
                <span class="uppercase text-base font-medium text-gray-900" :class="{ 'text-{{ app_color() }}-600': open, 'text-gray-900': !(open) }"> {{ $title }} </span>
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
        <div class="col-span-1 sm:col-span-3" id="disclosure-1" x-show="open" x-cloak x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
            {{ $slot }}
        </div>
    </div>
</div>
