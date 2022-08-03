<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <article class="mb-8">
        <x-wedo.jobs.profile :job="$job" :status="$applicant->status" :phone="$job->company?->phone"></x-wedo.jobs.profile>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            <div class="col-span-1 md:col-span-2">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    <div class="col-span-1 sm:col-span-2 w-full mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-200 mt-8">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="bg-gray-50 shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="space-y-1 md:flex md:items-baseline md:space-y-0 md:space-x-4">
                                    <h2 class="flex items-center text-lg font-medium text-gray-900 md:flex-shrink-0">
                                        <img class="-ml-1 mr-2 inline-block h-8 w-8 rounded-full" src="{{ $applicant->candidate->profile_photo_url }}" alt="{{ $applicant->candidate->name }}">
                                        <span>{{ $applicant->candidate->name }}</span>
                                    </h2>
                                    <div class="space-y-5 md:flex-1 md:min-w-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
                                        <p class="text-sm font-medium text-gray-500">&nbsp;</p>
                                        <div class="flex text-sm font-medium">
                                            <a href="javascript:;" class="text-indigo-600 hover:text-indigo-500">Applied Nr: {{ str_pad($applicant->id, 4, '0', STR_PAD_LEFT) }}</a>
                                            <div class="border-l border-gray-200 ml-4 pl-4 sm:ml-6 sm:pl-6">
                                                <a href="tel: {{ $applicant->phone }}" class="flex items-center text-indigo-600 hover:text-indigo-500">
                                                    <x-heroicon-o-phone-outgoing class="-ml-1 mr-2 h-5 w-5"/>
                                                    <span>{{ $applicant->phone }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 w-full text-sm text-gray-500 whitespace-pre-line border-t border-gray-200 divide-y divide-gray-200">
                                    {!! $applicant->message !!}
                                </div>
                            </div>
                        </div>

                       @if($applicant->attachments)
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
                                                <a href="{{ $attachment->url }}" target="_blank" class="underline font-medium text-{{ app_color() }}-900 hover:text-{{ app_color() }}-700"> Download </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                       @endif


                        @livewire('wedo.applicants.comments', ['model' => $applicant->model, 'modelId' => $applicant->id])
                    </div>

                    <x-wedo.jobs.overview :job="$job" class="col-span-1 sm:col-span-2"></x-wedo.jobs.overview>

                    <div class="col-span-1 sm:col-span-2">
                        <!-- Tags list -->
                        <x-wedo.jobs.tags :tags="$job->tags" class="w-full mx-auto px-4 sm:px-6 lg:px-8 border-t border-gray-200 pt-8"></x-wedo.jobs.tags>
                    </div>


                    <div class="col-span-1 sm:col-span-2">
                        <!-- Description list -->
                        <x-wedo.disclosure title="Details" class="border-t border-gray-200 pt-8">
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
                        </x-wedo.disclosure>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
                <x-wedo.applicants.company :company="$job->company"></x-wedo.applicants.company>
            </div>
        </div>
    </article>
</div>
