<div class="bg-gray-50">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>

        <form wire:submit.prevent="save" class="lg:grid lg:grid-cols-3 lg:gap-x-12 xl:gap-x-16">
            <div class="lg:col-span-2 bg-white border border-gray-200 shadow-xl">
                <div class="pt-10 px-4 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">Payment</h2>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Payment type</legend>
                        <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                            <div class="flex items-center">
                                <input id="credit-card" name="payment-type" type="radio" checked class="focus:ring-{{ app_color() }}-500 h-4 w-4 text-{{ app_color() }}-600 border-gray-300">
                                <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700"> Credit card </label>
                            </div>

                            <div class="flex items-center">
                                <input id="paypal" name="payment-type" type="radio" class="focus:ring-{{ app_color() }}-500 h-4 w-4 text-{{ app_color() }}-600 border-gray-300">
                                <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700"> PayPal </label>
                            </div>
                        </div>
                        <div class="mt-10 pt-6 border-t border-gray-200 sm:flex sm:items-center sm:justify-between">
                            <button type="submit" wire:loading.attr="disabled" wire:target="save" class="hover:scale-105 hover:shadow-2xl ease-in-out duration-150 w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500 sm:ml-6 sm:order-last sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="save"/>
                                {{ __('Continue') }}
                            </button>
                            <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">You won't be charged until the next step.</p>
                        </div>
                    </fieldset>
                </div>
                <section class="mt-6">
                    <h2 id="products-heading" class="sr-only">Products purchased</h2>
                    <div class="space-y-8">
                        <div class="bg-white border-t border-b border-gray-200 shadow-sm sm:border sm:rounded-lg">
                            <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
                                <div class="mt-6 lg:mt-0 lg:col-span-12">
                                    <dl class="grid grid-cols-2 gap-x-6 text-sm">
                                        <div>
                                            <dt class="font-medium text-gray-900">Delivery address</dt>
                                            <dd class="mt-3 text-gray-500">
                                                <span class="block">{{ auth()->user()->name }}</span>
                                                <span class="block">{{ auth()->user()->address }}</span>
                                            </dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Shipping updates</dt>
                                            <dd class="mt-3 text-gray-500 space-y-3">
                                                <p>{{ auth()->user()->email }}</p>
                                                <p>{{ auth()->user()->phone }}</p>
                                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 py-6 px-4 sm:px-6 lg:p-8">
                                <h4 class="sr-only">Status</h4>
                                <p class="text-sm font-medium text-gray-900">Preparing to ship on <time datetime="2021-03-24">March 24, 2021</time></p>
                                <div class="mt-6" aria-hidden="true">
                                    <div class="bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-2 bg-indigo-600 rounded-full" style="width: calc((2 * 2 + 1) / 8 * 100%)"></div>
                                    </div>
                                    <div class="hidden sm:grid grid-cols-4 text-sm font-medium text-gray-600 mt-6">
                                        <div class="text-indigo-600">Ticket placed</div>
                                        <div class="text-center text-indigo-600">Processing</div>
                                        <div class="text-center text-indigo-600">Payment</div>
                                        <div class="text-right">Confirmation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <dl class="py-6 px-4 space-y-6 sm:px-6">
                        @php
                            $total = 0;
                        @endphp
                        @foreach(session('cart-' . auth()->user()->id) as $cart)
                            @php
                                $total = $cart->price * $cart->quantity;
                            @endphp
                            <div class="flex items-center justify-between">
                                <dt class="text-sm uppercase">{{ $cart?->name }}</dt>
                                <dd class="text-sm font-medium text-gray-900">$ {{ $cart?->price }}</dd>
                            </div>
                        @endforeach

                        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                            <dt class="text-base font-medium">Total</dt>
                            <dd class="text-base font-medium text-gray-900">$ {{ $total }}</dd>
                        </div>
                    </dl>
                    <dl class="mt-16 grid grid-cols-2 gap-x-4 text-sm text-gray-600 border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
                        <div>
                            <dt class="font-medium text-gray-900">Shipping Address</dt>
                            <dd class="mt-2">
                                <address class="not-italic">
                                    <span class="block">{{ auth()->user()->name }}</span>
                                    <span class="block">{{ auth()->user()->address }}</span>
                                </address>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Payment Information</dt>
                            <dd class="mt-2 space-y-2 sm:flex sm:space-y-0 sm:space-x-4">
                                <div class="flex-auto">
                                    <p class="text-gray-900">{{ auth()->user()->email }}</p>
                                    <p>{{ auth()->user()->phone }}</p>
                                    <p>&nbsp;</p>
                                </div>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </form>
    </div>
</div>

