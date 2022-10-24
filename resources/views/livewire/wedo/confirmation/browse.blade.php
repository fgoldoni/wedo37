<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-wedo.basket :back="route('orders.index')" :back-name="__('layout.navigation.browse_orders')" :link="__('Confirmation')"></x-wedo.basket>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <x-wedo.orders.item :order="$order"></x-wedo.orders.item>
    </div>

</main>
