@props(['label' => 'Send Us Your Resume'])

<div>
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span>
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
           <label
               for="{{ $attributes['id'] }}"
               :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500': focused }"
               class="uppercase inline-flex justify-center w-full border border-{{ app_color() }}-300 shadow-sm px-6 py-3 text-{{ app_color() }}-700 bg-{{ app_color() }}-100 text-base font-medium hover:bg-{{ app_color() }}-200"
           >
                <x-heroicon-o-document-add class="-ml-1 mr-3 h-6 w-6"/>
                {{ $label }}
           </label>

        </span>
    </div>
</div>







