<li class="flex py-6">
    <div class="flex-shrink-0">
        <img src="{{ asset('images/extra.jpg') }}" alt="{{ $order->name }}" class="btn-img w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
    </div>

    <div class="ml-4 flex-1 flex flex-col sm:ml-6">
        <div>
            <div class="flex justify-between">
                <h4 class="text-sm">
                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800 btn-title text-xs uppercase"> {{ $order->name }} </a>
                </h4>
                <p class="ml-4 text-sm font-medium text-gray-900 whitespace-nowrap">€ {{ $order->price }}</p>
            </div>
        </div>

        <div class="mt-4 flex-1 flex items-end justify-between">
            <select wire:model="quantity" wire:loading.remove name="{{ $order->name }}" class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <div class="ml-4">
                <button type="button" wire:click="add({{ $order->id }})" class="inline-flex text-sm font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500 uppercase">
                    <x-wedo.loader wire:loading wire:target="add({{ $order->id }})"></x-wedo.loader>
                    <x-heroicon-o-plus  wire:loading.remove wire:target="add({{ $order->id }})" class="w-4 h-4 mr-2"></x-heroicon-o-plus>
                    <span>Add</span>
                </button>
            </div>
        </div>
    </div>
</li>
