<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">

    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>
        <!-- This example requires Tailwind CSS v2.0+ -->
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
                                                <button type="button" wire:click="checkout" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">

                                    @forelse ($carts?->items as $item)
                                        <li class="flex py-6">
                                            <div class="flex-shrink-0">
                                                <img src="{{ $item->attributes->avatar_url }}" alt="{{ $item->name }}" class="w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
                                            </div>

                                            <div class="ml-4 flex-1 flex flex-col sm:ml-6">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <h4 class="text-sm">
                                                            <a href="#" class="uppercase font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900 hover:text-gray-800">{{ $item->quantity }} * {{ $item->name }} </a>
                                                        </h4>
                                                        <p class="ml-4 text-sm font-medium text-gray-900">$ {{ $item->price }}</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">{{ $item->attributes->event->name }}</p>
                                                    <p class="mt-2 text-sm text-{{ app_color() }}-500 underline">{{ $item->attributes->user->name }}</p>
                                                </div>

                                                <div class="mt-4 flex-1 flex items-end justify-between">
                                                    <p class="flex items-center text-sm text-gray-700 space-x-2">
                                                        <!-- Heroicon name: solid/check -->
                                                        <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span>In stock</span>
                                                    </p>
                                                    <div class="ml-4">
                                                        <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
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
                                <h2 id="summary-heading" class="sr-only">Order summary</h2>

                                <div>
                                    <dl class="space-y-4">
                                        <div class="flex items-center justify-between">
                                            <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                                            <dd class="ml-4 text-base font-medium text-gray-900">$ {{ $carts?->sub_total }}</dd>
                                        </div>
                                    </dl>
                                    <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
                                </div>

                                <div class="mt-10">
                                    <button type="button" wire:click="checkout" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">
                                        Continue
                                    </button>
                                </div>

                                <div class="mt-6 text-sm text-center text-gray-500">
                                    <p>
                                        or <a href="{{ route('tickets.index') }}" class="text-indigo-600 font-medium hover:text-indigo-500">Browse Tickets<span aria-hidden="true"> &rarr;</span></a>
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
                            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
                            <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

                            <dl class="mt-6 space-y-4">
                                <div class="flex items-center justify-between">
                                    <dt class="text-sm text-gray-600">Subtotal</dt>
                                    <dd class="text-sm font-medium text-gray-900">$99.00</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="flex items-center text-sm text-gray-600">
                                        <span>Shipping estimate</span>
                                        <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Learn more about how shipping is calculated</span>
                                            <!-- Heroicon name: solid/question-mark-circle -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dt>
                                    <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="flex text-sm text-gray-600">
                                        <span>Tax estimate</span>
                                        <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Learn more about how tax is calculated</span>
                                            <!-- Heroicon name: solid/question-mark-circle -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </dt>
                                    <dd class="text-sm font-medium text-gray-900">$8.32</dd>
                                </div>
                                <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                                    <dt class="text-base font-medium text-gray-900">Order total</dt>
                                    <dd class="text-base font-medium text-gray-900">$112.32</dd>
                                </div>
                            </dl>

                            <div class="mt-6">
                                <button type="button" wire:click="checkout" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Continue</button>
                            </div>
                        </section>
                    </div>
                    <div class="col-span-1">

                        <!-- Section 1 -->
                        <section class="w-full py-16 overflow-hidden bg-white relative">
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-64 left-0 top-0"></div>
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-24 -skew-x-[30deg] -skew-x-12 left-0 top-0"></div>
                            <div class="max-w-6xl relative mx-auto flex sm:px-0 px-10 flex-col items-start sm:items-center justify-center">
                                <h2 class="text-gray-900 text-3xl font-bold">Payment methods</h2>
                                <a href="#_" class="text-indigo-500 font-bold text-lg mt-5 flex items-center group">
                                    <span>Buyer Protection</span>
                                    <svg class="w-5 h-5 group-hover:ml-1 transition-all ease-out duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                                <div class="flex flex-wrap justify-start sm:grid sm:grid-cols-3 gap-6 mt-8">
                                    <div class="h-20 w-20 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/paypal.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/visa-credit-card.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/mastercard.svg') }}" alt="paypal">
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
