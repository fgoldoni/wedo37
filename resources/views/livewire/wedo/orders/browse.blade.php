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
                            <dt class="font-medium text-gray-900">{{ __('Order Number') }}</dt>
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
                            <x-dropdown.item href="{{ route('confirmation.index', ['orderId' => $order->id]) }}" label="View" />
                            <x-dropdown.item href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" separator label="Invoice" />
                        </x-wireui-dropdown>
                    </div>

                    <div class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4">
                        <a href="{{ route('confirmation.index', ['orderId' => $order->id]) }}" class="flex items-center justify-center rounded-md border border-gray-300 bg-white py-2 px-2.5 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <span>{{ __('Details') }}</span>
                            <span class="sr-only">{{ $order->id }}</span>
                        </a>
                        <a href="{{ env('API_URL') . '/admin/orders/' . $order->id . '/edit' }}" class="flex items-center justify-center rounded-md border border-gray-300 bg-white py-2 px-2.5 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <span>{{ __('Check-in') }}</span>
                            <span class="sr-only">for order {{ $order->id }}</span>
                        </a>
                    </div>
                </div>
                @forelse($order->items as $item)
                    @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                        <h4 class="sr-only">Items</h4>
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="p-4 sm:p-6">
                                <div class="flex items-center sm:items-start">
                                    <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-gray-200 sm:h-40 sm:w-40">
                                        <img src="{{ $item->avatar_url }}" alt="{{ $item->name }}" class="sm:translate-x-12 md:translate-x-0 hover:scale-125 transition-all ease-out cursor-pointer duration-200 h-full w-full object-cover object-center">
                                    </div>
                                    <div class="ml-6 flex-1 text-sm">
                                        <div class="font-medium text-gray-900 sm:flex sm:justify-between">
                                            <h5 class="text-2xl font-bold sm:text-3xl sm:tracking-tight uppercase text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->color }}-400 to-{{ $item->color }}-900">{{ $item->quantity  }} * {{ $item->name  }}</h5>
                                            <p class="mt-2 sm:mt-0">
                                               <span class="flex items-start text-2xl tracking-tight sm:text-3xl">
                                                  <span class="mr-2 text-xl font-medium"> € </span>
                                                  <span class="font-semibold"> {{ $item->price }} </span>
                                                </span>
                                            </p>
                                        </div>
                                        <p class="hidden text-gray-500 sm:mt-2 sm:block">
                                            {{ $item->description }}
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-6 sm:flex sm:justify-between">
                                    <div class="flex items-center space-x-2">
                                        <!-- Heroicon name: mini/check-circle -->
                                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                        </svg>
                                        <p class="ml-2 text-sm font-medium text-gray-500">{{ $item->attendees }} Person(s)</p>
                                    </div>

                                    <div class="mt-6 flex items-center space-x-4 divide-x divide-gray-200 border-t border-gray-200 pt-4 text-sm font-medium sm:mt-0 sm:ml-4 sm:border-none sm:pt-0">
                                        <div class="flex flex-1 justify-center">
                                            <a href="{{ route('tickets.show', Str::replace('ticket-', '', $item->id)) }}" class="whitespace-nowrap text-indigo-600 hover:text-indigo-500">View product</a>
                                        </div>
                                        <div class="flex flex-1 justify-center pl-4">
                                            <a href="{{ route('tickets.show', Str::replace('ticket-', '', $item->id)) }}" class="whitespace-nowrap text-indigo-600 hover:text-indigo-500">{{ __('Buy it again') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- More products... -->
                        </ul>
                    @endif
                @empty
                @endforelse
            </div>
        @empty
        @endforelse
    </section>

</main>
