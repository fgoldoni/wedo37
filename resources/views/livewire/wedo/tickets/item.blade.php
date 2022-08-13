<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <article class="mb-8">
        <x-wedo.jobs.profile :item="$ticket" apply :phone="app_event()->phone"></x-wedo.jobs.profile>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="col-span-1 md:col-span-2 mt-6 sm:mt-2 2xl:mt-5">
                <!-- This example requires Tailwind CSS v2.0+ -->
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
                                            <div class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
                                                <ul role="list" class="space-y-4">
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">Quia rem est sed impedit magnam</p>
                                                    </li>

                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">Dolorem vero ratione voluptates</p>
                                                    </li>

                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">Qui sed ab doloribus voluptatem dolore</p>
                                                    </li>

                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">Laborum commodi molestiae id et fugiat</p>
                                                    </li>

                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">Nam ut ipsa nesciunt culpa modi dolor</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-10">
                                                    <div class="rounded-lg shadow-md">
                                                        <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-{{ $ticket->color }}-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-{{ $ticket->color }}-700" aria-describedby="tier-growth"> Start your trial </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-span-1">

                <section aria-labelledby="timeline-title" class="lg:col-start-3 mt-6 sm:mt-2 2xl:mt-5">

                    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">

                        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Tips for candidates</h2>

                        <div class="mt-6 flow-root">

                            <ul role="list" class="-mb-8">

                                <li>

                                    <div class="relative pb-8">

                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>

                                        <div class="relative flex space-x-3">
                                            <div>

                                                    <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">

                                              <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                              </svg>

                                          </span>

                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Check if the offer matches your profile</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-09-20">#1</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="relative pb-8">

                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>

                                        <div class="relative flex space-x-3">
                                            <div>

                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">


                                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                                </svg>

                                            </span>
                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Check the closing date</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-09-22">#2</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <li>

                                    <div class="relative pb-8">

                                        <div class="relative flex space-x-3">

                                            <div>

                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">

                                                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />

                                                </svg>

                                            </span>

                                            </div>

                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">

                                                <div>

                                                    <p class="text-sm text-gray-500">Meet the employer in a professional location</p>

                                                </div>

                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">

                                                    <time datetime="2020-10-04">#3</time>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="mt-6 flex flex-col justify-stretch">
                            <x-wedo.secondary-button class="truncate" link="tel: {{ app_event()->phone }}">
                                <x-heroicon-o-location-marker class="w-6 h-6"></x-heroicon-o-location-marker>
                                {{ app_event()->address }}
                            </x-wedo.secondary-button>
                        </div>

                        <div class="mt-6 flex items-center justify-center">

                            {!! app_event()->iframe !!}

                        </div>

                    </div>

                </section>
            </div>
        </div>
    </article>
</div>
