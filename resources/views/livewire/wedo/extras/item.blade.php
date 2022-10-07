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
                @if($row->quantity > 0)
                    @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'max' => $row->quantity > 10 ? 10 : $row->quantity, 'model' => \App\Models\Extra::$apiModel], key('extra-quantity-' . $row->id))
                @else
                    <div class="hover:scale-125 ease-in-out duration-150 inline-block text-base bg-white">
                            <span class="inline-flex items-center rounded-full px-2 py-0.5 font-medium text-gray-800 uppercase">
                                  <svg class="mr-1.5 h-2 w-2 text-gray-400" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                  </svg>
                                  Sold Out
                                </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</li>
