@props([
    'comment',
])

<li {{ $attributes }}>

    <div class="relative pb-8">
        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex items-start space-x-3">
            <div class="relative">
                <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->name }}">

                <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                      <!-- Heroicon name: solid/chat-alt -->
                                                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                                      </svg>
                                                    </span>
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
