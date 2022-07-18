<div class="flex items-center">
    <div class="h-10 w-10 flex-shrink-0">
        <img class="h-10 w-10 rounded-full" src="{{ $row->profile_photo_url }}" alt="{{ $row->name }}">
    </div>
    <div class="ml-4">
        <div class="flex items-center">
            <div class="font-medium text-gray-900">{{ $row->name  }}</div>
            <x-g-job.button class="px-4" link="{{ route('impersonate', $row->id) }}">impersonate &nbsp; <span aria-hidden="true">&rarr;</span></x-g-job.button>
        </div>
        <div class="text-sm leading-5 text-secondary-500 dark:text-secondary-400">
            {{ __('Registered on') }} <time datetime="{{ $row->created_at->format('Y-m-d') }}" class="capitalize">{{ $row->created_at->formatLocalized('%d %B %Y') }}</time>
        </div>
    </div>
</div>


