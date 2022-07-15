<div class="relative shadow-xl text-base text-left transform transition w-full md:max-w-4xl lg:max-w-6xl">
    <div class="relative w-full h-50 text-white bg-gradient-to-tl from-purple-900 to-green-700">
        <img class="absolute w-full h-full object-cover object-center mix-blend-overlay bg-center" src="{{ app_team()->image }}" alt="{{ app_team()->name }}">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-full p-4">
                        <img class="h-6 sm:h-12 w-auto" src="{{ app_team()->avatar }}" alt="{{ app_team()->name }}">
                    </div>
                </div>
            </div>


            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-full text-right p-4">
                        <button type="button" class="hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
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
                        Specify and our experts find for you!
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 gap-4 p-4 bg-white">
        <p class="text-base text-gray-600 line-clamp-2 text-center">
            Your jobs, employment and career opportunities in 24 hours with Wedo's assistant experts are ready!
        </p>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mt-4 grid grid-cols-1 gap-8 sm:grid-cols-2 p-4">
        <div class="col-span-1">
            <x-datetime-picker
                placeholder="Start Date"
                parse-format="DD-MM-YYYY HH:mm"
                without-time
                display-format="DD, MMM YYYY"
                wire:model.defer="startDate"
            />
        </div>
        <div class="col-span-1">
            <x-select
                placeholder="Select one area"
                :options="app_areas()"
                option-label="name"
                option-value="id"
                wire:model.defer="area"
            />
        </div>

        <div class="col-span-1">
            <x-inputs.currency right-icon="currency-dollar" thousands=" " placeholder="Salary"  wire:model.defer="salary"/>
        </div>

        <div class="col-span-1">
            <x-select
                placeholder="Select one area"
                :options="app_job_types()"
                option-label="name"
                option-value="id"
                wire:model.defer="jobType"
            />
        </div>

        <div class="col-span-1 sm:col-span-2">
            <x-textarea wire:model.defer="note" placeholder="Text" />
        </div>

        <div class="col-span-1">
            <x-input right-icon="user" placeholder="Full name"  wire:model.defer="name"/>
        </div>

        <div class="col-span-1">
            <x-input right-icon="at-symbol" placeholder="Email Address"  wire:model.defer="email"/>
        </div>

    </div>


    <button wire:click="$emit('closeModal')" type="submit" class="uppercase mt-8 w-full bg-{{ app_color() }}-600 border border-transparent py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">Become a team member now!</button>



</div>
