@props([
    'item' => null,
    'status' => null,
    'phone' => null,
    'apply' => null
])

<div>
    <div>
        <img class="h-32 w-full object-cover lg:h-48 bg-gradient-to-r from-{{ app_color() }}-300"  src="{{ asset('images/circuit-board.svg') }}" alt="{{ app_event()->name }}">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
            <div class="flex">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{ app_event()->avatar_url }}" alt="{{ app_event()->name }}">
            </div>
            <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                    <h1 class="uppercase text-2xl hover:ml-1 transition-all ease-out duration-200 cursor-pointer font-bold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 truncate">{{ app_event()->name }}</h1>
                </div>
                <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                    @if($phone)
                        <x-wedo.secondary-button link="tel: {{ $phone }}">
                            <x-heroicon-o-phone-outgoing class="-ml-1 mr-2 h-5 w-5 text-{{ app_color() }}-400"/>
                            <span>{{ $phone }}</span>
                        </x-wedo.secondary-button>
                    @endif
                    @if($status)
                        <x-wedo.jobs.applicant-status status="{{ $status }}"></x-wedo.jobs.applicant-status>
                    @endif
                    @if($apply)
                        <x-wedo.button wire:click="add({{ $item?->id }})" class="hidden sm:block">
                            <x-wedo.loader wire:loading wire:target="add({{ $item?->id }})"></x-wedo.loader>
                            <span>Add to Basket</span>
                        </x-wedo.button>
                        <x-wedo.button wire:click="continue({{ $item?->id }})" class="sm:hidden">
                            <x-wedo.loader wire:loading wire:target="continue({{ $item?->id }})"></x-wedo.loader>
                            <span>Add to Basket</span>
                        </x-wedo.button>
                   @else
                        <button type="button" class="inline-flex btn-base justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                            <!-- Heroicon name: solid/phone -->
                            <x-heroicon-o-location-marker class="-ml-1 mr-2 h-5 w-5 text-{{ app_color() }}-400"/>
                            <span>{{ app_event()->city }}</span>
                        </button>
                   @endif
                </div>
            </div>
        </div>
        <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
            <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
        </div>
    </div>
</div>
