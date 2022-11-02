<div class="relative shadow-xl text-base text-left transform transition w-full md:max-w-4xl lg:max-w-6xl">
    <div class="relative w-full h-50 text-white bg-gradient-to-tl from-purple-900 to-green-700">
        <img class="absolute w-full h-full object-cover object-center mix-blend-unset bg-center" src="{{ app_team()->image }}" alt="{{ app_team()->name }}">
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
            Let us now about your issue and a Professional will reach you out.
        </p>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="grid grid-cols-2 gap-4 p-4">
        <div class="col-span-1">
            <x-wedo.input.group label="{{ __('Name') }}" for="name" :error="$errors->first('name')" isRequired>

                <x-wedo.input.text wire:model.lazy="name" type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

            </x-wedo.input.group>
        </div>
        <div class="col-span-1">
            <x-wedo.input.group label="{{ __('Name') }}" for="name" :error="$errors->first('name')" isRequired>

                <x-wedo.input.text wire:model.lazy="name" type="text" name="name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

            </x-wedo.input.group>
        </div>
        <div class="col-span-1 sm:col-span-2">
            <x-wedo.input.group :error="$errors->first('editing.message')" label="{{ __('Message') }}" for="message" isRequired>

                <x-wedo.input.textarea wire:model.lazy="editing.message" name="editing.message" id="message" isRequired></x-wedo.input.textarea>

            </x-wedo.input.group>
        </div>

    </div>



    <button type="submit" class="uppercase mt-8 w-full bg-{{ app_color() }}-600 border border-transparent py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">Become a team member now!</button>



</div>
