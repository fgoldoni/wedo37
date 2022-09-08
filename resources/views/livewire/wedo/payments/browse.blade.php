<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts?->total_quantity)
        <x-wedo.basket :carts="$carts" :back="route('checkout.index')" :back-name="__('Contact information')" :link="__('layout.navigation.payments')"></x-wedo.basket>

        <h2 class="sr-only">Payment</h2>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">

            <div class="lg:col-span-3">
                <x-wedo.partials.alert></x-wedo.partials.alert>
            </div>

            <div class="lg:col-span-2">
                <div class="grid grid-cols-1">
                    <section class="relative w-full">
                        <x-wedo.disclosure title="Secure payment with paypal" open>
                            @livewire('wedo.paypal.browse')
                        </x-wedo.disclosure>

                        <x-wedo.divider label="OR" class="py-8"></x-wedo.divider>


                        <x-wedo.disclosure title="Secure payment with credit card" open>
                            <x-wedo.button  wire:click="save" wire:loading.attr="disabled" id="checkout-button" class="w-full py-4 items-center">
                                <x-wedo.loader wire:loading></x-wedo.loader>
                                <x-heroicon-o-credit-card class="h-6 w-6 mr-2 mb-1"></x-heroicon-o-credit-card>
                                <span class="text-xl">{{ __('Checkout') }}</span>
                            </x-wedo.button>
                            <div class="flex items-center justify-center pt-6">
                                <img src="{{ asset('images/Secure_Cart.png') }}" alt="">
                            </div>
                        </x-wedo.disclosure>





                        <x-wedo.carts.mobile-summary :carts="$carts" :has-extra="$hasExtra" id="card-button"  :continue="false"></x-wedo.carts.mobile-summary>
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
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

    <script src="https://js.stripe.com/v3/"></script>
    @endPushOnce
</main>
