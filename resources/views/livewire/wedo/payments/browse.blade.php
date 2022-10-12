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
                        <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>

                        <x-wedo.disclosure title="{{ __('Secure payment') }}" open>

                            <!-- Section 1 -->
                            <section class="w-full overflow-hidden relative">
                                <div class="max-w-6xl relative mx-auto flex px-0 px-10 flex-col items-center justify-center">
                                    <div class="flex items-center justify-center">
                                        <x-wedo.loader class="h-6 w-6" wire:loading></x-wedo.loader>
                                        <span class="animate-pulse text-gray-900 text-2xl" wire:loading> Processing ... </span>
                                    </div>
                                    <div  wire:loading.remove class="flex flex-wrap justify-start grid grid-cols-4 gap-6 mt-8">
                                        <div class="h-16 w-16 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center" wire:click="save">
                                            <img class="w-12 h-12" src="{{ asset('images/cards/mastercard.svg') }}" alt="mastercard">
                                        </div>
                                        <div class="h-16 w-16 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center" wire:click="save">
                                            <img class="w-12 h-12" src="{{ asset('images/cards/visa.svg') }}" alt="visa">
                                        </div>
                                        <div class="h-16 w-16 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center" wire:click="save">
                                            <img class="w-12 h-12" src="{{ asset('images/cards/payment-card-amex.svg') }}" alt="amex">
                                        </div>
                                        <div class="h-16 w-30 px-4 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center" wire:click="sofort">
                                            <img class="h-4 sm:h-6" src="{{ asset('images/svg/sofort.svg') }}" alt="sofort">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <x-wedo.divider label="{{ __('Or with Paypal') }}" class="py-8"></x-wedo.divider>
                            @livewire('wedo.paypal.browse')
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
