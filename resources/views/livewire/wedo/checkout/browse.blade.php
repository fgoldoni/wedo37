<div class="bg-gray-50">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>

        <form wire:submit.prevent="save" class="lg:grid lg:grid-cols-3 lg:gap-x-12 xl:gap-x-16">
            <div class="lg:col-span-2 bg-white border border-gray-200 shadow-xl">
                <div class="pt-10 px-4 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">Payment</h2>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Payment type</legend>
                        <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                            <div class="flex items-center">
                                <input id="credit-card" name="payment-type" type="radio" checked class="focus:ring-{{ app_color() }}-500 h-4 w-4 text-{{ app_color() }}-600 border-gray-300">
                                <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700"> Credit card </label>
                            </div>

                            <div class="flex items-center">
                                <input id="paypal" name="payment-type" type="radio" class="focus:ring-{{ app_color() }}-500 h-4 w-4 text-{{ app_color() }}-600 border-gray-300">
                                <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700"> PayPal </label>
                            </div>
                        </div>
                        <div class="mt-10 pt-6 border-t border-gray-200 sm:flex sm:items-center sm:justify-between">
                            <button type="submit" wire:loading.attr="disabled" wire:target="save" class="hover:scale-105 hover:shadow-2xl ease-in-out duration-150 w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500 sm:ml-6 sm:order-last sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="save"/>
                                {{ __('Continue') }}
                            </button>
                            <p class="mt-4 text-center text-sm text-gray-500 sm:mt-0 sm:text-left">You won't be charged until the next step.</p>
                        </div>
                    </fieldset>
                </div>
                <section aria-labelledby="products-heading" class="mt-6">
                    <h2 id="products-heading" class="sr-only">Products purchased</h2>

                    <div class="space-y-8">
                        <div class="bg-white border-t border-b border-gray-200 shadow-sm sm:border sm:rounded-lg">
                            <div class="py-6 px-4 sm:px-6 lg:grid lg:grid-cols-12 lg:gap-x-8 lg:p-8">
                                <div class="sm:flex lg:col-span-7">
                                    <div class="mt-6 sm:mt-0">
                                        @foreach(session('cart-' . auth()->user()->id)->items as $cart)
                                            <h3 class="uppercase text-base font-medium text-gray-900">
                                                <a href="#">{{ $cart->name }}</a>
                                            </h3>
                                            <p class="mt-2 text-sm font-medium text-gray-900">$ {{ $cart->price }}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="mt-6 lg:mt-0 lg:col-span-5">
                                    <dl class="grid grid-cols-2 gap-x-6 text-sm">
                                        <div>
                                            <dt class="font-medium text-gray-900">Delivery address</dt>
                                            <dd class="mt-3 text-gray-500">
                                                <span class="block">{{ auth()->user()->name }}</span>
                                                <span class="block whitespace-pre-wrap">{!! auth()->user()->address !!} </span>
                                            </dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Shipping updates</dt>
                                            <dd class="mt-3 text-gray-500 space-y-3">
                                                <p>{{ auth()->user()->email }}</p>
                                                <p>{{ auth()->user()->phone }}</p>
                                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 py-6 px-4 sm:px-6 lg:p-8">
                                <h4 class="sr-only">Status</h4>
                                <p class="text-sm font-medium text-gray-900">Preparing to ship on <time datetime="2021-03-24">March 24, 2021</time></p>
                                <div class="mt-6" aria-hidden="true">
                                    <div class="bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-2 bg-indigo-600 rounded-full" style="width: calc((2 * 2 + 1) / 8 * 100%)"></div>
                                    </div>
                                    <div class="hidden sm:grid grid-cols-4 text-sm font-medium text-gray-600 mt-6">
                                        <div class="text-indigo-600">Ticket placed</div>
                                        <div class="text-center text-indigo-600">Processing</div>
                                        <div class="text-center">Payment Method</div>
                                        <div class="text-right">Confirmation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- More products... -->
                    </div>
                </section>
            </div>

            <div class="col-span-1">

                <section aria-labelledby="timeline-title" class="lg:col-start-3 mt-6 sm:mt-2 2xl:mt-5">

                    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">

                        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Tips for candidates</h2>

                        <div class="mt-6 flow-root">

                            <ul role="list" class="-mb-8">

                                <li>

                                    <div class="relative pb-8">

                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>

                                        <div class="relative flex space-x-3">
                                            <div>

                                                    <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">

                                              <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                              </svg>

                                          </span>

                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Check if the offer matches your profile</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-09-20">#1</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="relative pb-8">

                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>

                                        <div class="relative flex space-x-3">
                                            <div>

                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">


                                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                                </svg>

                                            </span>
                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Check the closing date</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-09-22">#2</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="relative pb-8">

                                        <div class="relative flex space-x-3">

                                            <div>

                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">

                                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                                </svg>

                                            </span>

                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Meet the employer in a professional location</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-10-04">#3</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="mt-6 flex flex-col justify-stretch">

                            <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Get started</button>

                        </div>

                        <div class="mt-6 flex items-center justify-center">

                            {!! app_event()->iframe !!}

                        </div>

                    </div>

                </section>
            </div>
        </form>
    </div>
</div>

