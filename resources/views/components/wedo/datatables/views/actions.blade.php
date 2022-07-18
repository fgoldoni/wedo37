<div class="pr-6 text-right">
    @if($row->id === auth()->id())
        <span class="flex items-center text-sm leading-5 text-secondary-500 text-right dark:text-secondary-400">
            <x-heroicon-o-user-circle class="w-5 h-5 mr-1" />
            {{ __('Me') }}
        </span>
    @endif
    @if(auth()->user()->isAdministrator() && !$row->isAdministrator())
        <x-jet-dropdown align="right" width="w-60">

            <x-slot name="trigger">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                    <x-heroicon-s-dots-vertical class="w-5 h-5" />
                </button>
            </x-slot>


            <x-slot name="content">
                <x-jet-dropdown-link wire:click="dialogConfirm({{ $row->id }})" class="cursor-pointer">

                    <x-heroicon-s-trash class="mr-3 h-5 w-5 text-secondary-400 group-hover:text-secondary-500" />

                    {{ __('Delete') }}

                </x-jet-dropdown-link>
            </x-slot>

        </x-jet-dropdown>
    @endif
</div>
