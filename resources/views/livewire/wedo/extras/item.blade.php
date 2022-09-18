<li class="flex px-4 sm:px-6 py-6">
    <div class="flex flex-1 flex-col">
        <div class="flex">
            <div class="min-w-0 flex-1">
                <h4 class="text-sm">
                    <a href="javascript:;" class="font-medium text-gray-700 hover:text-gray-800 btn-title text-xs capitalize"> {{ $row->name }} </a>
                </h4>
                <p class="mt-1 text-sm text-gray-500">€ {{ $row->price }}</p>
            </div>

            <div class="ml-4 flow-root flex-shrink-0">
                @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'model' => \App\Models\Extra::$apiModel], key('extra-quantity-' . $row->id))
            </div>
        </div>
    </div>
</li>
