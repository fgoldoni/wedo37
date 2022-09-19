<section class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">

        <h1 class="mb-1 text-4xl font-extrabold leading-none text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 lg:text-5xl xl:text-6xl sm:mb-3"><a href="#_">VIP LOUNGE</a></h1>
        <div class="flex grid h-full grid-cols-12 gap-8 sm:gap-10 pb-10 mt-8 sm:mt-16">

            @foreach($tickets as $ticket)
                <div wire:click="show({{$ticket->id}})" class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="{{ route('tickets.show', $ticket->id) }}" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/quench-satisfying.jpg')">
                    </a>
                    <div class="relative z-20 w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 px-7">
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="hover:scale-125 ease-in-out duration-150 inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">
                            {{ __('layout.package.details') }}
                        </a>
                        <h2 class="uppercase mb-5 text-2xl font-bold"><a href="#_">{{ Str::limit($ticket->name, 18, '...') }}</a></h2>
                        <p class="mb-2 text-base font-normal text-purple-100 opacity-100 uppercase">{{ __('layout.package.price', ['price' => $ticket->price]) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
