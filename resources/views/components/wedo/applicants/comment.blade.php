@props([
    'comment',
])

<li {{ $attributes }}>

    <div class="relative pb-8">
        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex items-start space-x-3">
            <div class="relative">
                <img class="inline-block h-10 w-10 rounded-full" src="{{ $comment->user->profile_photo_url }}" alt="">
            </div>
            <div class="min-w-0 flex-1">
                <div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-gray-900">{{ $comment->user->name }}</a>
                    </div>
                    <div class="mt-0.5 text-sm space-x-2">
                        <span class="text-gray-500 font-medium">{{ $comment->created_at }}</span>
                        @if(!$comment->reply)
                            <span class="text-gray-500 font-medium">&middot;</span>
                            <button wire:click="$emitUp('editComment', {{ $comment->id }})" type="button" class="text-{{ app_color() }}-900 font-medium text-xs underline">Reply</button>
                        @endif
                    </div>
                </div>
                <div class="mt-2 text-sm text-gray-700">
                    {!! $comment->content !!}
                </div>
            </div>
        </div>
    </div>

    @if(isset($comment->replies))
        @foreach($comment->replies as $comment)
            <x-wedo.applicants.comment class="ml-10" :comment="$comment"></x-wedo.applicants.comment>
        @endforeach
    @endif

</li>
