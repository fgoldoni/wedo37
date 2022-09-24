<div class="grid grid-cols-2 gap-4 p-6 text-sm font-medium bg-gray-100 rounded-lg sm:grid-cols-3 lg:grid-cols-6">
    <a href="{{ url('/') }}" class="hover:opacity-75">{{ __('Home') }}</a>
    @forelse ($rows as $row)
        <a href="{{ $row->url }}" class="hover:opacity-75">{{ $row->name }}</a>
    @empty
    @endforelse
    <a href="javascript:;" class="hover:opacity-75">{{ __('Contact') }}</a>
</div>