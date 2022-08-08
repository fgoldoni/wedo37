<div class="divide-y divide-gray-200 mt-4">
    <div>
        <div class="flow-root">
            <ul role="list" class="-mb-8">
                @foreach($comments as $comment)
                    @if(is_array($comment))
                        @php
                            $comment = json_decode(json_encode($comment), FALSE);
                        @endphp
                    @endif
                    <x-wedo.applicants.comment :comment="$comment"></x-wedo.applicants.comment>

                    @if($editId == $comment->id)
                        <div>
                            @livewire('wedo.applicants.comment-form', ['reply' => $comment->id, 'model' => $model, 'modelId' => $modelId], key('comment-' . $comment->id))
                        </div>
                    @endif


                @endforeach
            </ul>
        </div>
        @if($editId === 0)
            <div class="mt-4">
                @livewire('wedo.applicants.comment-form', ['reply' => 0, 'model' => $model, 'modelId' => $modelId], key('comment-0'))
            </div>
        @endif

    </div>
</div>
