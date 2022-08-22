<div class="mt-6 sm:mt-2 2xl:mt-5">
    <div class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                <a href="{{ route('tickets.index') }}"
                   @class([
                      "inline-flex hover:ml-1 transition-all ease-out duration-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm",
                      'border-' . app_color() . '-500 text-gray-900' => request()->routeIs('tickets.index'),
                      'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' => !request()->routeIs('tickets.index'),
                  ])>
                    <img src="{{ asset('images/svg/travel-tickets.svg') }}" class="-ml-1 mr-2 h-5 w-5"/>
                    <span class="hover:ml-1 transition-all ease-out duration-200">{{ __('layout.navigation.browse_tickets') }}</span>
                </a>

                <a href="{{ route('extras.index', ['event_id' => app_event()->id]) }}"
                   @class([
                        "inline-flex hover:ml-1 transition-all ease-out duration-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm",
                        'border-' . app_color() . '-500 text-gray-900' => request()->routeIs('extras.index'),
                        'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' => !request()->routeIs('extras.index'),
                    ])>
                    <span class="-ml-1 mr-2 h-5 w-5">&#127870;</span>
                    {{ __('layout.navigation.browse_extras') }}
                </a>

            </nav>
        </div>
    </div>
</div>
