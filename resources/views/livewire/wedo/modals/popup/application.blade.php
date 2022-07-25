<div class="relative shadow-xl text-base text-left transform transition w-full md:max-w-4xl lg:max-w-6xl">
    <div class="relative w-full h-50 text-white bg-gradient-to-tl from-purple-900 to-green-700">
        <img class="absolute w-full h-full object-cover object-center mix-blend-unset bg-center" src="{{ asset('images/modal.jpg') }}" alt="{{ app_team()->name }}">
        <div class="relative z-20 mx-auto text-center text-white max-w-7xl">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-full p-4">
                            <img class="h-6 sm:h-10 w-auto" src="{{ app_team()->avatar }}" alt="{{ app_team()->name }}">
                        </div>
                    </div>
                </div>


                <div class="col-span-1">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-full text-right p-4">
                            <button wire:click="$emit('closeModal')" type="button" class="hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                                <span class="sr-only">Close</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-full text-center py-4 sm:py-20 text-xl">
                            Still Need Help ?!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 gap-4 p-4 bg-white">
        <p class="text-xl text-gray-600 line-clamp-2 text-center">
            {{ $job->name }}
        </p>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mt-4 grid grid-cols-1 gap-8 sm:grid-cols-2 p-4">
        <div class="col-span-1 sm:col-span-2">
            <div wire:ignore x-data="internationalNumber('#phone')" class="col-span-1 sm:col-span-2">
                <x-wedo.input.group label="{{ __('Phone number') }}" for="editing.phone" :error="$errors->first('editing.phone')" isRequired>

                    <x-wedo.input.text wire:model.lazy="editing.phone" type="tel" name="editing.phone" id="phone" required></x-wedo.input.text>

                </x-wedo.input.group>
            </div>
            @if ($errors->first('editing.phone'))
                <p class="mt-1 text-sm text-rose-500 dark:text-rose-400">{{ $errors->first('editing.phone') }}</p>
            @endif
        </div>

        <div class="col-span-1 sm:col-span-2">
            <x-wedo.input.group :error="$errors->first('editing.message')" label="{{ __('Message') }}" for="message" isRequired>

                <x-wedo.input.textarea wire:model.lazy="editing.message" name="editing.message" id="message" isRequired></x-wedo.input.textarea>

            </x-wedo.input.group>
        </div>

        @auth
            <x-wedo.input.group  class="col-span-1 sm:col-span-2" :error="$errors->first('editing.email')" isRequired inline>

                <x-wedo.input.text value="{{ $editing->email }}" type="email" name="editing.email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required disabled/>

            </x-wedo.input.group>
        @else
            <x-wedo.input.group label="{{ __('Email address') }}" for="email"  class="col-span-1 sm:col-span-2" :error="$errors->first('editing.email')" isRequired inline>

                <x-wedo.input.text wire:model.defer="editing.email" type="email" name="editing.email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required/>

            </x-wedo.input.group>
        @endauth

        @if(count($attachments) > 0)
            <div class="col-span-1 sm:col-span-2">
                <div>
                    <dt class="text-base font-medium text-gray-900">Files</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                            @foreach ($attachments as $attachment)
                                @if(is_array($attachment))
                                    @php
                                        $attachment = json_decode(json_encode($attachment), FALSE);
                                    @endphp
                                @endif
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <input wire:model.lazy="resumes" value="{{ $attachment->id }}" id="resumes-{{ $attachment->id }}" name="resumes" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        <label for="resumes-{{ $attachment->id }}" class="ml-2 flex-1 w-0 truncate">{{ $attachment->name }}</label>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="{{ $attachment->url }}" target="_blank" class="font-medium text-blue-600 hover:text-blue-500"> Download </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </dd>
                </div>
            </div>
        @endif

        <div class="col-span-1">
            <x-wedo.input.add-resume-apply wire:model="upload" id="upload" wire:loading.class="opacity-25 cursor-not-allowed" label="{{ __('Add Resume') }}" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf"/>
            @if ($errors->first('resumes'))
                <p class="mt-1 text-sm text-rose-500 dark:text-rose-400">{{ $errors->first('resumes') }}</p>
            @endif
        </div>

        <div class="col-span-1">
            <button wire:click="save" type="button" wire:target="save" wire:loading.attr="disabled" class="uppercase inline-flex justify-center w-full border border-transparent shadow-sm px-4 py-2 bg-{{ app_color() }}-600 text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 disabled:opacity-25 disabled:cursor-not-allowed">
                <x-heroicon-o-shield-check wire:loading.remove wire:target="save" class="-ml-1 mr-3 h-6 w-6"/>
                <svg wire:loading wire:target="save" class="animate-spin -ml-1 mr-3 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Apply!
            </button>
        </div>



        <div class="col-span-1 sm:col-span-2">
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="focus:ring-{{ app_color() }}-500 h-4 w-4 text-{{ app_color() }}-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="text-gray-500">You accept our</label>
                    <span id="terms-description" class="text-{{ app_color() }}-700 hover:underline">Terms and Conditions and Privacy Policy.</span>
                </div>
            </div>
        </div>

    </div>

</div>
