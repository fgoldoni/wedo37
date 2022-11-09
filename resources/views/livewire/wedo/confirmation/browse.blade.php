<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <x-wedo.basket :back="route('orders.index')" :back-name="__('layout.navigation.browse_orders')" :link="__('Confirmation')"></x-wedo.basket>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <x-wedo.orders.item :order="$order"></x-wedo.orders.item>
    </div>

    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div class="lg:col-span-3 px-4 sm:px-0 mt-8">
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Conditions de paiement & d'annulation</h3>
                    <div class="mt-2 max-w-xl text-sm text-gray-500">
                        <p>
                            Toutes les transactions de billets se font entre un Organisateur et les Consommateurs respectifs. Par conséquent, les Consommateurs doivent contacter l'Organisateur concerné pour toute demande de remboursement. Vous trouverez de l'aide pour obtenir un remboursement ici.
                        </p>
                    </div>
                    <div class="mt-3 text-sm">
                        <a href="{{ route('refund') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Voir les détails
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
