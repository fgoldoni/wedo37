@props(['order'])
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 sm:py-8 lg:px-8 shadow-md">
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
                    {!! QrCode::size(250)->generate(route('confirmation.index', ['orderId' => $order->id])) !!}
                </div>

                <div class="flex flex-col gap-8">
                    <p class="text-2xl font-medium tracking-wider capitalize">{{ $order->user->name }}</p>

                    <div class="flex flex-col gap-1">
                        <p class="font-medium">{{ __('Number of items') }}:</p>
                        <p class="text-gray-400 text-sm">
                            {{ $order->total_quantity }} {{ __('Item(s)') }}
                        </p>
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

        <!--bill to -->
        <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 py-10 px-4">

            <div class="flex flex-col gap-8">

                <div class="flex flex-col gap-1">
                    <p class="font-medium">{{ __('Paid by') }}:</p>
                    <p class="text-gray-400 text-sm">
                        {{ $order->buyer->name }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ $order->buyer?->email }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ $order->buyer?->phone }}
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
                        {{ $order->team?->name }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ $order->event?->email }}
                    </p>
                    <p class="text-gray-400 text-sm">
                        {{ $order->event?->phone }}
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

        <div class="mt-8">
            <h2 class="sr-only">Products purchased</h2>

            <div class="space-y-24">
                @forelse($order->items as $item)
                    @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                        <div class="grid grid-cols-1 sm:gap-6">
                            <div class="bg-{{ $item->color }}-100">
                                <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
                                    <div class="relative">
                                        <div class="absolute inset-0 h-1/2 bg-{{ $item->color }}-100"></div>
                                        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                            <div class="mx-auto max-w-lg overflow-hidden rounded-lg shadow-lg lg:flex lg:max-w-none">
                                                <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                                                    <h3 class="text-2xl font-bold sm:text-3xl sm:tracking-tight uppercase text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->color }}-400 to-{{ $item->color }}-900">{{ $item->quantity  }} * {{ $item->name  }}</h3>
                                                    <p class="mt-6 text-base text-gray-500">{{ $order->user->name }}</p>
                                                    <div class="mt-8">
                                                        <div class="flex items-center">
                                                            <h4 class="flex-shrink-0 bg-white pr-4 text-base font-semibold text-indigo-600">What's included</h4>
                                                            <div class="flex-1 border-t-2 border-gray-200"></div>
                                                        </div>
                                                        <ul role="list" class="mt-8 space-y-5 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5 lg:space-y-0">
                                                            @php
                                                                $tags = is_array($item->tags) ? $item->tags : json_decode($item->tags);
                                                            @endphp

                                                            <li class="flex items-start lg:col-span-1">
                                                                <div class="flex-shrink-0">
                                                                    <!-- Heroicon name: mini/check-circle -->
                                                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </div>
                                                                <p class="ml-3 text-sm text-gray-700">{{ $item->attendees }} Person(s)</p>
                                                            </li>
                                                            @foreach($tags as $tag)
                                                                <li class="flex items-start lg:col-span-1">
                                                                    <div class="flex-shrink-0">
                                                                        <!-- Heroicon name: mini/check-circle -->
                                                                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <p class="ml-3 text-sm text-gray-700">{{ $tag }}</p>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 py-8 px-6 text-center lg:flex lg:flex-shrink-0 lg:flex-col lg:justify-center lg:p-12">
                                                    <p class="text-lg font-medium leading-6 text-gray-900">{{ app_team_name() }}</p>
                                                    <div class="mt-4 flex items-center justify-center text-5xl font-bold tracking-tight text-gray-900">
                                                        <h3 class="flex items-center text-{{ $item->color }}-900">
                                                        <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                                                          <span class="mr-2 text-2xl font-medium"> € </span>
                                                          <span class="font-semibold"> {{ $item->price }} </span>
                                                        </span>
                                                        </h3>
                                                    </div>
                                                    <div class="mt-6">
                                                        <div class="rounded-md shadow">
                                                            <a href="{{ route('tickets.show', Str::replace('ticket-', '', $item->id)) }}" class="flex items-center justify-center rounded-md border border-transparent bg-{{ app_color() }}-800 px-5 py-3 text-base font-medium text-white hover:bg-{{ app_color() }}-900">Buy it again</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse

                @foreach($order->items as $item)
                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                            <x-wedo.divider label="Extras"></x-wedo.divider>
                            @break
                        @endif
                @endforeach

                <ul role="list" class="divide-y divide-gray-200">
                    @forelse($order->items as $item)
                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                            <li class="flex py-6 px-4 sm:px-6">
                                <div class="ml-6 flex flex-1 flex-col">
                                    <div class="flex">
                                        <div class="min-w-0 flex-1">
                                            <h4 class="text-sm">
                                                <a href="javascript:;" class="capitalize btn-title font-medium text-gray-700 hover:text-gray-800">{{ $item->name }}</a>
                                            </h4>
                                            <p class="mt-1 text-sm text-gray-500">{{ $item->quantity }} * € {{ $item->price }}</p>
                                        </div>

                                        <div class="ml-4 flow-root flex-shrink-0">
                                            <p class="mt-1 text-sm font-medium text-gray-900">€ {{ $item->sub_total }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>

        <!-- Billing -->
        <section aria-labelledby="summary-heading" class="mt-16">
            <h2 id="summary-heading" class="sr-only">Billing Summary</h2>

            <div class="bg-gray-100 py-6 px-4 sm:px-6 sm:rounded-lg lg:px-8 lg:py-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
                <dl class="grid grid-cols-2 gap-6 text-sm sm:grid-cols-2 md:gap-x-8 lg:col-span-7">
                    <div>
                        <dt class="font-medium text-gray-900">Billing address</dt>
                        @if($order->payment->brand === 'Paypal')
                            <dd class="mt-3 text-gray-500">
                                <span class="block">{{ $order->buyer?->name }}</span>
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

                <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:col-span-5">
                    @forelse($order->items as $item)
                        <div class="pb-4 flex items-center justify-between">
                            <dt class="text-gray-600 uppercase btn-title text-xs">{{ $item->name }}</dt>
                            <dd class="font-medium text-gray-900 whitespace-nowrap">{{ $item->quantity }} * € {{ $item->price }}</dd>
                        </div>
                    @empty
                    @endforelse
                    <div class="pt-4 flex items-center justify-between">
                        <dt class="font-medium text-gray-900 uppercase">Total</dt>
                        <dd class="font-medium text-{{ app_color() }}-600">€  {{ number_format($order->total, 2,'.', ' ')  }}</dd>
                    </div>
                </dl>
            </div>
        </section>
    </div>
</div>
