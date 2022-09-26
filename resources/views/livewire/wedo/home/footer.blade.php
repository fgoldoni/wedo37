<ul role="list" class="mt-4 space-y-4">
    @forelse ($rows as $row)
        <li>
            <a href="{{ $row->url }}" class="text-base text-gray-500 hover:text-gray-900">{{ $row->name }}</a>
        </li>
    @empty
    @endforelse
</ul>
