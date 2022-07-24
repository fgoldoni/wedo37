<div class="col-span-1 sm:col-span-3 mt-8">
    <div class="divide-y divide-gray-200">
        <div class="pb-4">
            <h2 id="activity-title" class="text-lg font-medium text-gray-900">Activity</h2>
        </div>
        <div class="pt-6">
            <!-- Activity feed-->
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
                                @livewire('wedo.applicants.comment-form', ['comment' => $comment->id], key('comment-' . $comment->id))
                            </div>
                        @endif


                    @endforeach
                </ul>
            </div>
            @if($editId === 0)
                 @livewire('wedo.applicants.comment-form', ['comment' => $comment->id], key('comment-0'))
            @endif

        </div>
    </div>
</div>
