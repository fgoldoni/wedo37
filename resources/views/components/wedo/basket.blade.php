@props([
    'carts' => null,
    'action' => false,
    'link' => null,
    'back' => route('tickets.index') . '?filters[events][0]='.app_event()->id,
    'backName' => __('layout.navigation.browse_tickets')
])

<div class="max-w-7xl mx-auto py-8 px-4 sm:px-0">
    <div>
        <div>
            <nav class="sm:hidden" aria-label="Back">
                <a href="{{ $back }}" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                    <!-- Heroicon name: solid/chevron-left -->
                    <svg class="flex-shrink-0 -ml-1 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Back
                </a>
            </nav>
            <nav class="hidden sm:flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="{{ url('/') }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">{{ app_team_name() }}</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            <a href="{{ $back }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $backName }}</a>
                        </div>
                    </li>
                    @if($link)
                        <li>
                            <div class="flex items-center">
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <a href="javascript:;" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{$link}}</a>
                            </div>
                        </li>
                    @endif
                </ol>
            </nav>
        </div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                @if($carts)
                    <h2 class="btn-title text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:tracking-tight sm:truncate">Basket: € {{ $carts->total }}</h2>
                @endif
            </div>

            @if($action)
                <div class="mt-4 flex-shrink-0 flex md:mt-0 md:ml-4">
                    <a href="{{ route('checkout.index') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        Continue
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>

