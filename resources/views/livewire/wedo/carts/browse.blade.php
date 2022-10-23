<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts && $carts->total_quantity)
        <x-wedo.basket :carts="$carts" action :link="__('Basket')"></x-wedo.basket>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 bg-white">
            <div class="col-span-1 lg:col-span-3">
                <div class="grid grid-cols-1 border-2 border-gray-200 shadow-2xl p-8 rounded">
                    <div class="col-span-1">
                        <section aria-labelledby="cart-heading">
                            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                            <ul role="list" class="border-b border-gray-300 divide-y divide-gray-300">

                                    @foreach ($carts?->items as $row)
                                        @if($row->associatedModel === \App\Models\Ticket::$apiModel)
                                            <section class="relative  @if($loop->first && ($row->attributes->quantity > 0) && ($row->attributes->quantity <= 5)) pt-8 @else p-2 @endif">
                                            <div
                                                @class([
                                                    'p-10 border-' . app_color() . '-300 border-t-2 shadow-2xl -translate-y-2 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
                                                ])>
                                                @if(($row->attributes->quantity > 0) && ($row->attributes->quantity <= 5))
                                                    <p class="absolute animate-pulse top-0 -translate-y-1/2 transform rounded-full bg-rose-500 py-1.5 px-4 text-sm font-semibold text-white"">
                                                    {{ $row->attributes->quantity . ' ' . __('Only') }}
                                                    </p>
                                                @endif


                                                <div class="flex justify-between pb-8 border-b border-gray-200">
                                                    <div class="flex flex-col">
                                                        <h3 class="flex items-center text-{{ app_color() }}-900">
                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                      <span class="mr-2 text-2xl font-medium"> € </span>
                      <span class="font-semibold"> {{ $row->attributes->price }} </span>
                    </span>
                                                        </h3>

                                                        <h4 class="uppercase mt-5 text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $row->attributes->color }}-400 to-{{ $row->attributes->color }}-900">{{ $row->attributes->name }}</h4>
                                                    </div>
                                                    <div>
                                                        @if($row->attributes->quantity > 0)
                                                            @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'max' => $row->attributes?->quantity > 10 ? 10 : $row->attributes?->quantity, 'model' => \App\Models\Ticket::$apiModel], key('single-ticket-quantity-' . $row->attributes?->id))
                                                        @else
                                                            <div class="hover:scale-125 ease-in-out duration-150 inline-block text-xs bg-white">
                            <span class="inline-flex items-center rounded-full px-2 py-0.5 font-medium text-gray-800 uppercase">
                                  <svg class="mr-1.5 h-2 w-2 text-gray-400" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                  </svg>
                                  Sold Out
                                </span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <ul class="px-3 pt-8 space-y-3">
                                                    <li class="flex font-medium text-gray-500">
                                                        <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ app_color() }}-400"></x-heroicon-s-check-circle>
                                                        {{ $row->attributes->attendees }} Person(s)
                                                    </li>

                                                    @foreach($row->attributes->tags as $tag)
                                                        <li class="flex font-medium text-gray-500">
                                                            <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ app_color() }}-400"></x-heroicon-s-check-circle>
                                                            {{ $tag }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </section>
                                         @endif
                                    @endforeach
                            </ul>
                            <x-wedo.divider label="Extra(s)"></x-wedo.divider>
                            <ul role="list" class="divide-y divide-gray-200">
                                @foreach ($carts?->items as $item)
                                    @if($item->associatedModel === \App\Models\Extra::$apiModel)
                                        <li class="flex py-6 px-4 sm:px-6">
                                            <div class="flex flex-1 flex-col">
                                                <div class="flex">
                                                    <div class="min-w-0 flex-1">
                                                        <h4 class="text-sm">
                                                            <a href="javascript:;" class="capitalize font-medium text-gray-700 hover:text-gray-800">
                                                                {{ $item->name }}
                                                            </a>
                                                        </h4>
                                                        <p class="mt-1 text-sm text-gray-500">€ {{ $item->price }}</p>
                                                    </div>

                                                    <div class="ml-4 flow-root flex-shrink-0">
                                                        @if($item->attributes?->quantity > 0)
                                                            @livewire('wedo.tickets.quantity', ['item' => json_encode($item), 'max' => $item->attributes?->quantity > 10 ? 10 : $item->attributes?->quantity, 'model' => \App\Models\Extra::$apiModel], key('extra-mobile-quantity-' . $item->id))
                                                        @else
                                                            <div class="hover:scale-125 ease-in-out duration-150 inline-block text-xs bg-white">
                            <span class="inline-flex items-center rounded-full px-2 py-0.5 font-medium text-gray-800 uppercase">
                                  <svg class="mr-1.5 h-2 w-2 text-gray-400" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                  </svg>
                                  Sold Out
                                </span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
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
