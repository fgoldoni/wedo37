<footer {{ $attributes->merge(['class' => 'text-center bg-white']) }}>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto space-y-6">
            <p class="text-xs font-medium">{{ __('pages/home.footer.copyright', ['team' => app_team_name()]) }}</p>
            <div class="flex justify-center space-x-6">
                @if(app_team()->facebook)
                    <a href="{{ app_team()->facebook }}" target="_blank" class="text-blue-500">
                        <svg
                            class="w-8 h-8"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                            />
                        </svg>
                    </a>
                @endif

                @if(app_team()->instagram)
                    <a href="{{ app_team()->instagram }}" target="_blank" class="text-gray-500">
                        <img class="w-8 h-8" src="{{ asset('images/svg/instagram-seeklogo.com.svg') }}" alt="{{ app_team()->instagram }}">
                    </a>
                @endif

                @if(app_team()->twitter)
                    <a href="{{ app_team()->twitter }}" target="_blank" class="text-blue-500">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                    </a>
                @endif

                @if(app_team()->youtube)
                    <a href="{{ app_team()->youtube }}" target="_blank" class="text-red-500">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 80 56" xmlns="http://www.w3.org/2000/svg"><path d="m41.771 55.637-16.395-.3c-5.308-.104-10.63.104-15.834-.978-7.916-1.618-8.477-9.548-9.064-16.2-.809-9.35-.496-18.872 1.03-28.145.862-5.204 4.252-8.309 9.495-8.647C28.703.141 46.52.287 64.18.86c1.865.052 3.743.339 5.582.665 9.078 1.591 9.299 10.578 9.888 18.143.586 7.642.339 15.325-.783 22.915-.9 6.285-2.622 11.556-9.888 12.065-9.104.665-18 1.2-27.129 1.03 0-.04-.052-.04-.078-.04Zm-9.638-15.912c6.86-3.94 13.59-7.813 20.411-11.725-6.873-3.94-13.59-7.813-20.411-11.726v23.451Z" fill-rule="nonzero"></path></svg>
                    </a>
                @endif
            </div>

            @livewire('wedo.home.footer')


            <p class="max-w-lg mx-auto text-xs text-gray-500">
                {{ __('pages/home.footer.description') }}
            </p>
        </div>
    </div>
</footer>
