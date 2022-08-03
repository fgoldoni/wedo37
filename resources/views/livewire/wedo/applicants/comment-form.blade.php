<div @class(['flex items-start space-x-4', 'mt-6' => !($comment == 0) ])>
    <div class="flex-shrink-0">
        <img class="inline-block h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
    </div>
    <div class="min-w-0 flex-1">
        <form action="#" class="relative">
            <div class="border border-gray-300 rounded-lg shadow-sm overflow-hidden focus-within:border-{{ app_color() }}-500 focus-within:ring-1 focus-within:ring-{{ app_color() }}-500">
                <label for="comment" class="sr-only">{{ __('Add your message') }}</label>
                <textarea rows="3" name="comment" id="comment" class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm" placeholder="{{ __('Add your message ...') }}"></textarea>

                <!-- Spacer element to match the height of the toolbar -->
                <div class="py-2" aria-hidden="true">
                    <!-- Matches height of button in toolbar (1px border + 36px content height) -->
                    <div class="py-px">
                        <div class="h-9"></div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 inset-x-0 pl-3 pr-2 py-2 flex justify-between">
                <div class="flex items-center space-x-5">
                    <div class="flex items-center">
                        <button type="button" class="-m-2.5 w-10 h-10 rounded-full flex items-center justify-center text-gray-400 hover:text-gray-500">
                            <!-- Heroicon name: solid/paper-clip -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Attach a file</span>
                        </button>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <x-wedo.secondary-button type="submit" class="inline-flex items-center px-4 py-2">
                        <span>{{ __('Send') }}</span>
                    </x-wedo.secondary-button>
                </div>

            </div>
        </form>
    </div>
</div>
