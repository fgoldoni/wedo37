@if(session()->get('success'))
    <div class="bg-teal-50 border-l-4 border-teal-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/exclamation -->
                <svg class="h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-teal-700">
                    {{ session()->get('success') }}
                </p>
            </div>
        </div>
    </div>
@endif

@if(session()->get('verification.text'))
    <div class="bg-teal-50 border-l-4 border-teal-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/exclamation -->
                <svg class="h-5 w-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-teal-700">
                    {{ session()->get('verification.text') }}
                    <a href="{{ session()->get('verification.url') }}" class="btn-base font-medium underline text-green-700 hover:text-green-600"> Resend login email. </a>
                </p>
            </div>
        </div>
    </div>
@endif

@if(session()->get('warning'))
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/exclamation -->
                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-yellow-700">
                    {{ session()->get('warning') }}
                </p>
            </div>
        </div>
    </div>
@endif


@if(session()->get('error'))
    <div class="bg-rose-50 border-l-4 border-rose-400 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/exclamation -->
                <svg class="h-5 w-5 text-rose-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-rose-700">
                    {{ session()->get('error') }}
                </p>
            </div>
        </div>
    </div>
@endif

