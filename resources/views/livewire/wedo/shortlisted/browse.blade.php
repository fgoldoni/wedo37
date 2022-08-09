<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-8">

    <x-wedo.pages.layouts.heading>
        <x-slot name="title">
            {{ __('Shortlisted') }}
        </x-slot>
    </x-wedo.pages.layouts.heading>

    <div class="col-span-1">
        <div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
            <ul class="grid grid-cols-1 space-y-4">
                @forelse($rows->data as $row)
                    <x-wedo.shortlisted.item :row="$row" wire:key="item-{{$row->id}}"></x-wedo.shortlisted.item>
                @empty
                    No Results
                @endforelse
            </ul>
        </div>
    </div>
</div>
