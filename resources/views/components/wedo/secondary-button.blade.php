@props([
    'link' => false,
    'disabled' => false,
])

@if($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition']) }}
    >
        {{ $slot }}
    </a>
@else
    <button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'button', 'class' => 'uppercase inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 disabled:opacity-50 disabled:cursor-wait']) }}>
        {{ $slot }}
    </button>
@endif
