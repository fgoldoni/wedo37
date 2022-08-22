<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts && $carts->total_quantity)
        <x-wedo.basket :carts="$carts" :back="route('checkout.index')" :back-name="__('Contact information')" :link="__('layout.navigation.payments')"></x-wedo.basket>

        <h2 class="sr-only">Checkout</h2>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="lg:col-span-3">
                <x-wedo.partials.alert></x-wedo.partials.alert>
            </div>

            <div class="col-span-1 lg:col-span-2">
                <div class="grid grid-cols-1 gap-8">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    @livewire('wedo.paypal.browse')

                    <x-wedo.form-section submit="save">
                        <x-slot name="title">
                            <div class="flex items-center space-x-3 lg:pl-2">
                                <div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-600" aria-hidden="true"></div>
                                <a href="#" class="uppercase cursor-pointer hover:ml-1 transition-all ease-out duration-200 truncate hover:text-gray-600">
                                  <span>
                                   {{ __('Credit Card') }}
                                  </span>
                                </a>
                                <div class="flex items-center justify-between sm:grid sm:grid-cols-3 gap-6">
                                    <div class="h-8 w-8 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="h-6 w-6" src="{{ asset('images/svg/visa-credit-card.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-8 w-8 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="h-6 w-6" src="{{ asset('images/svg/mastercard.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-8 w-8 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="h-6 w-6" src="{{ asset('images/svg/payment.svg') }}" alt="paypal">
                                    </div>
                                </div>
                            </div>
                        </x-slot>

                        <x-slot name="description">
                        </x-slot>

                        <x-slot name="form">
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
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                            <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
                                @forelse ($carts?->items as $item)
                                    @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                                        <x-wedo.carts.item :item="$item->attributes" :model="\App\Models\Ticket::$apiModel" wire:key="item-{{ $item->id }}"></x-wedo.carts.item>
                                    @endif
                                @empty
                                    <p>No Items</p>
                                @endforelse
                               @foreach ($carts?->items as $item)
                                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                                            <div class="group relative p-10">
                                                <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                                    <img src="{{ asset('images/extra.jpg') }}" alt="{{ $item->name }}" class="btn-img w-full h-full object-center object-cover lg:w-full lg:h-full">
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-xs text-gray-700 btn-title">
                                                            <a href="javascript:;">
                                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                                {{ $item->quantity }} * {{ $item->name }}
                                                            </a>
                                                        </h3>
                                                        <p class="mt-1 text-sm text-gray-500">€ {{ $item->price }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
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
