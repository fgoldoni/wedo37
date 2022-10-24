<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-wedo.basket :link="__('layout.navigation.browse_orders')" title="{{ __('layout.navigation.browse_orders') }}"></x-wedo.basket>

    <section aria-labelledby="recent-heading" class="space-y-8 sm:px-4">
        <h2 id="recent-heading" class="sr-only">Recent orders</h2>
        @forelse($orders as $order)
            <div class="border-t border-b border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border">
                <h3 class="sr-only">Order placed on <time datetime="2021-07-06">Jul 6, 2021</time></h3>

                <div class="flex items-center border-b border-gray-200 p-4 sm:grid sm:grid-cols-4 sm:gap-x-6 sm:p-6">
                    <dl class="grid flex-1 grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2">
                        <div>
                            <dt class="font-medium text-gray-900">{{ $order->user->name }}</dt>
                            <dd class="mt-1 text-gray-500">#{{ $order->id }}</dd>
                        </div>
                        <div class="hidden sm:block">
                            <dt class="font-medium text-gray-900">{{ __('Order on') }}</dt>
                            <dd class="mt-1 text-gray-500">
                                <time datetime="{{ $order->created_at }}">{{ \Illuminate\Support\Carbon::parse($order->created_at)->isoFormat('DD MMM, Y HH:mm') }}</time>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Total</dt>
                            <dd class="mt-1 font-medium text-gray-900">€  {{ number_format($order->total, 2,'.', ' ')  }}</dd>
                        </div>
                    </dl>
                    <div class="lg:hidden">
                        <x-wireui-dropdown>
                            <x-dropdown.item href="{{ route('confirmation.index', ['orderId' => $order->id]) }}" label="{{__('Details')}}" />
                            <x-dropdown.item href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" separator label="{{__('Check-In')}}" />
                        </x-wireui-dropdown>
                    </div>

                    <div class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4">
                        <a href="{{ route('confirmation.index', ['orderId' => $order->id]) }}" class="flex items-center justify-center rounded-md border border-gray-300 bg-white py-2 px-2.5 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-{{ app_color() }}-500 focus:ring-offset-2">
                            <span>{{ __('Details') }}</span>
                            <span class="sr-only">{{ $order->id }}</span>
                        </a>
                        <a href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" class="flex items-center justify-center rounded-md border border-gray-300 bg-white py-2 px-2.5 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-{{ app_color() }}-500 focus:ring-offset-2">
                            <span>{{ __('Check-in') }}</span>
                            <span class="sr-only">for order {{ $order->id }}</span>
                        </a>
                    </div>
                </div>
                <div class="w-full bg-gray-50 py-10">

                    <div class="relative max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 px-4">
                        <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url({{ asset('images/svg/glamorous.svg') }});"></div>

                        <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(env('API_URL') . '/admin/orders/' . $order->id . '/edit'); !!}
                        </div>

                        <div class="flex flex-col gap-8">
                            <p class="text-2xl font-medium tracking-wider capitalize">{{ $order->event?->name }}</p>

                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Organizer') }}:</p>
                                <p class="text-gray-400 text-sm">
                                    {{ $order->team?->name }}
                                </p>
                                @if(isset($order->team?->email))
                                    <p class="text-gray-400 text-sm">
                                        {{ $order->team?->email }}
                                    </p>
                                @endif
                            </div>


                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Date & address') }}</p>
                                <p class="text-gray-400 text-sm">
                                    {{ \Carbon\Carbon::parse($order->event?->start)->format('d M, Y h:m') }} -  {{ \Carbon\Carbon::parse($order->event?->end   )->format('d M, Y h:m') }}
                                </p>
                                <p class="text-gray-400 text-sm">
                                    {{ $order?->event?->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </section>

</main>
