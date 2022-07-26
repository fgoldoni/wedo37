<div>
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
                    <x-wedo.secondary-button wire:click="$emitUp('editComment', 0)" type="button"  class="cursor-not-allowed w-full items-center">
                        <span>{{ __('Cancel') }}</span>
                    </x-wedo.secondary-button>

                    <x-wedo.outline-button type="submit" class="cursor-not-allowed w-full items-center">
                        <span>{{ __('Send') }}</span>
                    </x-wedo.outline-button>
                </div>
            </form>
        </div>
    </div>
</div>


