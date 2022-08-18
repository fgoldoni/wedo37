<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-wedo.basket :back="route('orders.index')" :back-name="__('Browse orders')" :link="__('Confirmation')"></x-wedo.basket>


    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

        <div class="lg:col-span-3">
            <div class="bg-green-50 border-l-4 border-green-400 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Payment successful</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p class="mt-2 text-4xl font-bold tracking-tight sm:tracking-tight sm:text-5xl">Thanks for ordering</p>
                            <p class="mt-2 text-base text-gray-500">We appreciate your order, we’re currently processing it. So hang tight and we’ll send you confirmation very soon!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-3">
            <div class="bg-white">
                <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Order Details</h1>

                    <div class="text-sm border-b border-gray-200 mt-2 pb-5 sm:flex sm:justify-between">
                        <dl class="flex">
                            <dt class="text-gray-500">Order number&nbsp;</dt>
                            <dd class="font-medium text-gray-900">W086438695</dd>
                            <dt>
                                <span class="sr-only">Date</span>
                                <span class="text-gray-400 mx-2" aria-hidden="true">&middot;</span>
                            </dt>
                            <dd class="font-medium text-gray-900"><time datetime="2021-03-22">March 22, 2021</time></dd>
                        </dl>
                        <div class="mt-4 sm:mt-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">View invoice<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h2 class="sr-only">Products purchased</h2>

                        <div class="space-y-24">
                            <div class="grid grid-cols-1 text-sm sm:grid-rows-1 sm:grid-cols-12 sm:gap-x-6 md:gap-x-8 lg:gap-x-8">
                                <div class="sm:col-span-4 md:col-span-5 md:row-end-2 md:row-span-2">
                                    <div class="aspect-w-1 aspect-h-1 bg-gray-50 rounded-lg overflow-hidden">
                                        <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-04-product-01.jpg" alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade." class="object-center object-cover">
                                    </div>
                                </div>
                                <div class="mt-6 sm:col-span-7 sm:mt-0 md:row-end-1">
                                    <h3 class="text-lg font-medium text-gray-900">
                                        <a href="#">Distant Mountains Artwork Tee</a>
                                    </h3>
                                    <p class="font-medium text-gray-900 mt-1">$36.00</p>
                                    <p class="text-gray-500 mt-3">You awake in a new, mysterious land. Mist hangs low along the distant mountains. What does it mean?</p>
                                </div>
                                <div class="sm:col-span-12 md:col-span-7">
                                    <dl class="grid grid-cols-1 gap-y-8 border-b py-8 border-gray-200 sm:grid-cols-2 sm:gap-x-6 sm:py-6 md:py-10">
                                        <div>
                                            <dt class="font-medium text-gray-900">Delivery address</dt>
                                            <dd class="mt-3 text-gray-500">
                                                <span class="block">Floyd Miles</span>
                                                <span class="block">7363 Cynthia Pass</span>
                                                <span class="block">Toronto, ON N3Y 4H8</span>
                                            </dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Shipping updates</dt>
                                            <dd class="mt-3 text-gray-500 space-y-3">
                                                <p>f•••@example.com</p>
                                                <p>1•••••••••40</p>
                                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                                            </dd>
                                        </div>
                                    </dl>
                                    <p class="font-medium text-gray-900 mt-6 md:mt-10">Processing on <time datetime="2021-03-24">March 24, 2021</time></p>
                                    <div class="mt-6">
                                        <div class="bg-gray-200 rounded-full overflow-hidden">
                                            <div class="h-2 bg-indigo-600 rounded-full" style="width: calc((1 * 2 + 1) / 8 * 100%)"></div>
                                        </div>
                                        <div class="hidden sm:grid grid-cols-4 font-medium text-gray-600 mt-6">
                                            <div class="text-indigo-600">Order placed</div>
                                            <div class="text-center text-indigo-600">Processing</div>
                                            <div class="text-center">Shipped</div>
                                            <div class="text-right">Delivered</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- More products... -->
                        </div>
                    </div>

                    <!-- Billing -->
                    <div class="mt-24">
                        <h2 class="sr-only">Billing Summary</h2>

                        <div class="bg-gray-50 rounded-lg py-6 px-6 lg:px-0 lg:py-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
                            <dl class="grid grid-cols-1 gap-6 text-sm sm:grid-cols-2 md:gap-x-8 lg:pl-8 lg:col-span-5">
                                <div>
                                    <dt class="font-medium text-gray-900">Billing address</dt>
                                    <dd class="mt-3 text-gray-500">
                                        <span class="block">Floyd Miles</span>
                                        <span class="block">7363 Cynthia Pass</span>
                                        <span class="block">Toronto, ON N3Y 4H8</span>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="font-medium text-gray-900">Payment information</dt>
                                    <dd class="mt-3 flex">
                                        <div>
                                            <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                                                <rect width="36" height="24" rx="4" fill="#224DBA" />
                                                <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff" />
                                            </svg>
                                            <p class="sr-only">Visa</p>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-gray-900">Ending with 4242</p>
                                            <p class="text-gray-600">Expires 02 / 24</p>
                                        </div>
                                    </dd>
                                </div>
                            </dl>

                            <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:pr-8 lg:col-span-7">
                                <div class="pb-4 flex items-center justify-between">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd class="font-medium text-gray-900">$72</dd>
                                </div>
                                <div class="py-4 flex items-center justify-between">
                                    <dt class="text-gray-600">Shipping</dt>
                                    <dd class="font-medium text-gray-900">$5</dd>
                                </div>
                                <div class="py-4 flex items-center justify-between">
                                    <dt class="text-gray-600">Tax</dt>
                                    <dd class="font-medium text-gray-900">$6.16</dd>
                                </div>
                                <div class="pt-4 flex items-center justify-between">
                                    <dt class="font-medium text-gray-900">Order total</dt>
                                    <dd class="font-medium text-indigo-600">$83.16</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
