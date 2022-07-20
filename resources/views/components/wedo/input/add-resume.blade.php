<div>
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span>
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
           <label
               for="{{ $attributes['id'] }}"
               :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500': focused }"
               class="cursor-pointer text-white px-8 py-4 inline-block mt-5 font-medium text-lg bg-gray-900 focus:ring-4 focus:ring-gray-900 focus:ring-offset-2 rounded-xl"
           >
                {{ __('Send Us Your Resume') }}
           </label>

        </span>
    </div>
</div>



