@props(['ticket'])
<div class="bg-gray-200">
    <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
        <div class="text-center">
            <h2 class="text-xl leading-6 font-semibold text-gray-700">{{ app_event()->start }}</h2>
            <p class="mt-2 text-3xl tracking-tight font-bold text-gray-900 sm:text-4xl sm:tracking-tight lg:text-5xl lg:tracking-tight">{{ app_event()->artist }}</p>
            <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-700 sm:mt-5 sm:text-2xl whitespace-pre-wrap">{{ app_event()->address }}</p>
        </div>
    </div>
    <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
        <div class="relative z-0">
            <div class="absolute inset-0 h-5/6 bg-gray-200 lg:h-2/3"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="relative p-10 mt-10 bg-white rounded-lg shadow-xl md:mt-0">
                            <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-{{ $ticket->color }}-600" aria-hidden="true"></div>
                            <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                <div class="flex justify-center transform -translate-y-1/2">
                                    <span class="inline-flex rounded-full bg-{{ $ticket->color }}-600 px-4 py-1 text-base font-semibold text-white"> Most popular </span>
                                </div>
                            </div>
                            <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                <div>
                                    <h3 class="uppercase text-center text-3xl tracking-tight font-semibold text-transparent bg-clip-text bg-gradient-to-r from-{{ $ticket->color }}-500 to-{{ $ticket->color }}-900 sm:-mx-6" id="tier-growth">{{ $ticket->name }}</h3>
                                    <div class="mt-4 flex items-center justify-center">
                                                        <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl sm:tracking-tight">
                                                          <span class="mt-2 mr-2 text-4xl tracking-tight font-medium"> $ </span>
                                                          <span class="font-bold"> {{ $ticket->price }} </span>
                                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('carts.index', ['ticketId' => $ticket->id]) }}" class="hover:scale-105 hover:shadow-2xl ease-in-out duration-150 flex items-center justify-center w-full px-6 py-3 my-8 text-lg text-white bg-{{ app_color() }}-600 rounded-md hover:bg-{{ app_color() }}-700 sm:w-auto">
                                {{ __('Continue') }}
                                <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <div class="space-y-4 lg:pl-2">
                                <p class="mb-3 text-lg font-semibold text-gray-800">Everything in Basic, plus...</p>
                                <div class="flex items-start">
                                    <svg class="flex-none w-6 h-6 p-px mt-px mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                    <p class="text-gray-700">Unlimited Projects, Tasks, and Alerts</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="flex-none w-6 h-6 p-px mt-px mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                    <p class="text-gray-700">Unlimited User and Admin Accounts</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="flex-none w-6 h-6 p-px mt-px mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                    <p class="text-gray-700">One-on-one Coaching Call</p>
                                </div>
                                <div class="flex items-start">
                                    <svg class="flex-none w-6 h-6 p-px mt-px mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                    <p class="text-gray-700">Access to Private Discord Group</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
