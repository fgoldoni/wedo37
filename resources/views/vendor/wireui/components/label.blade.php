<label {{ $attributes->class([
        'block text-sm font-medium',
        'text-negative-600'  => $hasError,
        'opacity-60'         => $attributes->get('disabled'),
        'text-gray-500 dark:text-gray-400' => !$hasError,
    ]) }}>
    {{ $label ?? $slot }}
</label>
