@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['autocomplete' => 'off', 'type' => 'text', 'class' => 'mt-1 block w-full dark:bg-secondary-700 dark:text-white placeholder-secondary-500 dark:placeholder-secondary-400 rounded-md shadow-sm border-slate-300 dark:border-secondary-700 focus:ring-' . app_color() . '-500 focus:border-' . app_color() . '-500 sm:text-sm']) !!} />
