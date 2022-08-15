<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div>
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                <!-- Heroicon name: outline/check -->
                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Added to Basket</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">
                        A new item has been added to your Basket. You now have {{ session('cart-' . request()->ip())->total_quantity }} items in your Basket.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
            <a href="{{ route('carts.index') }}" wire:click="$emit('closeModal')" class="btn w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 text-base font-medium text-white bg-gradient-to-r from-{{ app_color() }}-500 via-{{ app_color() }}-600 to-{{ app_color() }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ app_color() }}-300 dark:focus:ring-{{ app_color() }}-800 sm:col-start-2 sm:text-sm">
                Go to Basket
            </a>
            <button type="button" wire:click="$emit('closeModal')" class="mt-3 btn w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                Browse Tickets
            </button>
        </div>
    </div>
</div>
