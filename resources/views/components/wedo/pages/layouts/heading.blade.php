<div>
    <x-wedo.alert></x-wedo.alert>
    <div {{ $attributes->merge(['class' => 'md:flex md:items-center md:justify-between pb-5 border-b border-secondary-200']) }}>
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{ $title }}</h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if(isset($action))
                {{ $action }}
            @endif
        </div>
    </div>
</div>
