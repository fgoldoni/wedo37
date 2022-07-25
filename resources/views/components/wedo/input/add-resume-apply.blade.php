@props(['label' => 'Send Us Your Resume'])

<div>
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span>
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
           <label
               for="{{ $attributes['id'] }}"
               :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500': focused }"
               class="uppercase inline-flex justify-center w-full border border-{{ app_color() }}-300 shadow-sm px-4 py-2 text-{{ app_color() }}-700 bg-{{ app_color() }}-100 text-base font-medium hover:bg-{{ app_color() }}-200 {{ $attributes->wire('loading') }}"
           >
                <x-heroicon-o-document-add wire:loading.remove wire:target="upload" class="-ml-1 mr-3 h-6 w-6"/>
               <svg wire:loading wire:target="upload" class="animate-spin -ml-1 mr-3 h-6 w-6 text-{{ app_color() }}-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
                {{ $label }}
           </label>

        </span>
    </div>
</div>







