<div>
    <x-wedo.loader wire:loading wire:target="item.quantity"></x-wedo.loader>
    <select wire:model="item.quantity" wire:loading.remove name="{{ $item['name'] }}" class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-{{ app_color() }}-500 focus:border-{{ app_color() }}-500 sm:text-sm">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>
</div>
