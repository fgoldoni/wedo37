<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts && $carts->total_quantity)
        <x-wedo.basket :carts="$carts" :back="route('checkout.index')" :back-name="__('Contact information')" :link="__('layout.navigation.payments')"></x-wedo.basket>

        <h2 class="sr-only">Checkout</h2>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="col-span-1 lg:col-span-2">
                <x-wedo.form-section submit="save">
                    <x-slot name="title">
                        <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
                        <a href="#" class="truncate hover:text-gray-600">
                      <span>
                        GraphQL API
                        <span class="text-gray-500 font-normal">in Engineering</span>
                      </span>
                        </a>
            </div>
                    </x-slot>

                    <x-slot name="description">
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-4">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="shrink-0">
                                    <svg class="h-12 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95.779 40.164">
                                        <g transform="translate(24.946 -325.034)">
                                            <g transform="translate(-38.97 315.774) scale(.26458)">
                                                <path d="M414 113.4c0-25.6-12.4-45.8-36.1-45.8-23.8 0-38.2 20.2-38.2 45.6 0 30.1 17 45.3 41.4 45.3 11.9 0 20.9-2.7 27.7-6.5v-20c-6.8 3.4-14.6 5.5-24.5 5.5-9.7 0-18.3-3.4-19.4-15.2h48.9c0-1.3.2-6.5.2-8.9zm-49.4-9.5c0-11.3 6.9-16 13.2-16 6.1 0 12.6 4.7 12.6 16z" class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd"></path>
                                                <path d="M301.1 67.6c-9.8 0-16.1 4.6-19.6 7.8l-1.3-6.2h-22v116.6l25-5.3.1-28.3c3.6 2.6 8.9 6.3 17.7 6.3 17.9 0 34.2-14.4 34.2-46.1-.1-29-16.6-44.8-34.1-44.8zm-6 68.9c-5.9 0-9.4-2.1-11.8-4.7l-.1-37.1c2.6-2.9 6.2-4.9 11.9-4.9 9.1 0 15.4 10.2 15.4 23.3 0 13.4-6.2 23.4-15.4 23.4z" class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd"></path>
                                                <path clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd" d="M248.9 56.3V36l-25.1 5.3v20.4z"></path>
                                                <path class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd" d="M223.8 69.3h25.1v87.5h-25.1z"></path>
                                                <path d="M196.9 76.7l-1.6-7.4h-21.6v87.5h25V97.5c5.9-7.7 15.9-6.3 19-5.2v-23c-3.2-1.2-14.9-3.4-20.8 7.4z" class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd"></path>
                                                <path d="M146.9 47.6l-24.4 5.2-.1 80.1c0 14.8 11.1 25.7 25.9 25.7 8.2 0 14.2-1.5 17.5-3.3V135c-3.2 1.3-19 5.9-19-8.9V90.6h19V69.3h-19z" class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd"></path>
                                                <path d="M79.3 94.7c0-3.9 3.2-5.4 8.5-5.4 7.6 0 17.2 2.3 24.8 6.4V72.2c-8.3-3.3-16.5-4.6-24.8-4.6C67.5 67.6 54 78.2 54 95.9c0 27.6 38 23.2 38 35.1 0 4.6-4 6.1-9.6 6.1-8.3 0-18.9-3.4-27.3-8v23.8c9.3 4 18.7 5.7 27.3 5.7 20.8 0 35.1-10.3 35.1-28.2-.1-29.8-38.2-24.5-38.2-35.7z" class="st0" clip-rule="evenodd" fill="#6772e5" fill-rule="evenodd"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="mt-4">
                                    <p class="text-secondary-500 text-sm leading-5 dark:text-secondary-400">
                                        This provider allows you to integrate Laravel Cashier into your store to allow your customers to make payments, subscriptions using Stripe.
                                        <a href="https://laravel.com/docs/billing" target="_blank" class="text-primary-600 hover:text-primary-500">Learn more about Laravel Cashier</a>
                                    </p>
                                    <span class="mt-4 inline-flex rounded-md shadow-sm">
                                <button class="inline-flex items-center px-4 py-2 border border-secondary-300 dark:border-secondary-700 shadow-sm text-sm font-medium rounded-md text-secondary-700 dark:text-white bg-white dark:bg-secondary-700 hover:bg-secondary-50 dark:hover:bg-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-secondary-900" wire:click="enabledStripe" wire.loading.attr="disabled" type="button">
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-secondary-600 dark:text-secondary-300" wire:loading="wire:loading" wire:target="enabledStripe" fill="none" viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                                    Enabled Stripe Payment
    </button>
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <x-wedo.input.group label="{{ __('Name') }}" for="card-holder-name" :error="$errors->first('card-holder-name')" isRequired>

                                <x-wedo.input.text value="{{ $name }}" type="text" name="card-holder-name" id="card-holder-name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                            </x-wedo.input.group>
                        </div>

                        <div class="col-span-4" wire:ignore>

                            <x-wedo.label for="card-element" class="mb-5"> {{__('Credit Card')}} </x-wedo.label>

                            <div id="card-element"></div>

                            <div id="card-errors" class="mt-5 text-sm text-red-600"></div>

                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-wedo.button  type="button" wire:loading.attr="disabled" id="card-button">
                            <x-wedo.loader wire:loading></x-wedo.loader>
                            {{ __('Save') }}
                        </x-wedo.button>
                    </x-slot>
                </x-wedo.form-section>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                            <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
                                @forelse ($carts?->items as $item)
                                    <x-wedo.carts.item :item="$item->attributes" :model="\App\Models\Ticket::$apiModel" wire:key="item-{{ $item->id }}"></x-wedo.carts.item>
                                @empty
                                    <p>No Items</p>
                                @endforelse
                            </ul>

                            <dl class="hidden text-sm font-medium text-gray-900 space-y-6 border-t border-gray-200 pt-6 lg:block">
                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd>€ {{ $carts->sub_total }}</dd>
                                </div>

                                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                    <dt class="text-base uppercase">Total</dt>
                                    <dd class="text-base">€ {{ $carts->total }}</dd>
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
                                            <span class="text-base mr-auto uppercase">Total</span>
                                            <span class="text-base mr-2">€ {{ $carts->total }}</span>
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
                                            @foreach($carts?->items as $item)
                                                <div class="flex items-center justify-between">
                                                    <dt class="text-gray-600 uppercase">{{ $item->quantity }} * {{ $item->name }}</dt>
                                                    <dd>$ {{ $item->price }}</dd>
                                                </div>
                                            @endforeach


                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600 uppercase">Subtotal</dt>
                                                <dd>€ {{ $carts->sub_total }}</dd>
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

DDDDdd
    @pushOnce('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{ env("STRIPE_KEY") }}');

        const elements = stripe.elements();

        const cardElement = elements.create('card', {
            classes : {
                    base: 'StripeElement bg-gray-100 px-4 py-4 rounded-md shadow-lg'
            },
            style: {
                base: {
                    fontWeight: '500',
                    fontFamily: 'Open Sans, Segoe UI, sans-serif',
                    fontSize: '20px',
                    fontSmoothing: 'antialiased',
                    ':hover': {
                        borderColor: '#164e63',
                    }
                }
            },
        });

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const cardError = document.getElementById('card-errors');
        const clientSecret = cardButton.dataset.secret;

        cardElement.addEventListener('change', function(event) {
            if (event.error) {
                cardError.textContent = event.error.message;
            } else {
                cardError.textContent = '';
            }
        });

        cardButton.addEventListener('click', async (e) => {
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );

            if (error) {
                cardError.textContent = error.message;
                console.info(error)
            } else {
                debugger
                @this.call('setPayment', paymentMethod.id)
            }
        });

    </script>
    @endPushOnce
</main>
