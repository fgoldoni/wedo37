<div>
    <a href="{{ $row->url }}" target="_blank">
        @if($row->mime_type === 'image/jpeg')
            <x-heroicon-s-cloud-download class="w-8 h-8 text-gray-500" />
        @endif
    </a>
</div>
