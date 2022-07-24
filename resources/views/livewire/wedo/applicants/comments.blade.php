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
                        <li>
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
                                                <span class="text-gray-500 font-medium">&middot;</span>
                                                <button type="button" class="text-{{ app_color() }}-900 font-medium text-xs underline">Reply</button>
                                            </div>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-700">
                                            {!! $comment->content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @foreach($comment->replies as $comment)
                            <li class="ml-10">
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
                                                    <span class="text-gray-500 font-medium">&middot;</span>
                                                    <button type="button" class="text-{{ app_color() }}-900 font-medium text-xs underline">Reply</button>
                                                </div>
                                            </div>
                                            <div class="mt-2 text-sm text-gray-700">
                                                {!! $comment->content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    @endforeach
                </ul>
            </div>
            <div class="mt-6">
                <div class="flex space-x-3">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">

                            <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                              <!-- Heroicon name: solid/chat-alt -->
                              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                              </svg>
                            </span>
                        </div>
                    </div>
                    <div class="min-w-0 flex-1">
                        <form action="#">
                            <div>
                                <label for="comment" class="sr-only">Comment</label>
                                <textarea id="comment" name="comment" rows="3" class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 rounded-md" placeholder="Leave a comment"></textarea>
                            </div>
                            <div class="mt-6 flex items-center justify-end space-x-4">
                                <button type="button" class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                    <!-- Heroicon name: solid/check-circle -->
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Close issue</span>
                                </button>
                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-{{ app_color() }}-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-900">Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
