@if($carts)
    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-{{ app_color() }}-600 rounded-full">
        {{ $carts?->total_quantity }}
    </span>
@endif

