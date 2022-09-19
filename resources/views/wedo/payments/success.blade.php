<x-app-layout>
    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-wedo.basket :back="route('orders.index')" :back-name="__('layout.navigation.browse_orders')" :link="__('Confirmation')" :title="__('Purchase confirmation')"></x-wedo.basket>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="lg:col-span-3">
                <h2 class="btn-title text-3xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">{{ app_event()?->name }}</h2>

                <div class="mt-2 border-b border-gray-200 pb-5 text-sm sm:flex sm:justify-between">
                    <dl class="flex">
                        <dt class="text-gray-500">{{ __('Order Number') }}&nbsp;</dt>
                        <dd class="font-medium text-gray-900"> #{{ app_session_order()->id }}</dd>
                    </dl>
                    <div class="mt-4 sm:mt-0">
                        <dl class="flex">
                            <dt>
                                <span class="sr-only">Date</span>
                                <span class="sm:mx-2 text-gray-400" aria-hidden="true">&middot;</span>
                            </dt>
                        </dl>
                    </div>
                </div>

                <!--title -->
                <div class="w-full bg-gray-50 py-10">

                    <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 px-4">

                        <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(url('/')); !!}
                        </div>

                        <div class="flex flex-col gap-8">
                            <p class="text-2xl font-medium tracking-wider">{{ auth()->user()->name }}</p>

                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Number of items') }}:</p>
                                <p class="text-gray-400 text-sm">
                                    {{ app_session_order()->total_quantity }} Item(s)
                                </p>
                            </div>


                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Date & address') }}:</p>
                                <p class="text-gray-400 text-sm">
                                    {{ \Carbon\Carbon::parse(app_event()?->start)->format('d M, Y h:m') }} -  {{ \Carbon\Carbon::parse(app_event()?->end   )->format('d M, Y h:m') }}
                                </p>
                                <p class="text-gray-400 text-sm">
                                    {{ app_event()->address }}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>





        <!--bill to -->
        <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 py-10 px-4">

            <div class="flex flex-col gap-8">

                <div class="flex flex-col gap-1">
                    <p class="font-medium">{{ __('Customer') }}:</p>
                    <p class="text-gray-400 text-sm">
                        {{ auth()->user()->name }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ auth()->user()->email }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ auth()->user()->phone }}
                    </p>
                </div>


{{--                <div class="flex flex-col gap-1">--}}
{{--                    <p class="font-medium">Tax Number:</p>--}}
{{--                    <p class="text-gray-400 text-sm">--}}
{{--                        TAX99110212--}}
{{--                    </p>--}}
{{--                </div>--}}
            </div>

            <div class="flex flex-col gap-8">

                <div class="flex flex-col gap-1">
                    <p class="font-medium">{{ __('Organizer') }}:</p>
                    <p class="text-gray-400 text-sm">
                        {{ app_team_name() }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ app_event()->email }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ app_event()->phone }}
                    </p>
                </div>


{{--                <div class="flex flex-col gap-1">--}}
{{--                    <p class="font-medium">Tax Number:</p>--}}
{{--                    <p class="text-gray-400 text-sm">--}}
{{--                        TAX99110212--}}
{{--                    </p>--}}
{{--                </div>--}}
            </div>
        </div>

        <!--items -->
        <div class="w-full bg-gray-50 py-4">
            <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 px-4">
                <div class="flex flex-row items-center justify-start">
                    <p class="uppercase font-medium">Item(s)</p>
                </div>

                <div class="grid grid-cols-3">
                    <p class="uppercase font-medium">{{ __('Name') }}</p>
                    <p class="uppercase font-medium">{{ __('Unit') }}</p>
                    <p class="uppercase font-medium">{{ __('Price') }}</p>
                </div>
            </div>
        </div>

        <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 py-10 px-4">

            <div class="flex flex-row items-center justify-start">
{{--                <div class="flex flex-col gap-4">--}}
{{--                    <p class="font-medium">Monthly membership</p>--}}
{{--                    <p class="font-medium">Tax VAT</p>--}}
{{--                </div>--}}
            </div>

            <div class="flex flex-col items-start justify-start gap-4">
                @if(app_session_order())
                    @foreach(app_session_order()?->items as $item)
                        <div class="grid grid-cols-3 w-full">
                            <p class="">{{ $item->quantity }} x {{ $item->name }}</p>
                            <p class="">€ {{ $item->price }}</p>
                            <p class="">€ {{ $item->quantity *  $item->price}}</p>
                        </div>
                    @endforeach

                        <div class="grid grid-cols-3 w-full border-t-2 border-gray-900 pt-4">
                            <p class="col-span-2">{{ __('Subtotal') }}</p>
                            <p class="">€ {{ app_session_order()?->sub_total }}</p>
                        </div>

{{--                        <div class="grid grid-cols-3 w-full">--}}
{{--                            <p class="col-span-2">Discount</p>--}}
{{--                            <p class="">$39</p>--}}
{{--                        </div>--}}

{{--                        <div class="grid grid-cols-3 w-full">--}}
{{--                            <p class="col-span-2">Paid</p>--}}
{{--                            <p class="">$149</p>--}}
{{--                        </div>--}}

                        <div class="grid grid-cols-3 w-full border-t-2 border-gray-900 pt-4">
                            <p class="col-span-2">{{ __('Total') }}</p>
                            <p class="">€ {{ app_session_order()?->total }}</p>
                        </div>
                @endif

            </div>

        </div>

        <!--payment -->
        <div class="max-w-5xl mx-auto grid sm:grid-cols-2 px-4 pb-10">
            <div class="flex flex-col gap-4">
{{--                <div class="flex flex-col gap-1">--}}
{{--                    <p class="font-medium">Payment Method:</p>--}}
{{--                    <p class="text-gray-400 text-sm">--}}
{{--                        Stripe--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="flex flex-col gap-1">
                    <p class="font-medium">Notes:</p>
                    <p class="text-gray-400 text-sm">
                        {{ __('We appreciate your order, we’re currently processing it. So hang tight and we’ll send you confirmation very soon!') }}
                    </p>
                </div>
            </div>
        </div>


    </main>
    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
