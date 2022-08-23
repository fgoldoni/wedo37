<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Profile -->
    <x-wedo.jobs.profile :phone="app_event()->phone"></x-wedo.jobs.profile>

    <div class="max-w-7xl mx-auto m-4 sm:px-6 lg:px-8">
        <x-wedo.partials.alert></x-wedo.partials.alert>
    </div>

    <!-- Tabs -->
    <x-wedo.jobs.tabs :filters="$filters" wire:model="filters.events"></x-wedo.jobs.tabs>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:gap-4 lg:grid-cols-3">
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 mb-8">
                        <x-wedo.extras.list :orders="$orders" ></x-wedo.extras.list>
                        <section aria-labelledby="summary-heading" class="mt-10">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>

                            <div class="mt-10">
                                <button type="button" wire:click="basket()" class="btn-base uppercase w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">
                                    GO TO BASKET
                                </button>
                            </div>

                            <div class="mt-6 text-sm text-center text-gray-500">
                                <p>
                                    or <a href="{{ route('tickets.index') . '?filters[events][0]=' . app_event()->id }}" class="text-{{ app_color() }}-600 font-medium hover:text-{{ app_color() }}-500">Browse Tickets<span aria-hidden="true"> &rarr;</span></a>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
</div>
