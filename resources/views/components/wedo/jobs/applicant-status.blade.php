@props(['status'])

<x-wedo.secondary-button class="cursor-not-allowed w-full items-center @if ($status === 'approved') text-green-400 @elseif($status === 'rejected') text-rose-400 @else text-yellow-400 @endif">
    <svg class="-ml-0.5 mr-1.5 h-2 w-2 @if ($status === 'approved') text-green-400 @elseif($status === 'rejected') text-rose-400 @else text-yellow-400 @endif" fill="currentColor" viewBox="0 0 8 8">
        <circle cx="4" cy="4" r="3" />
    </svg>
    <span class="@if ($status === 'approved') text-green-400 @elseif($status === 'rejected') text-rose-400 @else text-yellow-400 @endif">{{ $status }}</span>
</x-wedo.secondary-button>

