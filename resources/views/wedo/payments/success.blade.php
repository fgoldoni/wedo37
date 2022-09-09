<x-app-layout>
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
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative overflow-hidden bg-white mt-10">
            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="sm:max-w-lg">
                        <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Get 25% off on our extras for your first order </h1>
                        <p class="mt-4 text-xl text-gray-500">Coupon: FIRST25OFF</p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="{{ asset('images/extra.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('extras.index', ['event_id' => app_event()->id]) }}" class="btn-base inline-block rounded-md border border-transparent bg-{{ app_color() }}-600 py-3 px-8 text-center font-medium text-white hover:bg-{{ app_color() }}-700">Browse Extras (- 25%) </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
