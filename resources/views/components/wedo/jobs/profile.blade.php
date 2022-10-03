@props([
    'item' => null,
    'status' => null,
    'phone' => null,
    'apply' => null
])

<div>
    <div>
        <img class="h-32 w-full object-cover lg:h-48 bg-gradient-to-r from-{{ app_color() }}-300"  src="{{ app_event()->image }}" alt="{{ app_event()->name }}">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
            <div class="flex">
                @if($item?->avatar_url)
                    <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{ $item?->avatar_url }}" alt="{{ app_event()->name }}">
                @else
                    <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{ app_event()?->avatar_url }}" alt="{{ app_event()->name }}">
                @endif
            </div>
            <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                    <h1 class="text-2xl btn-title font-bold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 truncate">{{ app_event()->name }} in {{ app_event()->city }}</h1>
                </div>
                <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                    @if($phone)
                        <a href="tel: {{$phone}}" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-{{ app_color() }}-500 focus:ring-offset-2">
                            <!-- Heroicon name: mini/envelope -->
                            <x-heroicon-o-phone-outgoing class="-ml-1 mr-2 h-5 w-5 text-gray-400"></x-heroicon-o-phone-outgoing>
                            <span>{{ $phone }}</span>
                        </a>
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
                        <a href="mailto: {{ app_event()->email }}" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-{{ app_color() }}-500 focus:ring-offset-2">
                            <!-- Heroicon name: mini/phone -->
                            <x-heroicon-o-mail class="-ml-1 mr-2 h-5 w-5 text-gray-400"></x-heroicon-o-mail>
                            <span class="lowercase">{{ app_event()->email }}</span>
                        </a>
                   @endif
                </div>
            </div>
        </div>
        <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
            <h1 class="text-2xl btn-title font-bold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 truncate">{{ app_event()->name }} in {{ app_event()->city }}</h1>
        </div>
    </div>
</div>
