@props([
    'carts',
    'hasExtra' => false,
])

<div class="hidden lg:block lg:col-span-1">

    @if($carts?->items)
        <section aria-labelledby="summary-heading" class="hidden w-full sticky top-0 max-w-md flex-col bg-gray-50 lg:flex">
            <div class="sticky bottom-0 flex-none border-t border-gray-200 bg-gray-50 p-6">
                <h2 class="text-lg font-medium text-gray-900">Summary</h2>

                <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
                    @foreach($carts?->items as $item)
                        @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                            <div class="flex justify-between">
                                <dt class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">{{ $item->quantity }} * {{ $item->name }}</dt>
                                <dd class="text-{{ $item->attributes->color }}-900 whitespace-nowrap">€ {{ $item->price }}</dd>
                            </div>
                        @endif
                    @endforeach

                    @if($hasExtra)
                        <x-wedo.divider label="Extra"></x-wedo.divider>
                    @endif

                    @foreach($carts?->items as $item)
                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                            <div class="flex justify-between">
                                <dt class="uppercase btn-title truncate text-xs text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-400 to-{{ app_color() }}-900">{{ $item->quantity }} * {{ $item->name }}</dt>
                                <dd class="text-{{ app_color() }}-900 whitespace-nowrap">€ {{ $item->price }}</dd>
                            </div>
                        @endif
                    @endforeach

                    <form wire:submit.prevent="discount">
                        <div class="flex space-x-4 border-t border-gray-200 pt-6">
                            <input type="text" id="discount-code" name="discount-code" placeholder="Discount code" class="uppercase block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <button type="submit" class="uppercase flex items-center justify-center rounded-md bg-gray-200 px-4 text-sm font-medium text-gray-600 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                                <x-wedo.loader wire:loading wire:target="discount"></x-wedo.loader>
                                Apply
                            </button>
                        </div>
                    </form>

                    <div class="flex items-center justify-between pt-6 text-gray-900">
                        <dt class="relative text-base btn-title uppercase font-extrabold">
                            Total
                            @if($carts?->total_quantity)
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-{{ app_color() }}-600 rounded-full">
                                                        {{ $carts?->total_quantity }}
                                                    </span>
                            @endif
                        </dt>
                        <dd class="text-base whitespace-nowrap font-extrabold">€ {{ $carts?->total }}</dd>
                    </div>
                    <div class="flex items-center pt-6">
                        <img src="https://cdn.shopify.com/s/files/1/0468/3798/9535/t/5/assets/cart_checkout_icon.png?v=21454973454622682011617284421" alt="">
                    </div>
                </dl>


            </div>
        </section>
    @else
        <x-wedo.pages.layouts.empty-state class="bg-gray-50">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="text-center">
                <x-heroicon-o-shopping-cart class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-shopping-cart>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No items</h3>
            </div>
        </x-wedo.pages.layouts.empty-state>
    @endif

</div>
