<div>
    <!-- Section 1 -->
    <section class="relative p-1 sm:p-2">
        <div
            @class([
                'p-10 border-' . $row->color . '-400 border-t-2 shadow-2xl -translate-y-2 md:mt-0 hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300',
            ])>

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
                    @livewire('wedo.tickets.quantity', ['item' => json_encode($row), 'model' => \App\Models\Ticket::$apiModel], key('ticket-quantity-' . $row->id))
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
