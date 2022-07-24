@props(['tags'])

@if($tags)
    <div {{ $attributes->merge(['class' => 'col-span-1 sm:col-span-3 pt-8']) }}>
        <h2 class="text-sm font-medium text-gray-900">{{__('Tags')}}</h2>
        <ul role="list" class="leading-8">
            @foreach($tags as $tag)
                <li class="inline">
                    <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                        <div class="absolute flex-shrink-0 flex items-center justify-center">
                            <span class="h-1.5 w-1.5 rounded-full bg-{{ app_color() }}-500" aria-hidden="true"></span>
                        </div>
                        <div class="ml-3.5 text-sm font-medium text-gray-500">{{ $tag }}</div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif

