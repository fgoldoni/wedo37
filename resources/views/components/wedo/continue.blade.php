@props([
    'disabled' => false,
])

<div {{ $attributes->merge(['class' => 'hidden lg:block sticky bottom-0 z-10 py-1 text-sm font-medium text-gray-500']) }}>
    <button
        type="button"
        wire:click="continue"
        {{ $attributes->only(['id']) }}
        {{ $disabled ?  'disabled' : ''}}
        @class([
            'w-full rounded border border-transparent py-2 px-4 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-' . app_color() . '-500 focus:ring-offset-2',
            'btn-base text-white bg-gradient-to-r from-' . app_color() . '-500 via-' .  app_color() . '-600 to-' . app_color() . '-700 hover:bg-gradient-to-br' => !$disabled,
            'disabled bg-' . app_color() . '-100 text-' . app_color() . '-400 cursor-not-allowed' => $disabled
        ])>
        <x-wedo.loader wire:loading wire:target="continue"></x-wedo.loader>
        {{ __('layout.continue') }}
    </button>
</div>
