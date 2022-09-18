<div class="relative flex w-full items-center bg-white pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
    <button wire:click="$emit('closeModal')" type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
        <span class="sr-only">Close</span>
        <!-- Heroicon name: outline/x-mark -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div class="grid w-full grid-cols-1">
        <div class="px-4 sm:px-0">
            <h2 class="text-lg font-medium text-gray-900 pl-4">{{ __('layout.navigation.browse_extras') }}</h2>

            <div class="mt-4">
                <h3 class="sr-only">Items in your cart</h3>
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach($rows as $row)
                        @livewire('wedo.extras.item', ['item' => json_encode($row)], key('modal-extra-' . $row->id))
                    @endforeach
                </ul>
                <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                    <button wire:click="$emit('closeModal')" type="button" class="btn-base w-full rounded-md border border-transparent bg-{{ app_color() }}-600 py-3 px-4 text-base font-medium text-white shadow-sm hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-{{ app_color() }}-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                        {{ __('Close & Continue') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
