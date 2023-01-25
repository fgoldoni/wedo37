@php
    $filters['events'][] = app_event()?->id;
@endphp
<section class="relative flex flex-col-reverse w-full px-6 py-16 bg-gray-900 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-gray-900 transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice"><path d="M50 0H80L50 120H0L50 0Z"></path></svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="{{ app_team()->image }}" alt="">
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <a href="{{ route('tickets.index', ['filters' => $filters]) }}" class="uppercase inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200 mb-7">
                <span class="px-3 py-0.5 text-white text-sm font-semibold leading-5 bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-600 rounded-full">{{ app_event()?->city }}</span>
                <span class="ml-4 text-sm sm:hidden">{{ \Carbon\Carbon::parse(app_event()?->start)->format('M d, Y') }}</span>
                <span class="ml-4 text-sm hidden sm:block">{{ \Carbon\Carbon::parse(app_event()?->start)->format('M d, Y') }}</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
            <h1 class="uppercase mb-5 font-sans text-3xl font-bold tracking-tight text-white sm:text-5xl sm:leading-none">
                {{ app_team_name() }}<br class="hidden md:block">
                <span class="inline-block text-{{ app_color() }}-500">
                     {{ __('layout.hero.present') }}
                </span>
                <span class="block"><x-wedo.home.typing-effect :items="[app_event()?->artist]"></x-wedo.home.typing-effect>&nbsp;</span>
            </h1>
            <p class="inline-flex mb-5 text-base text-gray-300 sm:pr-10 md:text-lg">
                <x-heroicon-o-location-marker class="-ml-1 mr-2 h-6 w-6"/>
                {{ app_event()?->address }}
            </p>

            @foreach(collect(app_event()->tags)->chunk(2) as $chunk)
                <div class="uppercase flex items-center pt-2 sm:flex-row sm:pt-4 space-x-1 mb-5 truncate">
                    @foreach($chunk as $tag)
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                      <svg class="-ml-1 mr-1.5 h-2 w-2 text-gray-400" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3" />
                      </svg>
                      {{ $tag }}
                    </span>
                    @endforeach
                </div>
            @endforeach

            <div class="uppercase flex flex-col items-center pt-2 sm:flex-row sm:pt-4">
                <a href="{{ route('tickets.index', ['filters' => $filters]) }}" class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white rounded shadow-md sm:w-auto sm:mr-4 sm:mb-0 hover:-translate-y-1 hover:ease-in-out duration-200 bg-{{ app_color() }}-500 hover:bg-{{ app_color() }}-700 hover:bg-deep-{{ app_color() }}-accent-700 focus:shadow-outline focus:outline-none">
                    <img class="-ml-1 mr-2 h-6 w-6" src="{{ asset('images/svg/travel-tickets.svg') }}" alt="">
                    {{ __('layout.hero.ticket_reservation') }}
                </a>
                <a href="javascript:;" onclick="Livewire.emit('openModal', 'wedo.modals.popup.extras')" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-700 rounded shadow-md sm:w-auto hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    <span class="-ml-1 mr-2">🍾</span>
                    {{ __('layout.hero.add_drink') }}
                </a>
            </div>
        </div>
    </div>
</section>
