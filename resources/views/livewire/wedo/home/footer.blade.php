<div class="grid grid-cols-2 gap-4 p-6 text-sm font-medium bg-gray-100 rounded-lg sm:grid-cols-3 lg:grid-cols-6">
    <a href="{{ url('/') }}" class="hover:opacity-75">{{ __('Home') }}</a>
    <a href="{{ route('tickets.index') }}" class="hover:opacity-75">{{ __('layout.navigation.browse_tickets') }}</a>
    @forelse ($rows as $row)
        <a href="{{ $row->url }}" class="hover:opacity-75">{{ $row->name }}</a>
    @empty
    @endforelse
</div>
