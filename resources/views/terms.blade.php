<x-guest-layout>
    <x-wedo.pages.header :title="__('Terms of service')"></x-wedo.pages.header>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 sm:py-8 lg:px-8 bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="mt-2 w-full text-sm text-gray-500 whitespace-pre-line">
                @foreach(cache()->get('footers') as $footer)
                    @if($footer->url === url()->current())
                        {!! $footer?->content !!}
                    @endif
                @endforeach
            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <x-wedo.home.footer></x-wedo.home.footer>
</x-guest-layout>
