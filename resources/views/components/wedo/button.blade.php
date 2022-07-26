@props([
    'link' => false,
    'disabled' => false,
])


@if($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'w-full flex items-center justify-center bg-' . app_color() . '-600 py-2 px-2.5 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-' . app_color() . '-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-' . app_color() . '-500 sm:w-full sm:flex-grow-0']) }}
    >
        {{ $slot }}
    </a>
@else
    <button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => "uppercase inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-" . app_color() . "-600 hover:bg-" . app_color() . "-700 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:ring-" . app_color() . "-500 disabled:opacity-50 disabled:cursor-wait"]) }}>
        {{ $slot }}
    </button>
@endif


