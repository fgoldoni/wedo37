@props(['order'])
<div class="lg:col-span-3 px-4 sm:px-0">

    <h2 class="btn-title text-3xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">{{ $order->event?->name }}</h2>

    <div class="mt-2 border-b border-gray-200 pb-5 text-sm sm:flex sm:justify-between">
        <div class="flex sm:items-baseline sm:space-x-4">
            <dl class="flex">
                <dt class="text-gray-500">{{ __('Order Number') }}&nbsp;</dt>
                <dd class="font-medium text-gray-900">#{{ $order->id }}</dd>
            </dl>
            <a href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" target="_blank" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:block">
                Check-in
                <span aria-hidden="true"> &rarr;</span>
            </a>
        </div>

        <div class="mt-4 sm:mt-0">
            <dl class="flex">
                <dt>
                    <span class="sr-only">Date</span>
                    <span class="sm:mx-2 text-gray-400" aria-hidden="true">&middot;</span>
                </dt>
                <dd class="font-medium text-gray-900">{{ __('Order on') }}: <time datetime="{{ $order->created_at }}">{{ \Illuminate\Support\Carbon::parse($order->created_at)->isoFormat('MMM DD, Y HH:mm') }}</time></dd>
            </dl>
        </div>
        <a href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" target="_blank" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:hidden">
            Check-in
            <span aria-hidden="true"> &rarr;</span>
        </a>
    </div>

    <!--title -->

    <div class="w-full bg-gray-50 py-10">

        <div class="relative max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 px-4">
            <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url({{ asset('images/svg/glamorous.svg') }});"></div>

            <div class="visible-print text-center">
                {!! QrCode::size(250)->generate(env('API_URL') . '/admin/orders/' . $order->id . '/edit'); !!}
            </div>

            <div class="flex flex-col gap-8">
                <p class="text-2xl font-medium tracking-wider capitalize">{{ $order->user->name }}</p>

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
<div class="lg:col-span-3">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                {{ __('layout.card.summary') }}
            </h3>
            <div class="mt-2 w-full text-sm text-gray-500">
                @if(app_session_order())
                    <ul role="list" class="mt-6 divide-y divide-gray-200 border-t border-gray-200 text-sm font-medium text-gray-500">
                       @foreach($order->items as $item)
                            @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                                <li class="flex space-x-6 py-6">
                                    <img src="{{ $item->avatar_url }}" alt="{{ $item->name }}" class="btn-img h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center">
                                    <div class="flex-auto space-y-1">
                                        <h3 class="text-gray-900">
                                            <a href="javascript:;" class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->color }}-400 to-{{ $item->color }}-900">{{ $item->quantity }} x {{ $item->name }}</a>
                                        </h3>
                                        <ul class="pt-2 space-y-3">
                                            @php
                                                $tags = is_array($item->tags) ? $item->tags : json_decode($item->tags);
                                            @endphp
                                            <li class="flex font-medium text-gray-500">
                                                <x-heroicon-s-check-circle class="w-5 h-5 mr-1.5 text-{{ $item->color }}-400"></x-heroicon-s-check-circle>
                                                {{ $item->attendees }} Person(s)
                                            </li>

                                            @foreach($tags as $tag)
                                                <li class="flex items-center font-medium text-gray-500">
                                                    <x-heroicon-s-check-circle class="w-5 h-5 mr-1.5 text-{{ $item->color }}-400"></x-heroicon-s-check-circle>
                                                    {{ $tag }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <p class="flex-none font-medium text-gray-900">{{ $item->quantity }} * € {{ $item->price }}</p>
                                </li>
                            @endif
                        @endforeach

                       @foreach($order->items as $item)
                            @if($item->associatedModel === \App\Models\Extra::$apiModel)
                                <li class="flex space-x-6 py-6">
                                    <div class="flex-auto space-y-1">
                                        <h3 class="text-gray-900">
                                            <a href="javascript:;" class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-400 to-{{ app_color() }}-900">{{ $item->quantity }} x {{ $item->name }}</a>
                                        </h3>
                                    </div>
                                    <p class="flex-none font-medium text-gray-900">{{ $item->quantity }} * € {{ $item->price }}</p>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                    <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
                        <div class="flex justify-between">
                            <dt>{{ __('Subtotal') }}</dt>
                            <dd class="text-gray-900">€ {{ app_session_order()?->sub_total }}</dd>
                        </div>

                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
                            <dt class="text-base">{{ __('Total') }}</dt>
                            <dd class="text-base">€ {{ app_session_order()?->total }}</dd>
                        </div>
                    </dl>

                    <dl class="mt-16 grid grid-cols-2 gap-x-4 text-sm text-gray-600">
                        <div>
                            <dt class="font-medium text-gray-900">Billing address</dt>
                            @if($order->payment->brand === 'Paypal')
                                <dd class="mt-3 text-gray-500">
                                    <span class="block">{{ $order->buyer?->name }}</span>
                                    <span class="block">{{ $order->buyer?->email }}</span>
                                    <span class="block">{{ $order->buyer?->street }}</span>
                                    <span class="block">{{ $order->buyer?->zip }} {{ $order->buyer?->city }}, {{ $order->buyer?->country_code }}</span>
                                </dd>
                            @else
                                <dd class="mt-3 text-gray-500">
                                    <span class="block">{{ $order->buyer?->name }}</span>
                                    <span class="block">{{ $order->buyer?->email }}</span>
                                    <span class="block">{{ $order->buyer?->phone }}</span>
                                </dd>
                            @endif
                        </div>
                        <div>
                            <dt class="font-medium text-gray-900">Payment information</dt>
                            <dd class="-ml-4 -mt-1 flex flex-wrap">

                                <div class="ml-4 mt-4 flex-shrink-0">
                                    @if($order->payment->brand === 'visa')
                                        <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                                            <rect width="36" height="24" rx="4" fill="#224DBA" />
                                            <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff" />
                                        </svg>
                                        <p class="sr-only">{{ $order->payment->brand }}</p>
                                    @elseif ($order->payment->brand == 'amex')
                                        <img class="h-4" src="{{ asset('images/svg/payment.svg') }}" alt="{{ $order->payment->brand }}">
                                        <p class="sr-only">{{ $order->payment->brand }}</p>
                                    @elseif ($order->payment->brand == 'mastercard')
                                        <img class="h-6" src="{{ asset('images/svg/mastercard.svg') }}" alt="{{ $order->payment->brand }}">
                                        <p class="sr-only">{{ $order->payment->brand }}</p>
                                    @elseif ($order->payment->brand === 'Paypal')
                                        <img class="h-18" src="{{ asset('images/svg/paypal-2.svg') }}" alt="">
                                        <p class="sr-only">{{ $order->payment->brand }}</p>
                                    @elseif ($order->payment->brand != 'Paypal')
                                        <p class="text-gray-900">Ending with {{ $order->payment->last4  }}</p>
                                    @endif
                                </div>
                                @if($order->payment->brand != 'Paypal')
                                    <div class="ml-4 mt-4">
                                        <p class="text-gray-900">Ending with {{ $order->payment->last4  }}</p>
                                    </div>
                                @endif
                            </dd>
                        </div>
                    </dl>
                @endif
                <div class="mt-16 border-t border-gray-200 py-6 text-right">
                    <a href="{{ route('tickets.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                        {{ __('layout.navigation.browse_tickets') }}
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
