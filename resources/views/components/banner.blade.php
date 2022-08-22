@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner'), 'url' => session('flash.bannerUrl'), 'urlName' => session('flash.bannerUrlName')])

<div x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message, 'url' => $url, 'urlName' => $urlName]) }}"
     :class="{ 'bg-indigo-600': style == 'success', 'bg-red-700': style == 'danger', 'bg-yellow-700': style == 'warning', 'bg-gray-500': style != 'success' && style != 'danger' && style != 'warning' }"
     style="display: none;"
     x-show="show && message"
     x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    url = event.detail.url;
                    urlName = event.detail.urlName;
                    show = true;
                });
            ">
    <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
        <div class="pr-16 sm:text-center sm:px-16">
            <p class="font-medium text-white">
                <span class="md:hidden" x-text="message"></span>
                <span class="hidden md:inline" x-text="message"></span>

                @if($url)
                    <span class="block sm:ml-2 sm:inline-block">
                        <a href="{{ $url }}" class="btn-title cursor-pointer text-white font-bold underline">
                            {{ $urlName }}
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </span>
                @endif

                </template>

            </p>
        </div>
        <div class="absolute inset-y-0 right-0 pt-1 pr-1 flex items-start sm:pt-1 sm:pr-2 sm:items-start">
            <button type="button" x-on:click="show = false" class="flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white">
                <span class="sr-only">Dismiss</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
