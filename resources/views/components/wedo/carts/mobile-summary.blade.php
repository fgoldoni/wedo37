@props([
    'carts',
    'hasExtra' => false,
    'continue' => true,
])

<div
    x-data="{
                                        open: false,
                                        focus: false,
                                        onEscape() {
                                            this.open = !1,
                                            this.$refs.button.focus()
                                       },
                                        onClosePopoverGroup (e) {
                                            e.detail.contains(this.$el) && (this.open=!1)
                                        },
                                        toggle (e) {
                                            this.open = !this.open,
                                            this.open ? this.restoreEl = e.currentTarget : this.restoreEl && this.restoreEl.focus()
                                       },

                                    }"
    @keydown.escape="onEscape"
    @close-popover-group.window="onClosePopoverGroup"

    class="fixed bottom-0 inset-x-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
    <div class="relative z-10 bg-white border-t border-gray-200 px-4 sm:px-6">
        <div class="max-w-lg mx-auto">
            <button
                @click="toggle"
                @mousedown="if (open) $event.preventDefault()"
                type="button"
                x-ref="button"
                class="w-full flex items-center py-6 font-medium"
                aria-expanded="false">
                                            <span class="relative text-base mr-auto btn-title uppercase font-extrabold">
                                                Total
                                                @if($carts?->total_quantity)
                                                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-{{ app_color() }}-600 rounded-full">
                                                        {{ $carts?->total_quantity }}
                                                    </span>
                                                @endif
                                            </span>
                <span class="text-base mr-2 font-extrabold">€ {{ $carts?->total ?? 0 }}</span>
                <!-- Heroicon name: solid/chevron-up -->
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            @if($continue)
                <div class="z-20 border-t border-b border-gray-200 py-1 text-sm font-medium text-gray-500">
                    <button
                        type="button"
                        {{ $attributes->only(['id']) }}
                        {{ $carts?->items ?  '' : 'disabled'}}
                        wire:click="continue"
                        @class([
                               'w-full uppercase rounded border border-transparent py-2 px-4 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-' . app_color() . '-500 focus:ring-offset-2',
                               'btn-base text-white bg-gradient-to-r from-' . app_color() . '-500 via-' .  app_color() . '-600 to-' . app_color() . '-700 hover:bg-gradient-to-br' => $carts?->items,
                               'bg-' . app_color() . '-100 text-' . app_color() . '-400 cursor-not-allowed' => ! $carts?->items
                           ])>
                        <x-wedo.loader wire:loading wire:target="continue"></x-wedo.loader>
                        {{ __('Continue') }}
                    </button>
                    <div class="flex items-center justify-center mt-2">
                        <img class="h-8" src="https://cdn.shopify.com/s/files/1/0468/3798/9535/t/5/assets/cart_checkout_icon.png?v=21454973454622682011617284421" alt="Secure Cart">
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div>
        <!--
          Mobile summary overlay, show/hide based on mobile summary state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div
            x-show="open"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-25"
            @click="toggle"
            x-cloak
        ></div>

        <!--
          Mobile summary, show/hide based on mobile summary state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-y-full"
            To: "translate-y-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-y-0"
            To: "translate-y-full"
        -->
        <div x-show="open"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="translate-y-full"
             x-transition:enter-end="translate-y-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-y-0"
             x-transition:leave-end="translate-y-full"
             class="relative bg-white px-4 py-6 sm:px-6"
             x-ref="panel"
             @click.away="open = false"
             x-cloak>

            @if($carts?->items)
                <h2 class="max-w-lg mx-auto text-lg font-medium text-gray-900 pb-6">Summary</h2>
                <dl class="max-w-lg mx-auto space-y-6">
                    @foreach($carts?->items as $item)
                        @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                            <div class="flex items-center justify-between">
                                <dt class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">{{ $item->quantity }} * {{ $item->name }}</dt>
                                <dd class="whitespace-nowrap">€ {{ $item->price }}</dd>
                            </div>
                        @endif
                    @endforeach

                    @if($hasExtra)
                        <x-wedo.divider label="Extra"></x-wedo.divider>
                    @endif

                    @foreach($carts?->items as $item)
                        @if($item->associatedModel === \App\Models\Extra::$apiModel)
                            <div class="flex items-center justify-between">
                                <dt class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-400 to-{{ app_color() }}-900">{{ $item->quantity }} * {{ $item->name }}</dt>
                                <dd class="whitespace-nowrap">€ {{ $item->price }}</dd>
                            </div>
                        @endif
                    @endforeach
                </dl>
            @else
                <x-wedo.pages.layouts.empty-state>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="text-center">
                        <x-heroicon-o-shopping-cart class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-shopping-cart>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No items</h3>
                    </div>
                </x-wedo.pages.layouts.empty-state>
            @endif
        </div>
    </div>
</div>
