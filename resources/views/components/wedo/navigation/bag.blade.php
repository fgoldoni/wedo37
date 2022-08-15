<a href="{{ route('carts.index') }}"  {{ $attributes->merge(['class' => 'relative ml-auto bg-white flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}>
    <span class="sr-only">View notifications</span>
    <!-- Heroicon name: outline/bell -->
    <x-heroicon-o-shopping-bag class="h-6 w-6"></x-heroicon-o-shopping-bag>
    @livewire('wedo.carts.bag')
</a>
