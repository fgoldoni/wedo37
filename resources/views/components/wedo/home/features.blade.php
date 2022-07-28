@props([
    'filters' => [
        'categories' => []
    ]
])
<section class="relative px-10 py-16 overflow-hidden bg-gray-100">
    <img class="absolute left-0 z-0 w-3/4 transform -translate-y-1/2 opacity-70 top-1/2" src="https://cdn.devdojo.com/tails/images/gradient-blob.svg">
    <img class="absolute left-0 z-0 object-cover object-center w-full h-full opacity-50 top-24" src="https://cdn.devdojo.com/tails/images/swirl-white.svg">
    <div class="container relative z-10 px-4 mx-auto">
        <div class="w-full mb-8 sm:w-1/2 md:w-3/4 sm:pr-4 md:pr-12 sm:-mb-32 md:-mb-24 lg:-mb-36 xl:-mb-28">
            <h2 class="tracking-widest text-{{ app_color() }}-500 uppercase">{{ __('pages/home.features.title') }}</h2>
            <p class="my-3 text-5xl font-bold tracking-tighter text-{{ app_color() }}-900 lg:text-6xl">{{ __('pages/home.features.header') }}</p>
            <p class="max-w-sm text-lg text-gray-500">{{ __('pages/home.features.description') }}</p>
        </div>

        <div class="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
            @if(isset(app_areas()[0]) &&  $area = app_areas()[0])
                @php
                    $filters['categories'][] = $area->id;
                @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 sm:row-start-2 md:row-start-3">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/beautiful-dashboard.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
                </div>
            @endif
            @if(isset(app_areas()[1]) &&  $area = app_areas()[1])
                     @php
                        $filters['categories'] = [$area->id];
                    @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 xl:col-start-2 sm:row-start-4 md:row-start-5 xl:row-start-2">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/member-management.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
                </div>
            @endif
            @if(isset(app_areas()[2]) &&  $area = app_areas()[2])
                     @php
                        $filters['categories'] = [$area->id];
                    @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-2 sm:row-start-6 md:row-start-2 xl:row-start-4">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/custom-navigation.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
                </div>
            @endif
            @if(isset(app_areas()[3]) && $area = app_areas()[3])
                     @php
                        $filters['categories'] = [$area->id];
                    @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-3 sm:row-start-1 md:row-start-4 xl:row-start-1">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/integration-center.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
                </div>
            @endif
            @if(isset(app_areas()[4]) && $area = app_areas()[4])
                     @php
                        $filters['categories'] = [$area->id];
                    @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-3 sm:row-start-3 md:row-start-1 xl:row-start-3">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/design-handoff.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
               </div>
            @endif
            @if(isset(app_areas()[5]) && $area = app_areas()[5])
                    @php
                        $filters['categories'] = [$area->id];
                    @endphp
                <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-4 sm:row-start-5 md:row-start-3 xl:row-start-2">
                    <a href="{{ route('jobs.index', ['filters' =>$filters]) }}" class="relative flex flex-col items-start justify-end w-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute bottom-0 left-0 z-10 w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-30"></div>
                            <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/3rd-party-modules.jpeg" alt="">
                        </div>
                        <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                            <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-{{ app_color() }}-500 rounded-md">{{ $area->jobs_count }} Position(s)</span>
                            <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">{{ $area->name }}</h4>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
