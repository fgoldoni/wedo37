@props([
    'link' => false,
])


@if($link)
    <a
        href="{{ $link }}"
        {{ $attributes->merge(['class' => 'inline-flex underline items-center whitespace-nowrap font-medium text-primary-700 hover:text-primary-500']) }}
    >
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 uppercase focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-secondary-900 focus:ring-primary-500']) }}>
        {{ $slot }}
    </button>
@endif
