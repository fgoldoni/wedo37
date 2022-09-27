<select onchange="location = this.value;" id="language" name="language" class="block w-full appearance-none rounded-md border border-gray-300 bg-white bg-none py-2 pl-3 pr-10 text-base text-gray-900 focus:border-{{ app_color() }}-500 focus:outline-none focus:ring-{{ app_color() }}-500 sm:text-sm">
    @foreach($availableLocales as $localeName => $availableLocale)
        <option @if($availableLocale['locale'] == $currentLocale) selected @endif value="{{ route('language', $availableLocale['locale']) }}">
            <span><span class="-ml-1 mr-2">{{ $availableLocale['emoji'] }}</span>&nbsp; {{ $localeName }}</span>
        </option>
    @endforeach
</select>
