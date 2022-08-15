<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
    @if($carts && $carts->total_quantity)
        <div class="pb-8 mt-8 sm:mt-0">
            <x-wedo.navigation.breadcrumb :parent="__('layout.navigation.browse_tickets')" :item="__('layout.navigation.carts')"></x-wedo.navigation.breadcrumb>
        </div>
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="col-span-1 lg:col-span-2">
                @if($carts)
                    <div class="grid grid-cols-1 bg-white border-2 border-gray-200 shadow-xl p-8 rounded">
                        <div class="col-span-1">
                            <section aria-labelledby="cart-heading">
                                <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="bg-gray-100 shadow sm:rounded-lg">
                                    <div class="px-4 py-5 sm:p-6">
                                        <div class="sm:flex sm:items-start sm:justify-between">
                                            <div>
                                                <h3 class="text-lg leading-6 font-medium text-gray-900">Basket Subtotal:  € {{ $carts?->sub_total }}</h3>
                                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                                    <p>You won't be charged until the next step.</p>
                                                </div>
                                            </div>
                                            <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                                                <button type="button" wire:click="checkout" class="btn inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 sm:text-sm">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">

                                    @forelse ($carts?->items as $item)
                                        <li class="flex py-6">
                                            <div class="flex-shrink-0">
                                                <img src="{{ $item->attributes->avatar_url }}" alt="{{ $item->name }}" class="btn-img w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
                                            </div>

                                            <div class="ml-4 flex-1 flex flex-col sm:ml-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <h4 class="text-sm">
                                                            <a href="#" class="uppercase hover:ml-1 transition-all ease-out duration-200 font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">{{ $item->quantity }} * {{ $item->name }} </a>
                                                        </h4>
                                                        <p class="ml-4 text-sm font-medium text-gray-900">€ {{ $item->price }}</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">{{ $item->attributes->event->name }}</p>
                                                    <p class="mt-2 text-sm text-{{ app_color() }}-500 underline">{{ $item->attributes->user->name }}</p>
                                                </div>

                                                <div class="mt-4 flex-1 flex items-end justify-between">
                                                    @livewire('wedo.tickets.quantity', ['itemId' => $item->id], key('cart-quantity-' . $item->id))
                                                    <div class="ml-4">
                                                        <button type="button" wire:click="remove({{ $item->id }})" class="uppercase text-xs font-medium text-rose-600 hover:text-rose-500">
                                                            <x-wedo.loader wire:loading wire:target="remove({{ $item->id }})"></x-wedo.loader>
                                                            <span>Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
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
                                    <button type="button" wire:click="checkout" class="btn w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">
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
                @else
                <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="text-center border-2 border-gray-200 shadow-xl p-8 rounded">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No projects</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new project.</p>
                        <div class="mt-6">
                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                                <!-- Heroicon name: solid/plus -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                                New Project
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                            <h2 id="summary-heading" class="text-lg font-medium text-gray-900">{{ __('Basket') }}</h2>

                            <dl class="mt-6 space-y-4">
                                <div class="flex items-center justify-between">
                                    <dt class="text-sm text-gray-600">Subtotal</dt>
                                    <dd class="text-sm font-medium text-gray-900">€ {{ $carts?->sub_total }}</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="flex items-center text-sm text-gray-600">
                                        <span>Total items</span>
                                        <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                            <!-- Heroicon name: solid/question-mark-circle -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dt>
                                    <dd class="text-sm font-medium text-gray-900"> {{ $carts?->total_quantity }}</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="flex text-sm text-gray-600">
                                        <span>Shipping estimate</span>
                                        <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Learn more about how tax is calculated</span>
                                            <!-- Heroicon name: solid/question-mark-circle -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dt>
                                    <dd class="text-sm font-medium text-gray-900">€ 0.00</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="text-base font-medium text-gray-900">Order total</dt>
                                    <dd class="text-base font-medium text-gray-900">€ {{ $carts?->total }}</dd>
                                </div>
                            </dl>

                            <div class="mt-6">
                                <button type="button" wire:click="checkout" class="btn w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">Continue</button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center">
            <x-heroicon-o-shopping-bag class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-shopping-bag>

            <h3 class="uppercase mt-2 text-sm font-medium text-gray-900">No Basket</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating a new basket.</p>
            <div class="mt-6">
                <a href="{{ route('tickets.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                    <x-heroicon-o-shopping-bag class="-ml-1 mr-2 h-5 w-5"></x-heroicon-o-shopping-bag>
                    {{ __('layout.navigation.browse_tickets') }}
                </a>
            </div>
        </div>
    @endif


</main>
