<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts?->total_quantity)
        <x-wedo.basket :carts="$carts" :link="__('Contact information')"></x-wedo.basket>

        <h2 class="sr-only">Checkout</h2>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="lg:col-span-3">
                <x-wedo.partials.alert></x-wedo.partials.alert>
            </div>
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1">
                    <section class="relative w-full bg-white">
                        <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>
                        <x-wedo.form-section submit="continue">
                            <x-slot name="title">
                                {{ __('Contact information') }}
                            </x-slot>

                            <x-slot name="description">
                                {{ __('You won\'t be charged until the next step.') }}
                            </x-slot>

                            <x-slot name="form">

                                <div class="col-span-4">
                                    <x-wedo.input.group label="{{ __('Name') }}" for="name" :error="$errors->first('name')" isRequired>

                                        <x-wedo.input.text wire:model.lazy="name" type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                                    </x-wedo.input.group>
                                </div>

                                <div class="col-span-4">
                                    <x-wedo.input.group label="{{ __('Email address') }}"  for="email" :error="$errors->first('email')" isRequired>

                                        <x-wedo.input.text wire:model.lazy="email" type="email" name="email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required/>

                                    </x-wedo.input.group>
                                </div>

                                <div class="col-span-4">
                                    <x-wedo.input.group label="{{ __('Confirm email') }}"  for="email_confirmation" :error="$errors->first('email_confirmation')" isRequired>

                                        <x-wedo.input.text wire:model.lazy="email_confirmation" type="email" name="email_confirmation" id="email_confirmation" placeholder="{{ __('Confirm email') }}" autocomplete="off" required/>

                                    </x-wedo.input.group>
                                </div>

                                <div class="col-span-4">
                                    <x-wedo.input.group label="{{ __('Phone number') }}"  for="phone" :error="$errors->first('phone')" isRequired>

                                        <x-wedo.input.text wire:model.lazy="phone" type="text" name="phone" id="phone" placeholder="{{ __('Phone number') }}" autocomplete="off" required/>

                                    </x-wedo.input.group>
                                </div>

                                <div class="col-span-4">
                                    <div class="flex space-x-2 relative">
                                        <div class="flex h-5 items-center ">
                                            <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        </div>
                                        <label for="same-as-shipping" class="font-medium text-gray-500">I accept the <a href="javascript:;" class="btn-title underline cursor-pointer text-{{ app_color() }}-500">terms and conditions</a> </label>
                                    </div>
                                </div>
                            </x-slot>
                        </x-wedo.form-section>
                        <x-wedo.continue :disabled="!$carts?->items" class="py-6 px-4 sm:p-6"></x-wedo.continue>
                        <x-wedo.carts.mobile-summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.mobile-summary>
                    </section>
                </div>
            </div>

            <x-wedo.carts.summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.summary>
        </div>
    @else
        <div class="text-center max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
            <x-heroicon-o-shopping-bag class="mx-auto h-12 w-12 text-gray-400"></x-heroicon-o-shopping-bag>

            <h3 class="uppercase mt-2 text-sm font-medium text-gray-900">No Basket</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating a new basket.</p>
            <div class="mt-6">
                <a href="{{ route('tickets.index') . '?filters[events][0]=' . app_event()->id }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                    <x-heroicon-o-shopping-bag class="-ml-1 mr-2 h-5 w-5"></x-heroicon-o-shopping-bag>
                    {{ __('layout.navigation.browse_tickets') }}
                </a>
            </div>
        </div>
    @endif

</main>
