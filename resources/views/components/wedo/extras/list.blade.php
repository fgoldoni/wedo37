@props(['orders'])

<div class="relative scrollbar-thin scrollbar-thumb-secondary-400 scrollbar-track-secondary-200 overflow-y-auto max-height">
    <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200 px-6">
        @forelse($orders as $order)
            @livewire('wedo.extras.item', ['item' => json_encode($order)], key('extra-' . $order->id))
        @empty
        @endforelse
    </ul>
</div>
