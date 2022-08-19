<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-wedo.basket :back="route('orders.index')" :back-name="__('Browse orders')" :link="__('Confirmation')"></x-wedo.basket>


    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

        <div class="lg:col-span-3">
            <div class="bg-green-50 border-l-4 border-green-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Payment successful</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p class="mt-2 text-4xl font-bold tracking-tight sm:tracking-tight sm:text-5xl">Thanks for ordering</p>
                            <p class="mt-2 text-base text-gray-500">We appreciate your order, we’re currently processing it. So hang tight and we’ll send you confirmation very soon!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-3">
            <div class="bg-white">
                <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Order Details</h1>

                    <div class="text-sm border-b border-gray-200 mt-2 pb-5 sm:flex sm:justify-between">
                        <dl class="flex">
                            <dt class="text-gray-500">Order number&nbsp;</dt>
                            <dd class="font-medium text-gray-900">{{ $order->id }}</dd>
                            <dt>
                                <span class="sr-only">Date</span>
                                <span class="text-gray-400 mx-2" aria-hidden="true">&middot;</span>
                            </dt>
                            <dd class="font-medium text-gray-900"><time datetime="2021-03-22">{{ $order->created_at }}</time></dd>
                        </dl>
                        <div class="mt-4 sm:mt-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View invoice<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h2 class="sr-only">Products purchased</h2>

                        <div class="space-y-24">
                            @forelse($order->items as $item)
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
                                                <p class="mt-4 text-gray-900 text-xl cursor-pointer uppercase">{{ $item->event->artist }}</p>
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
                                    <div class="mt-6 sm:col-span-7 sm:mt-0 md:row-end-1">
                                        <h3 class="text-lg font-medium text-gray-900 uppercase">
                                            <a href="#">{{ $item->event->name }}</a>
                                        </h3>
                                        <p class="font-medium text-gray-900 mt-1">{{ $item->user->name }}</p>
                                        <p class="text-gray-500 mt-3 whitespace-pre-wrap">{{ $item->description }}</p>
                                    </div>
                                    <div class="sm:col-span-12 md:col-span-7">
                                        <dl class="grid grid-cols-1 gap-y-8 border-b py-8 border-gray-200 sm:grid-cols-2 sm:gap-x-6 sm:py-6 md:py-10">
                                            <div>
                                                <dt class="font-medium text-gray-900">{{ __('Location') }}</dt>
                                                <dd class="mt-3 text-gray-500">
                                                    {{ $item->event->address }}
                                                </dd>
                                            </div>
                                            <div>
                                                <dt class="font-medium text-gray-900">Shipping updates</dt>
                                                <dd class="mt-3 text-gray-500 space-y-3">
                                                    <p>f•••@example.com</p>
                                                    <p>1•••••••••40</p>
                                                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                                                </dd>
                                            </div>
                                        </dl>
                                        <p class="font-medium text-gray-900 mt-6 md:mt-10">Start on <time datetime="2021-03-24">{{ $item->event->start }}</time></p>
                                        <div class="mt-6">
                                            <div class="bg-gray-200 rounded-full overflow-hidden">
                                                <div class="h-2 bg-indigo-600 rounded-full" style="width: calc(1 * 100%)"></div>
                                            </div>
                                            <div class="hidden sm:grid grid-cols-4 font-medium text-gray-600 mt-6">
                                                <div class="text-indigo-600">Ticket placed</div>
                                                <div class="text-center text-indigo-600">Processing</div>
                                                <div class="text-center text-indigo-600">Contact information</div>
                                                <div class="text-right text-indigo-600">Payment</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <!-- Billing -->
                    <div class="mt-24">
                        <h2 class="sr-only">Billing Summary</h2>

                        <div class="bg-gray-50 rounded-lg py-6 px-6 lg:px-0 lg:py-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
                            <dl class="grid grid-cols-1 gap-6 text-sm sm:grid-cols-2 md:gap-x-8 lg:pl-8 lg:col-span-5">
                                <div>
                                    <dt class="font-medium text-gray-900">Billing address</dt>
                                    <dd class="mt-3 text-gray-500">
                                        <span class="block">Floyd Miles</span>
                                        <span class="block">7363 Cynthia Pass</span>
                                        <span class="block">Toronto, ON N3Y 4H8</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-900">Payment information</dt>
                                    <dd class="mt-3 flex">
                                        <div>
                                            <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                                                <rect width="36" height="24" rx="4" fill="#224DBA" />
                                                <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff" />
                                            </svg>
                                            <p class="sr-only">Visa</p>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-900">Ending with 4242</p>
                                            <p class="text-gray-600">Expires 02 / 24</p>
                                        </div>
                                    </dd>
                                </div>
                            </dl>

                            <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:pr-8 lg:col-span-7">
                                @forelse($order->items as $item)
                                    <div class="pb-4 flex items-center justify-between">
                                        <dt class="text-gray-600 uppercase btn-title">{{ $item->name }}</dt>
                                        <dd class="font-medium text-gray-900">{{ $item->quantity }} * € {{ $item->price }}</dd>
                                    </div>
                                @empty
                                @endforelse
                                <div class="pt-4 flex items-center justify-between">
                                    <dt class="font-medium text-gray-900 uppercase">Total</dt>
                                    <dd class="font-medium text-indigo-600">€  {{ number_format($order->total, 2,'.', ' ')  }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
