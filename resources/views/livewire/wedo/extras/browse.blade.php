<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Profile -->
    <x-wedo.jobs.profile :phone="app_event()->phone"></x-wedo.jobs.profile>

    <!-- Tabs -->
    <x-wedo.jobs.tabs :filters="$filters" wire:model="filters.events"></x-wedo.jobs.tabs>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:gap-4 lg:grid-cols-3">
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1">
                        <x-wedo.extras.list :orders="$orders" ></x-wedo.extras.list>
                    </div>
                </div>

                <div class="hidden lg:block lg:col-span-2">
                    @if($hasExtra)
                        <ul role="list" class="border-b border-gray-300 divide-y divide-gray-300">
                            @foreach($carts?->items as $item)

                            @endforeach
                        </ul>
                        <section aria-labelledby="summary-heading" class="mt-10">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>

                            <div class="mt-10">
                                <button wire:click="basket()" class="uppercase btn-base w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">
                                    Go to Basket
                                </button>
                            </div>

                            <div class="mt-6 text-sm text-center text-gray-500">
                                <p>
                                    or <a href="{{ route('tickets.index') . '?filters[events][0]='.app_event()->id }}" class="text-{{ app_color() }}-600 font-medium hover:text-{{ app_color() }}-500">{{ __('layout.navigation.browse_tickets') }}<span aria-hidden="true"> &rarr;</span></a>
                                </p>
                            </div>
                        </section>
                    @endif
                </div>

            </div>
        </div>
</div>
