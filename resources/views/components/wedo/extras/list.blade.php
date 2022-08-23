@props(['orders'])

<div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
    <div role="list" class="divide-y divide-gray-200 border-b border-gray-200 p-4 space-y-8">
        @forelse($orders as $order)
            <div>
                <div class="relative">
                    <div class="relative w-full h-72 rounded-lg overflow-hidden">
                        <img src="{{ asset('images/extra.jpg') }}" alt="{{ $order->name }}" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="relative mt-4">
                        <h3 class="text-xs font-medium text-gray-900 btn-title">{{ $order->name }}</h3>
                    </div>
                    <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                        <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                        <p class="relative text-lg font-semibold text-white">€ {{ $order->price }}</p>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="javascript:;" wire:click="add({{ $order->id }})" class="btn-base uppercase relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">
                        <x-wedo.loader wire:loading wire:target="add({{ $order->id }})"></x-wedo.loader>
                        Add
                    </a>
                </div>
            </div>
        @empty
            <div class="text-center">
                <span class="mx-auto h-12 w-12 text-gray-400">🍾</span>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Extras</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new project.</p>
                <div class="mt-6">
                    <a href="{{ route('tickets.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <!-- Heroicon name: solid/plus -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        New Extras
                    </a>
                </div>
            </div>

        @endforelse
    </div>
</div>
