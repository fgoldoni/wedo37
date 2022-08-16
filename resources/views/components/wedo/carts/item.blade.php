@props([
    'item',
    'model',
])
<li class="flex py-6">
    <div class="flex-shrink-0">
        <img src="{{ $item->attributes->avatar_url }}" alt="{{ $item->name }}" class="btn-img w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
    </div>

    <div class="ml-4 flex-1 flex flex-col sm:ml-6">
        <div>
            <div class="flex justify-between">
                <h4 class="text-sm">
                    <a href="#" class="uppercase hover:ml-1 transition-all ease-out duration-200 font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">{{ $item->quantity }} * {{ $item->name }} </a>
                </h4>
                <p class="ml-4 text-sm font-medium text-gray-900">€ {{ $item->price }}</p>
            </div>
            <p class="mt-1 text-sm text-gray-500">{{ $item->attributes->event->name }}</p>
            <p class="mt-2 text-sm text-{{ app_color() }}-500 underline">{{ $item->attributes->user->name }}</p>
        </div>

        <div class="mt-4 flex-1 flex items-end justify-between">
            @livewire('wedo.tickets.quantity', ['itemId' => $item->id], key('cart-quantity-' . $item->id))
            <div class="ml-4">
                <button type="button" wire:click="remove({{ $item->id }})" class="uppercase text-xs font-medium text-rose-600 hover:text-rose-500">
                    <x-wedo.loader wire:loading wire:target="remove({{ $item->id }})"></x-wedo.loader>
                    <span>Remove</span>
                </button>
            </div>
        </div>
    </div>
</li>
