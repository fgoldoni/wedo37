@props([
    'item',
    'model',
    'quantity' => null,
    'action' => false,
])

<div>

    <!-- Section 1 -->
    <section class="relative p-2">
        <div
            @class([
                'p-10 bg-gray-50 border-t-2 shadow-2xl -translate-y-2 border-' . $item->color . '-400 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
            ])>

            <div class="flex flex-col pb-8 border-b border-gray-200">
                <h3 class="flex items-center text-{{ $item->color }}-900">
                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                      <span class="mr-2 text-2xl font-medium"> € </span>
                      <span class="font-semibold"> {{ $item->price }} </span>
                    </span>
                </h3>

                <h4 class="uppercase mt-5 text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->color }}-400 to-{{ $item->color }}-900">
                    @if($quantity)
                        <span>{{ $quantity }} * </span>
                    @endif

                    {{ $item->name }}
                </h4>
            </div>
            <ul class="px-3 pt-8 space-y-3">
                @php
                    $tags = is_array($item->tags) ? $item->tags : json_decode($item->tags);
                @endphp
                <li class="flex font-medium text-gray-500">
                    <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ $item->color }}-400"></x-heroicon-s-check-circle>
                    {{ $item->attendees }} Person(s)
                </li>

                @foreach($tags as $tag)
                    <li class="flex font-medium text-gray-500">
                        <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ $item->color }}-400"></x-heroicon-s-check-circle>
                        {{ $tag }}
                    </li>
                @endforeach
            </ul>

            @if ($action)
                <div class="px-3 pt-8 space-y-3 flex-1 flex items-end justify-between">
                    @livewire('wedo.tickets.quantity', ['itemId' => $item->id, 'model' => $model], key('ticket-quantity-' . $item->id))
                    <div class="ml-4">
                        <button type="button" wire:click="remove({{ json_encode(['id' => $item->id, 'model' => $model])  }})" class="uppercase text-xs font-medium text-rose-600 hover:text-rose-500">
                            <x-wedo.loader wire:loading wire:target="remove({{ json_encode(['id' => $item->id, 'model' => $model]) }})"></x-wedo.loader>
                            <span>Remove</span>
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>

</div>
