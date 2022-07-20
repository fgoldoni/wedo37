<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 px-4 sm:px-0 mb-4">
    <div class="col-span-1 sm:col-span-2">
        <x-wedo.alert></x-wedo.alert>
    </div>
    <div class="relative flex items-center sm:px-0">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">{{ $title }}</h2>
        </div>
    </div>

    <div class="relative flex items-center sm:justify-end sm:px-0">
        <div class="flex">
            @if(isset($action))
                {{ $action }}
            @endif
        </div>
    </div>

</div>
