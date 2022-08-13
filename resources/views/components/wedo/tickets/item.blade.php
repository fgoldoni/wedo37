@props(['row', 'currentTicket'])

<div>

    <!-- Section 1 -->
    <section class="relative p-2">
        <div
            @class([
                'p-10 bg-white md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
                'border-t-4 border-' . $row->color . '-400' => !($row->id === $currentTicket),
                'shadow-xl -translate-y-1' => ($row->id === $currentTicket),
            ])>
            @if($row->id === $currentTicket)
                <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-{{ $row->color }}-600" aria-hidden="true"></div>
                <div class="absolute inset-x-0 top-0 transform translate-y-px">
                    <div class="flex justify-center transform -translate-y-1/2">
                        <span class="inline-flex rounded-full bg-{{ $row->color }}-600 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white">
                            <svg class="h-5 w-5 text-{{ app_color() }}-400'"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            @endif

            <div class="flex flex-col pb-8 border-b border-gray-200">
                <h3 class="flex items-center text-{{ $row->color }}-400">
                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                      <span class="mr-2 text-2xl font-medium"> $ </span>
                      <span class="font-semibold"> {{ $row->price }} </span>
                    </span>
                </h3>

                <h4 class="uppercase mt-5 text-2xl font-medium text-transparent bg-clip-text bg-gradient-to-r from-{{ $row->color }}-400 to-{{ $row->color }}-900">{{ $row->name }}</h4>
                <p class="mt-4 text-gray-500">{{ $row->description }}</p>
            </div>
            <ul class="px-3 pt-8 space-y-3">
                <li class="flex font-medium text-gray-500">
                    <svg class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Unlimited Access
                </li>
                <li class="flex font-medium text-gray-500">
                    <svg class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    5 Team Members
                </li>
                <li class="flex font-medium text-gray-500">
                    <svg class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    10,000 Api Calls
                </li>
                <li class="flex font-medium text-gray-500">
                    <svg class="w-6 h-6 mr-1.5 text-{{ $row->color }}-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Email Support
                </li>
            </ul>
            <button type="button" wire:click="show({{ $row->id }})" class="hover:scale-105 hover:shadow-2xl ease-in-out duration-150  flex items-center justify-center w-full h-12 mt-8 font-medium text-{{ $row->color }}-600 border-2 border-{{ $row->color }}-500 rounded-full">
                <x-wedo.loader wire:loading wire:target="show({{ $row->id }})"></x-wedo.loader>
                <x-heroicon-o-ticket wire:loading.remove wire:target="show({{ $row->id }})" class="flex-shrink-0 mr-2 h-5 w-5"/>
                Select &#8594;
            </button>
        </div>
    </section>

</div>
