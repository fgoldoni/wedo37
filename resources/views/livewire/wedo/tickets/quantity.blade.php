<div>
    <x-wedo.loader wire:loading wire:target="quantity"></x-wedo.loader>
    <select wire:model="quantity" wire:loading.remove name="row-{{ $row['id'] }}" class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-{{ app_color() }}-500 focus:border-{{ app_color() }}-500 sm:text-sm">
        @for ($i = 0; $i < $max + 1; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
</div>
