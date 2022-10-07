<div>
    <!-- Section 1 -->
    <section class="relative p-2">
        <div
            @class([
                'p-10 border-' . $row->color . '-400 border-t-2 shadow-2xl -translate-y-2 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
            ])>
            @if(($row->quantity > 0) && ($row->quantity <= 5))
                <p class="absolute animate-pulse top-0 -translate-y-1/2 transform rounded-full bg-rose-500 py-1.5 px-4 text-sm font-semibold text-white"">
                    {{ $row->quantity . ' ' . __('Only') }}
                </p>
            @endif


            <div class="flex justify-between pb-8 border-b border-gray-200">
                <div class="flex flex-col">
                    <h3 class="flex items-center text-{{ $row->color }}-900">
                    <span class="flex items-start text-4xl tracking-tight sm:text-5xl">
                      <span class="mr-2 text-2xl font-medium"> € </span>
                      <span class="font-semibold"> {{ $row->price }} </span>
                    </span>
                    </h3>

                    <h4 class="uppercase mt-5 text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $row->color }}-400 to-{{ $row->color }}-900">{{ $row->name }}</h4>
                </div>
                <div>
                    @if($row->quantity)
                        @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'max' => $row->quantity > 10 ? 10 : $row->quantity, 'model' => \App\Models\Ticket::$apiModel], key('single-ticket-quantity-' . $row->id))
                    @else
                        <div class="hover:scale-125 ease-in-out duration-150 inline-block text-base bg-white">
                            <span class="inline-flex items-center rounded-full px-2 py-0.5 font-medium text-gray-800 uppercase">
                                  <svg class="mr-1.5 h-2 w-2 text-gray-400" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                  </svg>
                                  Sold Out
                                </span>
                        </div>
                    @endif
                </div>
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
        </div>
    </section>

</div>
