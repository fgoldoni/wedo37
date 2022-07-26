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
    <button {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-' . app_color() . '-600 hover:bg-' . app_color() . '-700 uppercase focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-900 focus:ring-' . app_color() . '-500']) }}>
        {{ $slot }}
    </button>
@endif


