<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">

    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="col-span-1 lg:col-span-2 bg-gray-50 p-4 sm:p-6">
                <form class="px-4 sm:px-6 lg:pb-16 lg:px-0 lg:row-start-1 lg:col-start-1">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <section aria-labelledby="contact-info-heading">
                            <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact information</h2>

                            <div class="mt-6">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                <div class="mt-1">
                                    <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </section>

                        <section aria-labelledby="payment-heading" class="mt-10">
                            <h2 id="payment-heading" class="text-lg font-medium text-gray-900">Payment details</h2>

                            <div class="mt-6 grid grid-cols-3 sm:grid-cols-4 gap-y-6 gap-x-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                                    <div class="mt-1">
                                        <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="col-span-3 sm:col-span-4">
                                    <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                                    <div class="mt-1">
                                        <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
                                    <div class="mt-1">
                                        <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                    <div class="mt-1">
                                        <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section aria-labelledby="shipping-heading" class="mt-10">
                            <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Shipping address</h2>

                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                    <div class="mt-1">
                                        <input type="text" id="company" name="company" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <div class="mt-1">
                                        <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="apartment" class="block text-sm font-medium text-gray-700">Apartment, suite, etc.</label>
                                    <div class="mt-1">
                                        <input type="text" id="apartment" name="apartment" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <div class="mt-1">
                                        <input type="text" id="city" name="city" autocomplete="address-level2" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                                    <div class="mt-1">
                                        <input type="text" id="region" name="region" autocomplete="address-level1" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal code</label>
                                    <div class="mt-1">
                                        <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section aria-labelledby="billing-heading" class="mt-10">
                            <h2 id="billing-heading" class="text-lg font-medium text-gray-900">Billing information</h2>

                            <div class="mt-6 flex items-center">
                                <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <div class="ml-2">
                                    <label for="same-as-shipping" class="text-sm font-medium text-gray-900">Same as shipping information</label>
                                </div>
                            </div>
                        </section>

                        <div class="mt-10 pt-6 border-t border-gray-200 sm:flex sm:items-center sm:justify-between">
                            <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:ml-6 sm:order-last sm:w-auto">Continue</button>
                            <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">You won't be charged until the next step.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                            <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

                            <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
                                <li class="flex items-start py-6 space-x-4">
                                    <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="flex-none w-20 h-20 rounded-md object-center object-cover">
                                    <div class="flex-auto space-y-1">
                                        <h3>Micro Backpack</h3>
                                        <p class="text-gray-500">Moss</p>
                                        <p class="text-gray-500">5L</p>
                                    </div>
                                    <p class="flex-none text-base font-medium">$70.00</p>
                                </li>

                                <!-- More products... -->
                            </ul>

                            <dl class="hidden text-sm font-medium text-gray-900 space-y-6 border-t border-gray-200 pt-6 lg:block">
                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd>$320.00</dd>
                                </div>

                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Shipping</dt>
                                    <dd>$15.00</dd>
                                </div>

                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Taxes</dt>
                                    <dd>$26.80</dd>
                                </div>

                                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                    <dt class="text-base">Total</dt>
                                    <dd class="text-base">$361.80</dd>
                                </div>
                            </dl>

                            <div
                                x-data="{
                                    open: false,
                                    focus: false,
                                    onEscape() {
                                        this.open = !1,
                                        this.$refs.button.focus()
                                   },
                                    onClosePopoverGroup (e) {
                                        e.detail.contains(this.$el) && (this.open=!1)
                                    },
                                    toggle (e) {
                                        this.open = !this.open,
                                        this.open ? this.restoreEl = e.currentTarget : this.restoreEl && this.restoreEl.focus()
                                   },

                                }"
                                @keydown.escape="onEscape"
                                @close-popover-group.window="onClosePopoverGroup"

                                class="fixed bottom-0 inset-x-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
                                <div class="relative z-10 bg-white border-t border-gray-200 px-4 sm:px-6">
                                    <div class="max-w-lg mx-auto">
                                        <button
                                            @click="toggle"
                                            @mousedown="if (open) $event.preventDefault()"
                                            type="button"
                                            x-ref="button"
                                            class="w-full flex items-center py-6 font-medium"
                                            aria-expanded="false">
                                            <span class="text-base mr-auto">Total</span>
                                            <span class="text-base mr-2">$361.80</span>
                                            <!-- Heroicon name: solid/chevron-up -->
                                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div>
                                    <!--
                                      Mobile summary overlay, show/hide based on mobile summary state.

                                      Entering: "transition-opacity ease-linear duration-300"
                                        From: "opacity-0"
                                        To: "opacity-100"
                                      Leaving: "transition-opacity ease-linear duration-300"
                                        From: "opacity-100"
                                        To: "opacity-0"
                                    -->
                                    <div
                                        x-show="open"
                                        x-transition:enter="transition-opacity ease-linear duration-300"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition-opacity ease-linear duration-300"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 bg-black bg-opacity-25"
                                        @click="toggle"
                                        x-cloak
                                    ></div>

                                    <!--
                                      Mobile summary, show/hide based on mobile summary state.

                                      Entering: "transition ease-in-out duration-300 transform"
                                        From: "translate-y-full"
                                        To: "translate-y-0"
                                      Leaving: "transition ease-in-out duration-300 transform"
                                        From: "translate-y-0"
                                        To: "translate-y-full"
                                    -->
                                    <div x-show="open"
                                         x-transition:enter="transition ease-in-out duration-300 transform"
                                         x-transition:enter-start="translate-y-full"
                                         x-transition:enter-end="translate-y-0"
                                         x-transition:leave="transition ease-in-out duration-300 transform"
                                         x-transition:leave-start="translate-y-0"
                                         x-transition:leave-end="translate-y-full"
                                         class="relative bg-white px-4 py-6 sm:px-6"
                                         x-ref="panel"
                                         @click.away="open = false"
                                         x-cloak>

                                        <dl class="max-w-lg mx-auto space-y-6">
                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600">Subtotal</dt>
                                                <dd>$320.00</dd>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600">Shipping</dt>
                                                <dd>$15.00</dd>
                                            </div>

                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600">Taxes</dt>
                                                <dd>$26.80</dd>
                                            </div>
                                        </dl>
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