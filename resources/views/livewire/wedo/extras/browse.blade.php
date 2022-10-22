<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <x-wedo.jobs.profile :phone="app_team()->phone"></x-wedo.jobs.profile>

    @if(count($rows))
        <div class="max-w-7xl mx-auto m-4 sm:px-6 lg:px-8">
            <x-wedo.partials.alert></x-wedo.partials.alert>
        </div>

        <!-- Tabs -->
        <x-wedo.jobs.tabs :filters="$filters" wire:model="filters.events"></x-wedo.jobs.tabs>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:gap-4 lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1">
                        <section class="relative w-full py-12 bg-white">
                            <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>
                            <div class="relative px-4 mx-auto text-sm max-w-7xl md:text-base">
                                <div class="grid gap-5">
                                    <div class="col-span-1">
                                        <div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
                                           <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200 space-y-4 px-6">
                                                @foreach($rows as $row)
                                                    @livewire('wedo.extras.item', ['item' => json_encode($row)], key('extra-' . $row->id))
                                                @endforeach
                                            </ul>
                                        </div>
                                        <x-wedo.continue :disabled="!$carts?->items"></x-wedo.continue>
                                    </div>
                                </div>
                            </div>
                            <x-wedo.carts.mobile-summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.mobile-summary>
                        </section>
                    </div>
                </div>
                <x-wedo.carts.summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.summary>
            </div>
        </div>
    @else
        <x-wedo.pages.layouts.empty-state>
            <div class="text-center p-8">
                <img src="{{ asset('images/svg/tickets.svg') }}" alt="{{ app_event()->name }}" class="mx-auto h-16 w-16 text-gray-400"></img>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Tickets</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new Ticket.</p>
                <div class="mt-6">
                    <a href="{{ url('/') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <x-heroicon-o-home class="-ml-1 mr-2 h-4 w-4"></x-heroicon-o-home>
                        {{ __('layout.navigation.home') }}
                    </a>
                </div>
            </div>
        </x-wedo.pages.layouts.empty-state>
    @endif
</div>
