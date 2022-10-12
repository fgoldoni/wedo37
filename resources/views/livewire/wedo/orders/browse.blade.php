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

                    <div class="relative flex justify-end lg:hidden">
                        <div class="flex items-center">
                            <button type="button" class="-m-2 flex items-center p-2 text-gray-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Options for order WU88191111</span>
                                <!-- Heroicon name: outline/ellipsis-vertical -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div class="absolute right-0 z-10 mt-2 w-40 origin-bottom-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-0">View</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-0-item-1">Invoice</a>
                            </div>
                        </div>
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
                                    <div class="flex items-center">
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
