<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts && $carts->total_quantity)
        <x-wedo.basket :carts="$carts"></x-wedo.basket>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 bg-white">
            <div class="col-span-1 lg:col-span-3">
                <div class="grid grid-cols-1 border-2 border-gray-200 shadow-2xl p-8 rounded">
                    <div class="col-span-1">
                        <section aria-labelledby="cart-heading">
                            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                            <ul role="list" class="border-b border-gray-300 divide-y divide-gray-300">

                                    @forelse ($carts?->items as $item)
                                        <x-wedo.carts.item :item="$item->attributes" :model="\App\Models\Ticket::$apiModel" wire:key="item-{{ $item->id }}" action></x-wedo.carts.item>
                                    @empty
                                        <p>No Items</p>
                                    @endforelse

                            </ul>
                        </section>
                    </div>
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-10">
                            <h2 id="summary-heading" class="sr-only">{{ __('Basket') }}</h2>

                            <div>
                                <dl class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                                        <dd class="ml-4 text-base font-medium text-gray-900">€ {{ $carts?->sub_total }}</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="mt-10">
                                <button type="button" wire:click="checkout" class="btn-base w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">
                                    Continue
                                </button>
                            </div>

                            <div class="mt-6 text-sm text-center text-gray-500">
                                <p>
                                    or <a href="{{ route('tickets.index') }}" class="inline-flex group text-{{ app_color() }}-600 font-medium hover:text-{{ app_color() }}-500">
                                        Browse Tickets
                                        <x-heroicon-o-arrow-narrow-right class="btn-icon"></x-heroicon-o-arrow-narrow-right>
                                    </a>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    @else
            <div class="text-center max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
                <x-heroicon-o-shopping-bag class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-shopping-bag>

                <h3 class="uppercase mt-2 text-sm font-medium text-gray-900">No Basket</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new basket.</p>
                <div class="mt-6">
                    <a href="{{ route('tickets.index') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <x-heroicon-o-shopping-bag class="-ml-1 mr-2 h-5 w-5"></x-heroicon-o-shopping-bag>
                        {{ __('layout.navigation.browse_tickets') }}
                    </a>
                </div>
            </div>
    @endif

</main>
