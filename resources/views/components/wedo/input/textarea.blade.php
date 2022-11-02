@props(['value' => null])

<textarea {{ $attributes->merge(['class' => 'block w-full rounded-md shadow-sm border-' . app_color() . '-300 dark:bg-' . app_color() . '-700 dark:text-white dark:border-' . app_color() . '-700 focus:ring-primary-500 focus:border-' . app_color() . '-500 sm:text-sm']) }} rows="4">{{ $value }}</textarea>
