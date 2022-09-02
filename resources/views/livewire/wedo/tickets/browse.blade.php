<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <!-- Profile -->
    <x-wedo.jobs.profile :phone="app_event()->phone"></x-wedo.jobs.profile>

    @if($rows->isNotEmpty())
        <div class="max-w-7xl mx-auto m-4 sm:px-6 lg:px-8">
            <x-wedo.partials.alert></x-wedo.partials.alert>
        </div>
        <!-- Tabs -->
        <x-wedo.jobs.tabs :filters="$filters" wire:model="filters.events"></x-wedo.jobs.tabs>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:gap-4 lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1">
                        <section class="relative w-full py-20 bg-white">
                            <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>
                            <div class="px-4 mx-auto text-sm max-w-7xl md:text-base">
                                <div class="flex flex-col w-full pb-10">
                                    <h2 class="flex uppercase items-center justify-center text-3xl font-semibold md:text-5xl">
                                        {{ app_event()->city }}
                                    </h2>
                                    <p class="uppercase block mt-2 text-sm text-center text-gray-500 sm:text-base">
                                        {{ \Illuminate\Support\Carbon::parse(app_event()->start)->isoFormat('DD, MMM YYYY') }}
                                    </p>
                                </div>
                                <div class="grid gap-5">
                                    <div class="col-span-1">
                                        <div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
                                            <ul class="grid grid-cols-1 space-y-4">
                                                @foreach($rows as $row)
                                                    @livewire('wedo.tickets.item', ['item' => json_encode($row)], key('wedo.tickets.item-' . $row->id))
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="hidden lg:block sticky bottom-0 z-10 py-1 text-sm font-medium text-gray-500">
                                            <button type="submit" class="btn-base w-full rounded-md border border-transparent bg-gradient-to-r from-{{ app_color() }}-500 via-{{ app_color() }}-600 to-{{ app_color() }}-700 hover:bg-gradient-to-br py-2 px-4 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Continue') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <span class="text-base mr-2">€ {{ $carts?->total }}</span>
                                            <!-- Heroicon name: solid/chevron-up -->
                                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div class="z-20 border-t border-b border-gray-200 py-1 text-sm font-medium text-gray-500">
                                            <button type="submit" class="btn-base w-full rounded-md border border-transparent bg-gradient-to-r from-{{ app_color() }}-500 via-{{ app_color() }}-600 to-{{ app_color() }}-700 hover:bg-gradient-to-br py-2 px-4 text-sm font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Continue') }}</button>
                                        </div>
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
                                                    <dt class="text-gray-600 uppercase whitespace-nowrap">{{ $item->quantity }} * {{ $item->name }}</dt>
                                                    <dd>€ {{ $item->price }}</dd>
                                                </div>
                                            @endforeach


                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600 uppercase">Subtotal</dt>
                                                <dd>€ {{ $carts?->sub_total }}</dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="hidden lg:block lg:col-span-1">

                    @if(true)
                        <section aria-labelledby="summary-heading" class="hidden w-full sticky top-0 max-w-md flex-col bg-gray-50 lg:flex">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>

                            <div class="sticky bottom-0 flex-none border-t border-gray-200 bg-gray-50 p-6">
                                <form>
                                    <label for="discount-code" class="block text-sm font-medium text-gray-700">Discount code</label>
                                    <div class="mt-1 flex space-x-4">
                                        <input type="text" id="discount-code" name="discount-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <button type="submit" class="rounded-md bg-gray-200 px-4 text-sm font-medium text-gray-600 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Apply</button>
                                    </div>
                                </form>

                                <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
                                    <div class="flex justify-between">
                                        <dt>Subtotal</dt>
                                        <dd class="text-gray-900">$210.00</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt class="flex">
                                            Discount
                                            <span class="ml-2 rounded-full bg-gray-200 py-0.5 px-2 text-xs tracking-wide text-gray-600">CHEAPSKATE</span>
                                        </dt>
                                        <dd class="text-gray-900">-$24.00</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt>Taxes</dt>
                                        <dd class="text-gray-900">$23.68</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt>Shipping</dt>
                                        <dd class="text-gray-900">$22.00</dd>
                                    </div>
                                    <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
                                        <dt class="text-base">Total</dt>
                                        <dd class="text-base">$341.68</dd>
                                    </div>
                                </dl>
                            </div>
                        </section>
                    @else
                        <section class="w-full py-16 overflow-hidden bg-white relative">
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-64 left-0 top-0"></div>
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-24 -skew-x-[30deg] -skew-x-12 left-0 top-0"></div>
                            <div class="max-w-6xl relative mx-auto flex sm:px-0 px-10 flex-col items-start sm:items-center justify-center">
                                <img class="w-10 h-10 mb-5 rounded-full" src="{{ app_event()->avatar_url }}" alt="{{ app_team_name() }}">
                                <h2 class="text-gray-900 text-3xl font-bold">{{ app_team_name() }}</h2>
                                <p class="text-gray-600 text-lg text-left sm:text-center max-w-lg mt-5">
                                    {{ app_event()->description }}</p>
                                <a onclick="Livewire.emit('openModal', 'wedo.modals.popup.wedo')" href="javascript:;" class="text-green-500 font-bold text-lg mt-5 flex items-center group">
                                    <span>100% secure payment</span>
                                    <svg class="w-5 h-5 group-hover:ml-1 transition-all ease-out duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                                <div class="flex flex-wrap justify-start sm:grid sm:grid-cols-4 md:grid-cols-6 gap-6 mt-8">
                                    <div class="h-20 w-20 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/protection.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/paypal.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/visa-credit-card.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/mastercard.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/payment.svg') }}" alt="paypal">
                                    </div>
                                    <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                                        <img  class="w-12 h-12" src="{{ asset('images/svg/apple-pay.svg') }}" alt="paypal">
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif


                </div>

            </div>
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
</div>
