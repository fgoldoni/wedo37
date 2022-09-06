<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts?->total_quantity)
        <x-wedo.basket :carts="$carts" :back="route('checkout.index')" :back-name="__('Contact information')" :link="__('layout.navigation.payments')"></x-wedo.basket>

        <h2 class="sr-only">Payment</h2>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="lg:col-span-3">
                <x-wedo.partials.alert></x-wedo.partials.alert>
            </div>

            <div class="lg:col-span-2">
                <div class="grid grid-cols-1">
                    <section class="relative w-full bg-white">
                        <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>
                        @livewire('wedo.paypal.browse')

                    <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="relative px-4 py-5 sm:p-6">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-start">
                                <span class="bg-white pr-3 text-lg font-medium text-gray-900 uppercase"> &nbsp; Or with credit card</span>
                            </div>
                        </div>


                        <x-wedo.form-section submit="continue">
                            <x-slot name="title">
                                <div class="relative flex space-x-12 lg:pl-2">
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
                            </x-slot>

                            <x-slot name="description">
                            </x-slot>

                            <x-slot name="form">
                                <div class="col-span-4">
                                    <x-wedo.input.group label="{{ __('Name') }}" for="card-holder-name" :error="$errors->first('card-holder-name')" isRequired>

                                        <x-wedo.input.text class="bg-slate-100 px-4 py-4" value="{{ $name }}" type="text" name="card-holder-name" id="card-holder-name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                                    </x-wedo.input.group>
                                </div>

                                <div class="col-span-4" wire:ignore>

                                    <x-wedo.label for="card-element" class="mb-5"> {{__('Visa / Master / American Express')}} </x-wedo.label>

                                    <div id="card-element"></div>

                                    <div id="card-errors" class="mt-5 text-sm text-red-600"></div>

                                </div>
                            </x-slot>
                        </x-wedo.form-section>
                        <x-wedo.continue :disabled="!$carts?->items" class="py-6 px-4 sm:p-6" id="card-button"></x-wedo.continue>
                        <x-wedo.carts.mobile-summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.mobile-summary>
                    </section>
                </div>
            </div>
            <x-wedo.carts.summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.summary>
        </div>
    @else
        <x-wedo.pages.layouts.empty-state>
            <div class="text-center p-8">
                <img src="{{ asset('images/svg/tickets.svg') }}" alt="{{ app_event()->name }}" class="mx-auto h-16 w-16 text-gray-400"></img>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Tickets</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new Ticket.</p>
                <div class="mt-6">
                    <a href="{{ url('/') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <x-heroicon-o-home class="-ml-1 mr-2 h-4 w-4"></x-heroicon-o-home>
                        {{ __('layout.navigation.home') }}
                    </a>
                </div>
            </div>
        </x-wedo.pages.layouts.empty-state>
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
                    billing_details: { name: cardHolderName.value, email: '{{ auth()->user()->email }}', phone: '{{ auth()->user()->phone }}' }
                }
            );

            if (error) {
                cardError.textContent = error.message;
                console.info(error)
            } else {
                @this.call('setPayment', paymentMethod.id)
            }
        });

    </script>
    @endPushOnce
</main>
