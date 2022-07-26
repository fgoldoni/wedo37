@props([
    'link' => false,
    'disabled' => false,
])

@if($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'inline-flex underline items-center whitespace-nowrap font-medium text-' . app_color() . '-700 hover:text-' . app_color() . '500']) }}
    >
        {{ $slot }}
    </a>
@else
    <button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'button', 'class' => 'uppercase inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 disabled:opacity-50 disabled:cursor-wait']) }}>
        {{ $slot }}
    </button>
@endif
