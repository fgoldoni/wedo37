<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-8">
    <x-wedo.pages.layouts.heading>
        <x-slot name="title">
            {{ __('Shortlisted') }}
        </x-slot>
    </x-wedo.pages.layouts.heading>

    <div class="col-span-1">
        <div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
            <ul class="grid grid-cols-1 space-y-4">
                @forelse($rows->data as $row)
                    <x-wedo.shortlisted.item :row="$row" wire:key="item-{{$row->id}}"></x-wedo.shortlisted.item>
                @empty
                    <div class="text-center max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
                        <x-heroicon-o-ban class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-ban>

                        <h3 class="uppercase mt-2 text-sm font-medium text-gray-900">Empty Shortlisted</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new basket.</p>
                        <div class="mt-6">
                            <a href="{{ route('tickets.index') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                                <x-heroicon-o-shopping-bag class="-ml-1 mr-2 h-5 w-5"></x-heroicon-o-shopping-bag>
                                {{ __('layout.navigation.browse_tickets') }}
                            </a>
                        </div>
                    </div>
                @endforelse
            </ul>
        </div>
    </div>
</div>
