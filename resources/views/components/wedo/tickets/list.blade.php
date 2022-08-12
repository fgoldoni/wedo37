@props(['rows'])
<div class="col-span-1">
    <div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
        <ul class="grid grid-cols-1 space-y-4">
            @forelse($rows as $row)
                <x-wedo.tickets.item :row="$row" wire:key="item-{{$row->id}}"></x-wedo.tickets.item>
            @empty
                No Results
            @endforelse
        </ul>
    </div>
</div>




