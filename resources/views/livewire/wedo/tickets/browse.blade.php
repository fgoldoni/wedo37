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
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1">
                        <x-wedo.tickets.list :rows="$rows" :currentTicket="$show"></x-wedo.tickets.list>
                    </div>
                </div>

                <div class="hidden lg:block lg:col-span-2">

                    @if($ticket)
                        <x-wedo.tickets.ticket :ticket="$ticket"></x-wedo.tickets.ticket>
                    @else
                        <section class="w-full py-16 overflow-hidden bg-white relative">
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-64 left-0 top-0"></div>
                            <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-24 -skew-x-[30deg] -skew-x-12 left-0 top-0"></div>
                            <div class="max-w-6xl relative mx-auto flex sm:px-0 px-10 flex-col items-start sm:items-center justify-center">
                                <img class="w-10 h-10 mb-5" src="{{ app_team_avatar() }}" alt="{{ app_team_name() }}">
                                <h2 class="text-gray-900 text-3xl font-bold">{{ app_team_name() }}</h2>
                                <p class="text-gray-600 text-lg text-left sm:text-center max-w-lg mt-5">Do you want to speed up your job search? Post your resume on Monster and let employers know you’re open to opportunities. Plus, receive relevant job recommendations in your inbox. 🙌</p>
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
            <div class="text-center border-2 border-gray-200 shadow-xl p-8 rounded">
                <img src="{{ asset('images/svg/tickets.svg') }}" alt="{{ app_event()->name }}" class="mx-auto h-16 w-16 text-gray-400"></img>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Tickets</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new Ticket.</p>
                <div class="mt-6">
                    <a href="{{ route('tickets.index') }}" class="btn-base animate-bounce inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <x-heroicon-o-plus class="-ml-1 mr-2 h-5 w-5"></x-heroicon-o-plus>
                        {{ __('layout.navigation.browse_tickets') }}
                    </a>
                </div>
            </div>
        </x-wedo.pages.layouts.empty-state>
    @endif
</div>
