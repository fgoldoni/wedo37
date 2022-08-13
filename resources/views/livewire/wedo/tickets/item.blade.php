<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <article class="mb-8">
        <x-wedo.jobs.profile :item="$ticket" apply :phone="app_event()->phone"></x-wedo.jobs.profile>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="col-span-1 md:col-span-2 mt-6 sm:mt-2 2xl:mt-5">
                <x-wedo.tickets.ticket :ticket="$ticket"></x-wedo.tickets.ticket>
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
