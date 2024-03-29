<div class="max-w-7xl mx-auto sm:px-6 lg:p-8">

    <x-wedo.pages.layouts.heading>

        <x-slot name="title">

            {{ __('Resumes') }}

        </x-slot>

        @if($total > 0)

            <x-slot name="action">

                <x-wedo.button>
                    <div x-data="{ focused: false }">
                        <label
                            for="upload"
                            :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500': focused }"
                            class="flex items-center"
                        >
                            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" wire:model="upload" id="upload" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
                            <x-heroicon-o-document-text class="-ml-1 mr-2 h-5 w-5 text-white"/>
                            {{ __('Add Resume') }}
                        </label>
                    </div>
                </x-wedo.button>

            </x-slot>

        @endif



    </x-wedo.pages.layouts.heading>

    @if($total === 0)

        <x-wedo.pages.layouts.empty-state>
            <div class="text-center space-y-5">
                <h2 class="text-base font-semibold text-{{ app_color() }}-400 tracking-wide uppercase">Join 2000+ Tops Recruiters</h2>
                <div class="inline-flex items-end justify-center w-full text-center mx-auto">
                    <img src="https://cdn.devdojo.com/tails/avatars/067.jpg" class="absolute transform translate-x-24 ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/019.jpg" class="absolute transform -translate-x-24 -ml-6 rounded-full w-12 h-12 md:w-16 md:h-16 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/036.jpg" class="absolute transform -translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/008.jpg" class="absolute transform translate-x-16 rounded-full w-16 h-16 md:w-20 md:h-20 border-4 border-white">
                    <img src="https://cdn.devdojo.com/tails/avatars/003.jpg" class="rounded-full w-20 h-20 md:w-24 md:h-24 border-4 border-white relative">
                </div>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Make a <span class="px-2 py-1 relative inline-block"><svg class="stroke-current bottom-0 absolute text-{{ app_color() }}-400 -translate-x-2" viewBox="0 0 410 18" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.4c16.8 16.8 380.8-11.2 397.6 5.602" stroke-width="11.2" fill="none" fill-rule="evenodd" stroke-linecap="round"></path></svg><span class="relative">Difference</span></span> with Your Online Resume!</p>
                <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-500">Your job search starts and ends with us. Find Jobs, Employment & Career Opportunities</p>

                <x-wedo.button>
                    <div x-data="{ focused: false }">
                        <label
                            for="upload"
                            :class="{ 'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500': focused }"
                            class="flex items-center cursor-pointer"
                        >
                            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" wire:model="upload" id="upload" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
                            <x-heroicon-o-document-text class="-ml-1 mr-2 h-5 w-5 text-white"/>
                            {{ __('Add Resume') }}
                        </label>
                    </div>
                </x-wedo.button>
            </div>
        </x-wedo.pages.layouts.empty-state>

        <x-wedo.learn-more name="resumes" link="#" ></x-wedo.learn-more>

    @else

        @livewire('wedo.datatables.resumes-table')

    @endif

</div>
