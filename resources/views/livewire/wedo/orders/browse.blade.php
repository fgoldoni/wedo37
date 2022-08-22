<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 sm:py-24">
        <div class="max-w-xl">
            <h1 id="your-orders-heading" class="text-3xl font-bold tracking-tight text-gray-900">Your Orders</h1>
        </div>

        <div class="mt-12 space-y-16 sm:mt-16">
            @forelse($orders as $order)
                <section aria-labelledby="4376-heading">
                    <div class="space-y-1 md:flex md:items-baseline md:space-y-0 md:space-x-4">
                        <h2 id="4376-heading" class="text-lg font-medium text-gray-900 md:flex-shrink-0">Order # {{ $order->id }}</h2>
                        <div class="space-y-5 md:flex-1 md:min-w-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
                            <div class="flex text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 -mb-6 flow-root border-t border-gray-200 divide-y divide-gray-200">
                        <dl class="text-sm font-medium text-gray-500 mt-10 space-y-6">
                            @foreach($order->items as $item)
                                <div class="flex justify-between">
                                    <dt class="btn-title text-xs sm:text-base">{{ $item->quantity }} * {{ $item->name }}</dt>
                                    <dd class="text-gray-900">€ {{ $item->price }}</dd>
                                </div>
                            @endforeach

                            <div class="flex justify-between">
                                <dt class="flex btn-title text-xs sm:text-base">
                                    Subtotal
                                </dt>
                                <dd class="text-gray-900">€ {{ $order->sub_total }}</dd>
                            </div>
                            <div class="flex justify-between font-bold">
                                <dt class="flex btn-title text-xs sm:text-base">
                                    Total
                                    <span class="ml-2 rounded-full bg-gray-200 text-xs text-gray-600 py-0.5 px-2 tracking-wide">
                                        {{ $order->payment->brand }}
                                    </span>
                                </dt>
                                <dd class="text-gray-900">€ {{ $order->total }}</dd>
                            </div>
                        </dl>

                        <!-- More products... -->
                    </div>
                </section>
            @empty
            @endforelse

            <!-- More orders... -->
        </div>
    </div>
</div>

