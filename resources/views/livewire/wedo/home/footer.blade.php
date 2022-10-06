<ul role="list" class="mt-4 space-y-4">
    <li>
        <a href="{{ route('terms') }}" class="text-base text-gray-500 hover:text-gray-900">{{ __('Terms of service') }}</a>
    </li>
    <li>
        <a href="{{ route('refund') }}" class="text-base text-gray-500 hover:text-gray-900">{{ __('Return Policy') }}</a>
    </li>
    <li>
        <a href="{{ route('protection') }}" class="text-base text-gray-500 hover:text-gray-900">{{ __('Privacy Policy') }}</a>
    </li>
    <li>
        <a href="{{ route('impressum') }}" class="text-base text-gray-500 hover:text-gray-900">{{ __('Legal Notice') }}</a>
    </li>
    @if(count($rows))
        @foreach ($rows as $row)
            <li>
                <a href="{{ $row->url }}" class="text-base text-gray-500 hover:text-gray-900">{{ $row->name }}</a>
            </li>
        @endforeach
    @endif
</ul>
