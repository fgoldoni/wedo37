@props(['rows'])
<div class="col-span-1">
    <ul class="grid grid-cols-1 space-y-4">
        @forelse($rows as $row)
            <x-wedo.jobs.item :row="$row" wire:key="item-{{$row->id}}"></x-wedo.jobs.item>
        @empty
            No Results
        @endforelse
    </ul>
</div>




