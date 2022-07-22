<x-dropdown>
    <x-slot name="trigger">
        <div>
            <button type="button" class="max-w-xs flex items-center text-sm focus:outline-none border-l border-gray-300 pl-4">
                <span class="sr-only">{{ __('layout.user_dropdown.title')}}</span>
                <p {{ $attributes->merge(['class' => 'font-bold text-xs text-gray-200 hover:text-white mr-2 text-right']) }}>
                    {{ __('Account') }} <br>
                    <span class="text-xs text-teal-500">{{ __('layout.user_dropdown.trial_period') }}</span>
                </p>
                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()?->profile_photo_url }}" alt="{{ Auth::user()?->name }}">
            </button>
        </div>
    </x-slot>
    <x-dropdown.item href="{{ route('accounts.index') }}">
        <b>{{ __('layout.user_dropdown.personal_account') }}</b>
    </x-dropdown.item>
    <x-dropdown.item href="{{ route('resumes.index') }}">
        <b>{{ __('layout.user_dropdown.resumes') }}</b>
    </x-dropdown.item>
    <x-dropdown.item separator href="{{ route('applicants.index') }}">
        <b>{{ __('layout.user_dropdown.applications') }}</b>
    </x-dropdown.item>
    <x-dropdown.item separator>
        <b>{{ __('layout.user_dropdown.shortlisted') }}</b>
    </x-dropdown.item>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown.item separator :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('layout.user_dropdown.sign_out') }}
        </x-dropdown.item>
    </form>
</x-dropdown>
