<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">

    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="col-span-1 lg:col-span-2">
                <x-wedo.form-section submit="save">
                    <x-slot name="title">
                        {{ __('Contact information') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('You won\'t be charged until the next step.') }}
                    </x-slot>

                    <x-slot name="form">

                        <div class="col-span-4 sm:col-span-2">
                            <x-wedo.input.group for="name" :error="$errors->first('name')" isRequired inline>

                                <x-wedo.input.text value="{{ $name }}" type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                            </x-wedo.input.group>
                        </div>

                        <div class="col-span-4 sm:col-span-2">
                            <x-wedo.input.group for="email" :error="$errors->first('email')" isRequired inline>

                                <x-wedo.input.text value="{{ $email }}" type="email" name="email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required/>

                            </x-wedo.input.group>
                        </div>

                        <div class="col-span-4">
                            <div wire:ignore x-data="internationalNumber('#phone')" class="col-span-1 sm:col-span-2">
                                <x-wedo.input.group label="{{ __('Phone number') }}" for="phone" :error="$errors->first('phone')" isRequired>

                                    <x-wedo.input.text wire:model.lazy="phone" type="tel" name="phone" id="phone" required></x-wedo.input.text>

                                </x-wedo.input.group>
                            </div>
                            @if ($errors->first('phone'))
                                <p class="mt-1 text-sm text-rose-500 dark:text-rose-400">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>

                        <div class="col-span-4">
                            <x-wedo.input.group :error="$errors->first('address')" label="{{ __('Frendly Address') }}" for="address" optional>

                                <x-wedo.input.textarea wire:model.lazy="address" name="address" id="address" isRequired></x-wedo.input.textarea>

                            </x-wedo.input.group>
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-wedo.button type="submit">
                            <x-wedo.loader wire:loading wire:target="updateProfileInformation"></x-wedo.loader>
                            Save
                        </x-wedo.button>
                    </x-slot>
                </x-wedo.form-section>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-1">
                        <section aria-labelledby="summary-heading" class="mt-16 bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5">
                            <h2 id="summary-heading" class="text-lg font-medium text-gray-900">{{ __('Basket') }}</h2>

                            <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
                                @foreach($carts?->items as $item)
                                    <li class="flex items-start py-6 space-x-4">
                                        <img src="{{ $item->attributes->avatar_url }}" alt="{{ $item->name }}" class="btn-img flex-none w-20 h-20 rounded-md object-center object-cover">
                                        <div class="flex-auto space-y-1 uppercase text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">
                                            <h3>{{ $item->quantity }} * {{ $item->name }}</h3>
                                        </div>
                                        <p class="flex-none text-base font-medium">€ {{ $item->price }}</p>
                                    </li>
                                @endforeach
                            </ul>

                            <dl class="hidden text-sm font-medium text-gray-900 space-y-6 border-t border-gray-200 pt-6 lg:block">
                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd>€ {{ $carts->sub_total }}</dd>
                                </div>

                                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                    <dt class="text-base uppercase">Total</dt>
                                    <dd class="text-base">€ {{ $carts->total }}</dd>
                                </div>
                            </dl>

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
                                            <span class="text-base mr-auto uppercase">Total</span>
                                            <span class="text-base mr-2">€ {{ $carts->total }}</span>
                                            <!-- Heroicon name: solid/chevron-up -->
                                            <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
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

                                        <dl class="max-w-lg mx-auto space-y-6">
                                            @foreach($carts?->items as $item)
                                                <div class="flex items-center justify-between">
                                                    <dt class="text-gray-600 uppercase">{{ $item->quantity }} * {{ $item->name }}</dt>
                                                    <dd>$ {{ $item->price }}</dd>
                                                </div>
                                            @endforeach


                                            <div class="flex items-center justify-between">
                                                <dt class="text-gray-600 uppercase">Subtotal</dt>
                                                <dd>€ {{ $carts->sub_total }}</dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
