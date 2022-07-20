<div>
    @if($row->url)
        <a href="{{ $row->url }}" target="_blank">
            @if($row->mime_type === 'application/pdf')
                <img class="inline-block h-14 w-14 text-gray-700" src="{{ asset('images/noun-pdf-749513.svg') }}" alt="{{ $row->name }}">
            @elseif($row->mime_type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                <img class="inline-block h-14 w-14 text-gray-700" src="{{ asset('images/noun-docx-1126811.svg') }}" alt="{{ $row->name }}">
            @else
                <img class="inline-block h-14 w-14 text-gray-700" src="{{ asset('images/noun-document-4996788.svg') }}" alt="{{ $row->name }}">
            @endif
        </a>
    @else
        <x-heroicon-s-exclamation-circle class="inline-block h-6 w-6 text-rose-700 hover:text-rose-900" />
    @endif

</div>
