@props(['order'])
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 sm:py-8 lg:px-8 shadow-md">
        <h2 class="btn-title text-3xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 uppercase">{{ $order->event?->name }}</h2>

        <div class="text-sm border-b border-gray-200 mt-2 pb-5 sm:flex sm:justify-between">
            <dl class="flex">
                <dt class="text-gray-500">Nr:&nbsp;</dt>
                <dd class="font-medium text-gray-900">{{ $order->id }}</dd>
            </dl>
            <div class="mt-4 sm:mt-0">
                <dd class="font-medium text-gray-900"><time datetime="{{ $order->created_at }}">{{ \Illuminate\Support\Carbon::parse($order->created_at)->isoFormat('MMM DD, Y') }}</time></dd>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="sr-only">Products purchased</h2>

            <div class="space-y-24">
                @forelse($order->items as $item)
                    @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                        <div class="grid grid-cols-1 text-sm sm:grid-rows-1 sm:grid-cols-12 sm:gap-x-6 md:gap-x-8 lg:gap-x-8">
                            <div class="sm:col-span-4 md:col-span-5 md:row-end-2 md:row-span-2">
                                <div
                                    @class([
                                        'p-10 bg-gray-50 border-t-2 shadow-2xl -translate-y-2 border-' . $item->color . '-400 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
                                    ])>
                                    <div class="flex flex-col pb-8 border-b border-gray-200">
                                        <h3 class="flex items-center text-{{ $item->color }}-900">
                                                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                                                      <span class="mr-2 text-2xl font-medium"> € </span>
                                                      <span class="font-semibold"> {{ $item->price }} </span>
                                                    </span>
                                        </h3>
                                        <h4 class="uppercase mt-5 text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->color }}-400 to-{{ $item->color }}-900">{{ $item->quantity }} * {{ $item->name }}</h4>
                                        <p class="mt-4 text-gray-900 cursor-pointer uppercase">{{ $order->user?->name }}</p>
                                    </div>
                                    <ul class="px-3 pt-8 space-y-3">
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Unlimited Access
                                        </li>
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            5 Team Members
                                        </li>
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            10,000 Api Calls
                                        </li>
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Email Support
                                        </li>
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Email Support
                                        </li>
                                        <li class="flex font-medium text-gray-500">
                                            <svg class="w-6 h-6 mr-1.5 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Email Support
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sm:col-span-12 md:col-span-7">
                                <section class="h-auto bg-white relative overflow-hidden">
                                    <!-- Top Mesh BG -->
                                    <div class="absolute top-0 opacity-90 overflow-hidden w-full mx-auto">
                                        <img src="https://cdn.devdojo.com/images/june2022/mesh.png">
                                    </div>
                                    <div class="bg-gradient-to-t from-white z-10 absolute inset-0"></div>
                                    <div class="flex relative py-10 flex-col z-20 px-10 justify-center items-center tracking-normal leading-6 sm:text-center text-white box-border">
                                        <h2 class="uppercase mb-8 font-sans text-gray-900 text-5xl sm:text-6xl font-semibold tracking-tighter leading-none sm:max-w-lg">
                                            {{ \Illuminate\Support\Carbon::parse($item->event->start)->isoFormat(    'MMM DD')  }}
                                        </h2>
                                        <p class="text-2xl font-normal text-gray-500 text-center tracking-tight">
                                            {{ $item->event->address }}
                                        </p>
                                        <a href="tel: {{ $item->event->phone }}" class="btn-title  text-center  text-xl font-normal text-{{ app_color() }}-500 tracking-tight">
                                            {{ $item->event->phone }}
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
                <ul role="list" class="divide-y divide-gray-200">
                    @forelse($order->items as $item)
                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                            <li class="p-4 sm:p-6">
                                <div class="flex items-center sm:items-start">
                                    <div class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden sm:w-40 sm:h-40">
                                        <img src="{{ asset('images/extra.jpg') }}" alt="{{ $item->name }}" class="btn-img w-full h-full object-center object-cover">
                                    </div>
                                    <div class="flex-1 ml-6 text-sm">
                                        <div class="font-medium text-gray-900 sm:flex sm:justify-between">
                                            <h5 class="btn-title uppercase">{{ $item->quantity }} * {{ $item->name }}</h5>
                                            <p class="mt-2 sm:mt-0">€ {{ $item->price }}</p>
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
                                <span class="block">{{ $order->user?->name }}</span>
                                <span class="block">{{ $order->user?->street }}</span>
                                <span class="block">{{ $order->user?->zip }} {{ $order->user?->city }}, {{ $order->user?->country_code }}</span>
                            </dd>
                        @else
                            <dd class="mt-3 text-gray-500">
                                <span class="block">{{ $order->user?->name }}</span>
                                <span class="block">{{ $order->user?->email }}</span>
                                <span class="block">{{ $order->user?->phone }}</span>
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
