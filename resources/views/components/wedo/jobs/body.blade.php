@props([
    'job'
])
<x-wedo.jobs.overview :job="$job"></x-wedo.jobs.overview>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-3 w-full mx-auto px-4 sm:px-6 lg:px-8">
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
                        <li>{{ $responsibility }}</li>
                    @empty
                        <p>No Key Responsibilities required</p>
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
                        <li>{{ $skill }}</li>
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
                        <li>{{ $benefit }}</li>
                    @empty
                        <p>No Skill & Experience required</p>
                    @endforelse
                </ul>
            </div>
        </div>
    @endif

    <div class="col-span-1 sm:col-span-3 mt-8">
        <x-wedo.jobs.tags :tags="$job->tags"></x-wedo.jobs.tags>
    </div>
</div>
