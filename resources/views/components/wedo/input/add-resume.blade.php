@props(['label' => 'Send Us Your Resume'])

<div>
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span>
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
           <label
               for="{{ $attributes['id'] }}"
               :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500': focused }"
               class="cursor-pointer uppercase text-white px-4 py-2 inline-block font-medium text-lg bg-{{ app_color() }}-900 focus:ring-4 focus:ring-{{ app_color() }}-900 focus:ring-offset-2"
           >
                {{ $label }}
           </label>

        </span>
    </div>
</div>
