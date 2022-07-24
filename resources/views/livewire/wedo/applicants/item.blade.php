<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <article class="mb-8">
        <!-- Profile header -->
        <div>
            <div>
                <img class="h-32 w-full object-cover lg:h-48 bg-gradient-to-r from-{{ app_color() }}-300"  src="{{ asset('images/circuit-board.svg') }}" alt="{{ $job->name }}">
            </div>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                    <div class="flex">
                        <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="{{ $job->name }}">
                    </div>
                    <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                            <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
                        </div>
                        <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">

                            <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                <!-- Heroicon name: solid/mail -->
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                <span>Message</span>
                            </button>
                            <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                                <!-- Heroicon name: solid/phone -->
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span>Call</span>
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
                                <a href="javascript:;" class="border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-base" aria-current="page">
                                    {{ __('Job overview') }}
                                </a>
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

                        <div class="sm:col-span-1">
                            <x-wedo.jobs.applicant-status status="{{ $applicant->status }}"></x-wedo.jobs.applicant-status>
                        </div>

                        <x-wedo.jobs.tags :tags="$job->tags"></x-wedo.jobs.tags>

                        <div class="col-span-1 sm:col-span-3 mt-8">
                            <div class="shadow sm:rounded-lg sm:overflow-hidden">
                                <div class="divide-y divide-gray-200">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h2 id="notes-title" class="text-base font-medium text-gray-900">{{ __('Notes') }}</h2>
                                    </div>
                                    <div class="px-4 py-6 sm:px-6">
                                        <ul role="list" class="space-y-8">
                                            <li>
                                                <div class="flex space-x-3">
                                                    <div class="flex-shrink-0">
                                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm">
                                                            <a href="#" class="font-medium text-gray-900">Leslie Alexander</a>
                                                        </div>
                                                        <div class="mt-1 text-sm text-gray-700">
                                                            <p>Ducimus quas delectus ad maxime totam doloribus reiciendis ex. Tempore dolorem maiores. Similique voluptatibus tempore non ut.</p>
                                                        </div>
                                                        <div class="mt-2 text-sm space-x-2">
                                                            <span class="text-gray-500 font-medium">4d ago</span>
                                                            <span class="text-gray-500 font-medium">&middot;</span>
                                                            <button type="button" class="text-gray-900 font-medium">Reply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="px-4 py-6 sm:px-6">
                                    <div class="flex space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <form action="#">
                                                <div>
                                                    <label for="comment" class="sr-only">About</label>
                                                    <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md" placeholder="Add a note"></textarea>
                                                </div>
                                                <div class="mt-3 flex items-center justify-between">
                                                    <a href="#" class="group inline-flex items-start text-sm space-x-2 text-gray-500 hover:text-gray-900">
                                                        <!-- Heroicon name: solid/question-mark-circle -->
                                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                                        </svg>
                                                        <span> Some HTML is okay. </span>
                                                    </a>
                                                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 sm:col-span-3 mt-8">
                            <h2 id="details-heading" class="sr-only">Additional details</h2>

                            <div class="border-t divide-y divide-gray-200">
                                <div x-data="{ open: false }">
                                    <h3>
                                        <!-- Expand/collapse question button -->
                                        <button @click="open = !open" type="button" class="group relative w-full py-6 flex justify-between items-center text-left" aria-controls="disclosure-1" aria-expanded="false">
                                            <!-- Open: "text-{{ app_color() }}-600", Closed: "text-gray-900" -->
                                            <span class="text-base font-medium text-gray-900" :class="{ 'text-{{ app_color() }}-600': open, 'text-gray-900': !(open) }"> Additional details </span>
                                            <span class="ml-6 flex items-center">
                      <!--
                        Heroicon name: outline/plus-sm

                        Open: "hidden", Closed: "block"
                      -->
                      <svg class="h-6 w-6 text-gray-400 group-hover:text-gray-500 block"  :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
                                                <!--
                                                  Heroicon name: outline/minus-sm

                                                  Open: "block", Closed: "hidden"
                                                -->
                      <svg class="hidden h-6 w-6 text-{{ app_color() }}-400 group-hover:text-{{ app_color() }}-500" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                      </svg>
                    </span>
                                        </button>
                                    </h3>
                                    <div class="col-span-1 sm:col-span-3" id="disclosure-1" x-show="open" x-cloak>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div class="col-span-1">
                                                <dt class="text-sm font-medium text-gray-900">{{ __('Job Description') }}</dt>
                                                <dd class="mt-1 max-w-prose text-base text-gray-600 text-justify space-y-5">
                                                    {{ $job->content }}
                                                </dd>
                                            </div>

                                            @if($job->responsibilities)
                                                <div class="col-span-1 border-t border-gray-200 pt-8">
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
                                                <div class="col-span-1 border-t border-gray-200 pt-8">
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
                                                <div class="col-span-1 border-t border-gray-200 pt-8">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- More sections... -->
                            </div>
                        </div>

                        <div class="col-span-1 sm:col-span-3 border-t border-gray-200 pt-8">
                            <dt class="text-base font-medium text-gray-900">Files</dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    @foreach($applicant->attachments as $attachment)
                                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                            <div class="w-0 flex-1 flex items-center">
                                                <!-- Heroicon name: solid/paper-clip -->
                                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                </svg>
                                                <span class="ml-2 flex-1 w-0 truncate"> {{ $attachment->name }} </span>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="{{ $attachment->url }}" target="_blank" class="font-medium text-blue-600 hover:text-blue-500"> Download </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="col-span-1">
                <section aria-labelledby="summary-heading" class="bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8 mt-8 sm:mt-2 2xl:mt-5 lg:col-span-5">
                    <h2 id="summary-heading" class="text-lg font-medium text-gray-900">About Us</h2>

                    <dl class="mt-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm text-gray-600">Subtotal</dt>
                            <dd class="text-sm font-medium text-gray-900">$99.00</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="flex items-center text-sm text-gray-600">
                                <span>Shipping estimate</span>
                                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Learn more about how shipping is calculated</span>
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="flex text-sm text-gray-600">
                                <span>Tax estimate</span>
                                <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Learn more about how tax is calculated</span>
                                    <!-- Heroicon name: solid/question-mark-circle -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </dt>
                            <dd class="text-sm font-medium text-gray-900">$8.32</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4 flex items-center justify-between">
                            <dt class="text-base font-medium text-gray-900">Order total</dt>
                            <dd class="text-base font-medium text-gray-900">$112.32</dd>
                        </div>
                    </dl>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-{{ app_color() }}-500">Checkout</button>
                    </div>
                </section>
            </div>
        </div>
    </article>
</div>
