@props([
    'job',
    'status' => null,
    'phone' => null,
    'apply' => null
])

<div>
    <div>
        <img class="h-32 w-full object-cover lg:h-48 bg-gradient-to-r from-{{ app_color() }}-300"  src="{{ asset('images/circuit-board.svg') }}" alt="{{ $job->name }}">
    </div>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
            <div class="flex">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="{{ $job->avatar_url }}" alt="{{ $job->name }}">
            </div>
            <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                    <h1 class="text-2xl font-bold text-gray-900 truncate">{{ $job->name }}</h1>
                </div>
                <div class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                    @if($phone)
                        <x-wedo.secondary-button link="tel: {{ $phone }}">
                            <x-heroicon-o-phone-outgoing class="-ml-1 mr-2 h-5 w-5 text-{{ app_color() }}-400"/>
                            <span>{{ $phone }}</span>
                        </x-wedo.secondary-button>
                    @endif
                    @if($status)
                        <x-wedo.jobs.applicant-status status="{{ $status }}"></x-wedo.jobs.applicant-status>
                    @endif
                    @if($apply)
                        <x-wedo.button onclick="Livewire.emit('openModal', 'wedo.modals.popup.application', {{ json_encode(['id' => $job->id]) }})">
                            <x-heroicon-o-lightning-bolt class="-ml-1 mr-2 h-5 w-5 text-white"/>
                            <span>Quick Apply</span>
                        </x-wedo.button>
                   @endif
                </div>
            </div>
        </div>
        <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
            <h1 class="text-2xl font-bold text-gray-900 truncate">Ricardo Cooper</h1>
        </div>
    </div>
</div>
