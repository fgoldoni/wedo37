<div class="bg-gray-50">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>

        <form wire:submit.prevent="save" class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
            <div>
                <div>
                    <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                    <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">

                        <x-wedo.input.group label="{{ __('Name') }}" for="name"  class="col-span-1 sm:col-span-2" :error="$errors->first('name')" isRequired inline>

                            <x-wedo.input.text wire:model.defer="name" type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                        </x-wedo.input.group>

                        <x-wedo.input.group label="{{ __('Email address') }}" for="email"  class="col-span-1 sm:col-span-2" :error="$errors->first('email')" isRequired inline>

                            <x-wedo.input.text wire:model.defer="email" type="email" name="email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required/>

                        </x-wedo.input.group>

                        <x-wedo.input.group label="{{ __('Phone') }}" for="phone"  class="col-span-1 sm:col-span-2" :error="$errors->first('phone')" optional inline>

                            <x-wedo.input.text wire:model.defer="phone" type="tel" name="phone" id="phone" placeholder="{{ __('Phone') }}" autocomplete="off"/>

                        </x-wedo.input.group>

                        <x-wedo.disclosure title="Shipping information" class="border-t border-gray-200 mt-8 mb-8">
                            <x-wedo.input.group label="{{ __('Friendly Address') }}" for="address"  class="col-span-1 sm:col-span-2" :error="$errors->first('address')" optional inline>

                                <x-wedo.input.textarea wire:model.defer="address"  name="address" id="address" placeholder="{{ __('Friendly Address') }}" autocomplete="off"/>

                            </x-wedo.input.group>

                            <div class="mt-10 border-t border-gray-200 pt-10">
                                <fieldset>
                                    <legend class="text-lg font-medium text-gray-900">Delivery method</legend>

                                    <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                                        <!--
                                          Checked: "border-transparent", Not Checked: "border-gray-300"
                                          Active: "ring-2 ring-indigo-500"
                                        -->
                                        <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
                                            <input type="radio" name="delivery-method" value="Standard" class="sr-only" aria-labelledby="delivery-method-0-label" aria-describedby="delivery-method-0-description-0 delivery-method-0-description-1">
                                            <span class="flex-1 flex">
                  <span class="flex flex-col">
                    <span id="delivery-method-0-label" class="block text-sm font-medium text-gray-900"> Standard </span>
                    <span id="delivery-method-0-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 4–10 business days </span>
                    <span id="delivery-method-0-description-1" class="mt-6 text-sm font-medium text-gray-900"> $5.00 </span>
                  </span>
                </span>
                                            <!--
                                              Not Checked: "hidden"

                                              Heroicon name: solid/check-circle
                                            -->
                                            <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <!--
                                              Active: "border", Not Active: "border-2"
                                              Checked: "border-indigo-500", Not Checked: "border-transparent"
                                            -->
                                            <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                                        </label>

                                        <!--
                                          Checked: "border-transparent", Not Checked: "border-gray-300"
                                          Active: "ring-2 ring-indigo-500"
                                        -->
                                        <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
                                            <input type="radio" name="delivery-method" value="Express" class="sr-only" aria-labelledby="delivery-method-1-label" aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                                            <span class="flex-1 flex">
                  <span class="flex flex-col">
                    <span id="delivery-method-1-label" class="block text-sm font-medium text-gray-900"> Express </span>
                    <span id="delivery-method-1-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 2–5 business days </span>
                    <span id="delivery-method-1-description-1" class="mt-6 text-sm font-medium text-gray-900"> $16.00 </span>
                  </span>
                </span>
                                            <!--
                                              Not Checked: "hidden"

                                              Heroicon name: solid/check-circle
                                            -->
                                            <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <!--
                                              Active: "border", Not Active: "border-2"
                                              Checked: "border-indigo-500", Not Checked: "border-transparent"
                                            -->
                                            <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </x-wedo.disclosure>
                    </div>
                </div>

                <!-- Payment -->
                <div class="mt-10 pt-6 border-t border-gray-200 sm:flex sm:items-center sm:justify-between">
                    <button type="submit" wire:loading.attr="disabled" wire:target="save" class="hover:scale-105 hover:shadow-2xl ease-in-out duration-150 w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500 sm:ml-6 sm:order-last sm:w-auto">
                        <x-wedo.loader wire:loading wire:target="save"/>
                        {{ __('Continue') }}
                    </button>
                    <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">You won't be charged until the next step.</p>
                </div>
            </div>

            <!-- Order summary -->
            <div class="mt-10 lg:mt-0">
                <h2 class="text-lg font-medium text-gray-900">Extra</h2>

                <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <h3 class="sr-only">Items in your cart</h3>
                    <ul role="list" class="divide-y divide-gray-200">
                        <li class="flex py-6 px-4 sm:px-6">
                            <div class="flex-shrink-0">
                                <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                            </div>

                            <div class="ml-6 flex-1 flex flex-col">
                                <div class="flex">
                                    <div class="min-w-0 flex-1">
                                        <h4 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> Basic Tee </a>
                                        </h4>
                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                        <p class="mt-1 text-sm text-gray-500">Large</p>
                                    </div>

                                    <div class="ml-4 flex-shrink-0 flow-root">
                                        <button type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Remove</span>
                                            <!-- Heroicon name: solid/trash -->
                                            <x-wedo.secondary-button>
                                                <x-heroicon-o-plus class="h-5 w-5"></x-heroicon-o-plus>
                                                Add
                                            </x-wedo.secondary-button>

                                        </button>
                                    </div>
                                </div>

                                <div class="flex-1 pt-2 flex items-end justify-between">
                                    <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>

                                    <div class="ml-4">
                                        <label for="quantity" class="sr-only">Quantity</label>
                                        <select id="quantity" name="quantity" class="rounded-md border border-gray-300 text-base font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-{{ app_color() }}-500 focus:border-{{ app_color() }}-500 sm:text-sm">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- More products... -->
                    </ul>
                    <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm uppercase">{{ $ticket?->name }}</dt>
                            <dd class="text-sm font-medium text-gray-900">$ {{ $ticket?->price }}</dd>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                            <dt class="text-base font-medium">Total</dt>
                            <dd class="text-base font-medium text-gray-900">$ {{ $ticket?->price }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </form>
    </div>
</div>

