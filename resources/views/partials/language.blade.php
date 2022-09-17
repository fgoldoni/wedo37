<div class="flex items-center ml-6 justify-center">
    @foreach($availableLocales as $localeName => $availableLocale)
        @if($availableLocale['locale'] !== $currentLocale)
            <x-nav-link :href="route('language', $availableLocale['locale'])" class="underline">
                <span><span class="-ml-1 mr-2">{{ $availableLocale['emoji'] }}</span>{{ $localeName }}</span>
            </x-nav-link>
        @endif
    @endforeach
</div>
