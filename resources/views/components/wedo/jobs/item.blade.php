@props(['row'])

<li class="{{ false ? 'bg-yellow-50 ' : 'bg-white '}} relative px-4 py-6 sm:p-6 shadow hover:shadow-xl hover:-translate-y-1 ease-in-out delay-150 duration-300 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-{{ app_color() }}-500">

    <article>

        <div>

            <div class="flex space-x-3">

                <div class="flex-shrink-0">

                    <a href="javascript:;" class="hidden lg:block" wire:click="$set('show', {{ $row->id }})">

                        <img class="h-10 w-10 rounded-full cursor-pointer" src="{{ $row->avatar_url }}" alt="{{ $row->name }}">

                    </a>

                    <a href="{{ route('jobs.show', ['id' => $row->id, 'slug' => $row->slug]) }}" class="lg:hidden">

                        <img class="h-10 w-10 rounded-full cursor-pointer" src="{{ $row->avatar_url }}" alt="{{ $row->name }}">

                    </a>


                </div>

                <div class="min-w-0 flex-1">

                    <p class="text-sm font-medium text-gray-900">

                        <a href="javascript:;" wire:click="$set('show', {{ $row->id }})" class="hidden lg:block hover:underline font-bold">{{ $row->company->name }}</a>

                        <a href="{{ route('jobs.show', ['id' => $row->id, 'slug' => $row->slug]) }}" class="lg:hidden hover:underline font-bold">{{ $row->company->name }}</a>

                    </p>

                    <p class="text-sm text-gray-500">

                        <a href="javascript:;" class="hover:underline">

                            <time datetime="2020-12-09T11:43:00">{{ $row->live_at }}</time>

                        </a>

                    </p>

                    @if(false)

                        <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-yellow-600" aria-hidden="true"></div>

                        <div class="absolute inset-x-0 top-0 transform translate-y-px">

                            <div class="flex justify-end transform -translate-y-1/2">

                                <span class="inline-flex rounded-full bg-yellow-600 px-4 py-1 mr-5 text-sm font-semibold tracking-wider uppercase text-white"> PREMIUM </span>

                            </div>

                        </div>

                    @endif

                </div>

                <div class="flex-shrink-0 justify-self-stretch">

                    <a href="javascript:;" wire:click="$set('show', {{ $row->id }})" class="hidden lg:block text-xs text-{{ app_color() }}-500 hover:text-{{ app_color() }}-900 font-bold underline">

                        Details <span aria-hidden="true">&rarr;</span>

                    </a>


                    <a href="{{ route('jobs.show', ['id' => $row->id, 'slug' => $row->slug]) }}" class="lg:hidden text-xs text-{{ app_color() }}-500 hover:text-{{ app_color() }}-900 font-bold underline">

                        Details <span aria-hidden="true">&rarr;</span>

                    </a>

                </div>

            </div>

            <ul role="list" class="mt-2 leading-8">

                @if(false)

                    <li class="inline mr-2">

                        <a href="#" class="relative inline-flex items-center rounded-full animate-pulse border border-rose-300 bg-rose-100 px-3 py-0.5">

                            <div class="absolute flex-shrink-0 flex items-center justify-center">

                                <span class="h-1.5 w-1.5 rounded-full bg-rose-400" aria-hidden="true"></span>

                            </div>

                            <div class="ml-3.5 text-sm font-medium text-rose-400">Urgent</div>

                        </a>

                    </li>

                @endif



                <li class="inline">

                    <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">

                        <div class="absolute flex-shrink-0 flex items-center justify-center">

                            <span class="h-1.5 w-1.5 rounded-full bg-purple-500" aria-hidden="true"></span>

                        </div>

                        <div class="ml-3.5 text-sm font-medium text-gray-900">{{ $row->job_type }}</div>

                    </a>

                </li>

            </ul>

            <a href="javascript:;" wire:click="$set('show', {{ $row->id }})" class="hidden lg:block hover:underline font-semibold">

                <h2 id="question-title-81614" class="mt-4 text-base font-medium text-{{ app_color() }}-900 text-xl">{{ $row->name }}</h2>

            </a>

            <a href="{{ route('jobs.show', ['id' => $row->id, 'slug' => $row->slug]) }}" class="lg:hidden hover:underline font-semibold">

                <h2 id="question-title-81614" class="mt-4 text-base font-medium text-{{ app_color() }}-900 text-xl">{{ $row->name }}</h2>

            </a>

        </div>

        <div class="mt-2 text-xs text-gray-700 space-y-4 text-justify">

            <p>{{ $row->address }}</p>

        </div>

        <div class="mt-6 flex justify-between space-x-8">

            <div class="flex space-x-6">

                <span class="inline-flex items-center text-sm">

                  <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">

                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                      </svg>

                    <span class="font-medium text-gray-500 text-xs md:text-sm">${{ $row->salary_min }} – ${{ $row->salary_max }}</span>

                    <span class="sr-only">Salary expectation</span>

                  </button>

                </span>

                <span class="inline-flex items-center text-sm">

                  <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">

                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                      </svg>

                    <span class="font-medium text-gray-500 text-xs md:text-sm">{{ $row->view_count }}</span>

                    <span class="sr-only">View Count</span>

                  </button>

                </span>

            </div>

            @if(true)

                <div class="flex text-sm">

                    <span class="inline-flex items-center text-sm">

                          <a href="#" class="inline-flex items-center space-x-2 text-{{ app_color() }}-400 hover:text-{{ app_color() }}-500 cursor-pointer">

                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                              </svg>

                              <span class="font-medium text-{{ app_color() }}-900 text-xs md:text-sm">
                                  Save Job
                              </span>

                          </a>

                    </span>
                </div>
            @endif

        </div>

    </article>

</li>

