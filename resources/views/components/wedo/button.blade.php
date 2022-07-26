@props([
    'link' => false,
    'disabled' => false,
])


@if($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'inline-flex underline items-center whitespace-nowrap font-medium text-' . app_color() . '-700 hover:text-' . app_color() . '-500']) }}
    >
        {{ $slot }}
    </a>
@else
    <button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => "uppercase inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-" . app_color() . "-600 hover:bg-" . app_color() . "-700 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:ring-" . app_color() . "-500 disabled:opacity-50 disabled:cursor-wait"]) }}>
        {{ $slot }}
    </button>
@endif


