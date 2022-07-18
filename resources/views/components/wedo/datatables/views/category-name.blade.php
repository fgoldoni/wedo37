<div class="flex items-center space-x-3">
    <div class="shrink-0 w-2.5 h-2.5 rounded-full {{ $row->online ? 'bg-green-600': 'bg-secondary-400 dark:bg-secondary-600' }}"></div>
    <div class="whitespace-nowrap px-3 text-sm text-gray-500">
        <div class="text-gray-900">
            {{ $row->name }} @if($row->parent_id)<span class="text-secondary-500 font-normal dark:text-secondary-400">{{ __('in :parent', ['parent' => $row->parent->name]) }}</span>@endif
        </div>
        <div class="text-gray-500">Optimization</div>
    </div>
</div>
