<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <article class="mb-8">
            <!-- Profile header -->
            <div>
                <div>
                    <img class="h-32 w-full object-cover lg:h-48" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
                </div>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                        <div class="flex">
                            <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{ $job->avatar_url }}" alt="{{ $job->name }}">
                        </div>
                        <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                <h1 class="text-2xl font-bold text-gray-900 truncate">{{ $job->name }}</h1>
                            </div>
                            <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <!-- Heroicon name: solid/mail -->
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    <span>Quick Apply</span>
                                </button>
                                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                    <!-- Heroicon name: solid/phone -->
                                    <svg class="-ml-1 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="col-span-1 md:col-span-2">
                    <!-- Tabs -->
                    <div class="mt-6 sm:mt-2 2xl:mt-5">
                        <div class="border-b border-gray-200">
                            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                                    <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                    <a href="javascript:;" class="border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page"> Job Overview </a>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Description list -->
                    <div class="mt-6 w-full mx-auto px-4 sm:px-6 lg:px-8">
                        <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div class="sm:col-span-1">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-cube class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $job->job_type }}</span>
                                </a>
                            </div>

                            <div class="col-span-1 sm:col-span-2">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-map class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $job->address }}</span>
                                </a>
                            </div>

                            <div class="sm:col-span-1">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-scale class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $job->salary_min }} - {{ $job->salary_max }} / <span class="capitalize">{{ $job->salary_type }}</span></span>
                                </a>
                            </div>

                            @if($job->negotiable)
                                <div class="sm:col-span-1">
                                    <a href="javascript:;" class="group inline-flex text-base font-medium">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <span class="text-gray-500 hover:text-gray-700">{{ __('Negotiable') }}</span>
                                    </a>
                                </div>
                            @endif



                            <div class="sm:col-span-1">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-clock class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-{{ app_color() }}-500 hover:text-{{ app_color() }}-700">{{ $job->closing_to }}</span>
                                </a>
                            </div>

                            <div class="sm:col-span-1">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-external-link class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $job->live_at }}</span>
                                </a>
                            </div>

                            <div class="sm:col-span-1">
                                <a href="javascript:;" class="group inline-flex text-base font-medium">
                                    <x-heroicon-o-eye class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500"/>
                                    <span class="text-gray-500 hover:text-gray-700">{{ $job->view_count }}</span>
                                </a>
                            </div>

                            <div class="col-span-1 sm:col-span-3 mt-8">
                                <dt class="text-sm font-medium text-gray-900">{{ __('Job Description') }}</dt>
                                <dd class="mt-1 max-w-prose text-base text-gray-600 text-justify space-y-5">
                                    {{ $job->content }}
                                </dd>
                            </div>

                            @if($job->responsibilities)
                                <div class="col-span-1 sm:col-span-2 border-t border-gray-200 pt-8">
                                    <h2 class="text-sm font-medium text-gray-900">{{__('Key Responsibilities')}}</h2>

                                    <div class="mt-4 prose prose-sm text-gray-500">
                                        <ul role="list">
                                            @forelse ($job->responsibilities as $responsibility)
                                                <li class="text-justify">{{ $responsibility }}</li>
                                            @empty
                                                <p>No Skill & Experience required</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if($job->skills)
                                <div class="col-span-1 sm:col-span-3 border-t border-gray-200 pt-8">
                                    <h2 class="text-sm font-medium text-gray-900">{{__('Skill & Experience')}}</h2>

                                    <div class="mt-4 prose prose-sm text-gray-500">
                                        <ul role="list">
                                            @forelse ($job->skills as $skill)
                                                <li class="text-justify">{{ $skill }}</li>
                                            @empty
                                                <p>No Skill & Experience required</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if($job->benefits)
                                <div class="col-span-1 sm:col-span-3 border-t border-gray-200 pt-8">
                                    <h2 class="text-sm font-medium text-gray-900">{{__('Benefits')}}</h2>

                                    <div class="mt-4 prose prose-sm text-gray-500">
                                        <ul role="list">
                                            @forelse ($job->benefits as $benefit)
                                                <li class="text-justify">{{ $benefit }}</li>
                                            @empty
                                                <p>No Skill & Experience required</p>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            @endif



                        </dl>
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

                                <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Get started</button>

                            </div>

                            <div class="mt-6 flex items-center justify-center">

                                {!! $job->iframe !!}

                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </article>
    </div>

    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
