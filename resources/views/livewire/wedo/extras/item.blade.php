<li class="flex py-6">
    <div class="flex-shrink-0">
        <img src="{{ asset('images/extra.jpg') }}" alt="{{ $row->name }}" class="btn-img w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
    </div>

    <div class="ml-4 flex-1 flex flex-col sm:ml-6">
        <div>
            <div class="flex justify-between">
                <h4 class="text-sm">
                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800 btn-title text-xs uppercase"> {{ $row->name }} </a>
                </h4>
                <p class="ml-4 text-sm font-medium text-gray-900 whitespace-nowrap">€ {{ $row->price }}</p>
            </div>
        </div>

        <div class="mt-4 flex-1 flex items-end justify-between">
            @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'model' => \App\Models\Extra::$apiModel], key('extra-quantity-' . $row->id))
        </div>
    </div>
</li>
