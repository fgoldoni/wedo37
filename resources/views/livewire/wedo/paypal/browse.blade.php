<div>
    <div class="px-4 py-5 sm:p-6">
        <div>
            <div class="flex items-center justify-center">
                <x-wedo.loader class="h-8 w-8" wire:loading></x-wedo.loader>
                <span class="animate-pulse text-gray-900 text-4xl" wire:loading> Processing ... </span>
            </div>
            <div wire:loading.remove>
                {!! $payment !!}
            </div>
        </div>
    </div>
</div>
