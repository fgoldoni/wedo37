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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:col-span-3">
            <x-wedo.orders.item :order="$order"></x-wedo.orders.item>
        </div>
    </div>

</main>
