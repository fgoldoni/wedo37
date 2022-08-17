@props(['carts', 'text' => null])

<div class="overflow-hidden">
    <h2 class="sr-only" id="basket-overview-title">Basket Overview</h2>
    <div class="p-6">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="sm:flex sm:space-x-5">
                <div class="flex-shrink-0">
                    <img class="btn-img mx-auto h-20 w-20 rounded-full" src="{{ app_event()->avatar_url }}" alt="">
                </div>
                <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                    @if($text)
                        <p class="text-sm font-medium text-gray-600">{{ $text }}</p>
                    @endif

                    <p class="text-xl font-bold text-gray-900 sm:text-2xl">Your Basket</p>
                    <p class="text-sm font-medium text-gray-600">€ {{ $carts->total }}</p>
                </div>
            </div>
            <div class="mt-5 flex justify-center sm:mt-0">
                <a href="{{ route('checkout.index') }}" class="btn-base flex justify-center items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 sm:text-sm"> Continue </a>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-200 grid grid-cols-1 divide-y divide-gray-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x">
        <div class="px-6 py-5 text-sm font-medium text-center">
            <span class="text-gray-900">{{ $carts->total_quantity }}</span>
            <span class="text-gray-600">Tickets</span>
        </div>

        <div class="px-6 py-5 text-sm font-medium text-center">
            <span class="text-gray-900">{{ $carts->total_quantity }}</span>
            <span class="text-gray-600">Attendees</span>
        </div>

        <div class="px-6 py-5 text-sm font-medium text-center">
            <span class="text-gray-900">{{ $carts->total_quantity }}</span>
            <span class="text-gray-600">Extras</span>
        </div>
    </div>
</div>
