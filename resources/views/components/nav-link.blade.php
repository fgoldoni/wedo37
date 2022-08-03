@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-50 text-' . app_color() . '-600 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium'
            : 'text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
