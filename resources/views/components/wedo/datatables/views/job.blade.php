<div class="flex items-center">
    <div class="h-10 w-10 flex-shrink-0">
        <img class="h-10 w-10 rounded-full" src="{{ $row->job_avatar_url }}" alt="">
    </div>
    <div class="ml-4">
        <div class="font-medium text-gray-900"> {{ $row->job_name }}</div>
        <a href="javascript:;" class="group inline-flex text-base font-medium">
            <x-heroicon-o-map class="flex-shrink-0 mr-2 h-6 w-6 text-gray-400 group-hover:text-gray-500" />
            <span class="text-gray-500 hover:text-gray-700">{{ $row->job_city }} {{ $row->job_country_emoji }}</span>
        </a>
    </div>
</div>
