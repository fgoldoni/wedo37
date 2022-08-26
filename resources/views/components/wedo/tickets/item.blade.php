@props(['row', 'currentTicket' => null])

<div>

    <!-- Section 1 -->
    <section class="relative p-2">
        <div
            @class([
                'p-10 bg-gray-50 border-' . $row->color . '-400 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
                'border-t-0' => !($row->id === $currentTicket),
                'border-t-2 shadow-2xl -translate-y-2' => ($row->id === $currentTicket),
            ])>

            <div class="flex flex-col pb-8 border-b border-gray-200">
                <h3 class="flex items-center text-{{ $row->color }}-900">
                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                      <span class="mr-2 text-2xl font-medium"> € </span>
                      <span class="font-semibold"> {{ $row->price }} </span>
                    </span>
                </h3>

                <h4 class="uppercase mt-5 text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $row->color }}-400 to-{{ $row->color }}-900">{{ $row->name }}</h4>
            </div>
            <ul class="px-3 pt-8 space-y-3">
                <li class="flex font-medium text-gray-500">
                    <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400"></x-heroicon-s-check-circle>
                    {{ $row->attendees }} Person(s)
                </li>

                @foreach(json_decode($row->tags) as $tag)
                    <li class="flex font-medium text-gray-500">
                        <x-heroicon-s-check-circle class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400"></x-heroicon-s-check-circle>
                        {{ $tag }}
                    </li>
                @endforeach
            </ul>
            <button type="button" wire:click="show({{ $row->id }})" class="hidden hover:scale-105 hover:shadow-2xl ease-in-out duration-150 lg:flex items-center justify-center w-full h-12 mt-8 font-medium text-gray-600 border border-gray-500 rounded-md">
                <x-wedo.loader wire:loading wire:target="show({{ $row->id }})"></x-wedo.loader>
                <x-heroicon-o-ticket wire:loading.remove wire:target="show({{ $row->id }})" class="flex-shrink-0 mr-2 h-5 w-5"/>
                {{ __('Details') }}
                <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </button>

            <a href="{{ route('tickets.show', $row->id) }}" class="lg:hidden hover:scale-105 hover:shadow-2xl ease-in-out duration-150  flex items-center justify-center w-full h-12 mt-8 font-medium text-gray-600 border border-gray-500 rounded-md">
                <x-wedo.loader wire:loading wire:target="show({{ $row->id }})"></x-wedo.loader>
                <x-heroicon-o-ticket wire:loading.remove wire:target="show({{ $row->id }})" class="flex-shrink-0 mr-2 h-5 w-5"/>
                {{ __('Details') }}
                <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>

</div>
