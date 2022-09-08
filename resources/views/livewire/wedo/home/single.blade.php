@if($ticket)
    <!-- Section 1 -->
    <section class="w-full py-20 bg-gray-100">

        <div class="max-w-3xl px-10 mx-auto"  wire:click="show({{$ticket->id}})">
            <h2 class="mb-10 text-xl text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">SINGLE PASS</h2>

            <div class="relative flex flex-col overflow-hidden bg-gray-900 rounded-xl">
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500"></div>
                <div class="flex flex-col items-center p-10 md:flex-row">
                    <div class="w-full text-white md:w-2/3">
                        <div class="flex items-center">
                            <p class="flex items-start text-lg font-bold leading-none text-transparent text-7xl bg-clip-text bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500"><span class="mt-2 text-4xl">€</span>{{ $ticket->price }}</p>
                        </div>
                    </div>

                    <div class="flex items-center w-full mt-8 md:w-2/3 md:justify-end md:mt-0">
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="uppercase hover:scale-105 ease-in-out duration-150 w-full px-10 py-5 text-xl font-semibold text-center text-white rounded-lg bg-gradient-to-br from-{{ app_color() }}-100 to-{{ app_color() }}-500 md:w-auto">{{ __('Details') }}</a>
                    </div>

                </div>
                <div class="px-10 py-8 bg-gray-900 border-t border-gray-700 bg-gradient-to-b from-gray-800 to-gray-900">
                    <h3 class="uppercase text-xl font-medium leading-tight text-gray-200">{{ $ticket->name }}</h3>
                    <p class="my-1 text-gray-400 whitespace-pre-wrap">{{ $ticket->description }}</p>
                </div>

            </div>

        </div>

    </section>
@endif
