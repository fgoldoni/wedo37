@props(['label' => 'Send Us Your Resume'])

<div {{ $attributes->only(['class']) }}>
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span>
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
           <label
               for="{{ $attributes['id'] }}"
               :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500': focused }"
           >
               <x-wedo.outline-button class="w-full">
                   <x-heroicon-o-document-add wire:loading.remove wire:target="upload" class="-ml-1 mr-2 h-5 w-5 text-{{ app_color() }}-400"/>
                   <x-wedo.loader wire:loading wire:target="upload"/>
                   <span>{{ $label }}</span>
                </x-wedo.outline-button>
           </label>

        </span>
    </div>
</div>







