@props(['ticket'])
<div class="bg-gray-900">
    <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
        <div class="text-center">
            <h2 class="text-xl leading-6 font-semibold text-gray-300">{{ app_team_name() }}</h2>
            <p class="uppercase mt-2 text-3xl tracking-tight font-extrabold sm:text-4xl sm:tracking-tight lg:text-5xl lg:tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-900">{{ app_event()->artist }}</p>
            <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl whitespace-pre-wrap">{{ $ticket->description }}</p>
        </div>
    </div>
    <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
        <div class="relative z-0">
            <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="relative p-10 mt-10 bg-white rounded-lg shadow-xl md:mt-0">
                            <div class="pointer-events-none absolute inset-0 rounded-lg border-t border-gray-600" aria-hidden="true"></div>
                            <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                <div class="flex justify-center transform -translate-y-1/2">
                                    <span class="uppercase inline-flex rounded-full bg-gray-600 px-4 py-1 text-base font-semibold text-gray-300"> Available </span>
                                </div>
                            </div>
                            <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                <div>
                                    <h3 class="uppercase text-center text-3xl tracking-tight font-semibold text-transparent bg-clip-text bg-gradient-to-r from-{{ $ticket->color }}-500 to-{{ $ticket->color }}-900 sm:-mx-6" id="tier-growth">{{ $ticket->name }}</h3>
                                    <div class="mt-4 flex items-center justify-center">
                                        <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl sm:tracking-tight">
                                          <span class="mt-2 mr-2 text-4xl tracking-tight font-medium"> € </span>
                                          <span class="font-bold"> {{ $ticket->price }} </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;" wire:click="add({{ $ticket->id }})" class="uppercase hover:scale-105 hover:shadow-2xl ease-in-out duration-150 hidden lg:flex items-center justify-center w-full px-6 py-3 my-8 text-lg rounded-md text-white bg-gradient-to-r from-{{ $ticket->color }}-500 via-{{ $ticket->color }}-600 to-{{ $ticket->color }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ $ticket->color }}-300 dark:focus:ring-{{ $ticket->color }}-800 sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="add({{ $ticket->id }})"></x-wedo.loader>
                                {{ __('Add to Basket') }}
                            </a>
                            <a href="javascript:;" wire:click="continue({{ $ticket->id }})" class="lg:hidden uppercase hover:scale-105 hover:shadow-2xl ease-in-out duration-150 flex items-center justify-center w-full px-6 py-3 my-8 text-lg rounded-md text-white bg-gradient-to-r from-{{ $ticket->color }}-500 via-{{ $ticket->color }}-600 to-{{ $ticket->color }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ $ticket->color }}-300 dark:focus:ring-{{ $ticket->color }}-800 sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="continue({{ $ticket->id }})"></x-wedo.loader>
                                {{ __('Add to Basket') }}
                            </a>
                            <div class="space-y-4 lg:pl-2">
                                @php
                                    $tags = is_array($ticket->tags) ? $ticket->tags : json_decode($ticket->tags);
                                @endphp
                                <div class="flex items-start">
                                    <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                    <p class="text-gray-700">{{ $ticket->attendees }} Person(s)</p>
                                </div>
                                @foreach($tags as $tag)
                                    <div class="flex items-start">
                                        <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                        <p class="text-gray-700">{{ $tag }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
