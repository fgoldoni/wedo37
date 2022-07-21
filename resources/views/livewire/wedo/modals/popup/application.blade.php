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
            Let us now about your issue and a Professional will reach you out.
        </p>
    </div>



    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="mt-4 grid grid-cols-1 gap-8 sm:grid-cols-2 p-4">
        <div class="col-span-1 sm:col-span-2">
            <div wire:ignore x-data="internationalNumber('#phone')" class="sm:col-span-2">
                <x-wedo.input.group :error="$errors->first('phone')">

                    <x-wedo.input.text wire:model.lazy="phone" type="tel" id="phone" ></x-wedo.input.text>

                </x-wedo.input.group>
            </div>
        </div>

        <div class="col-span-1 sm:col-span-2">
            <x-textarea wire:model.defer="message" placeholder="Text" />
        </div>


        <div class="col-span-1 sm:col-span-2">
            <x-input right-icon="at-symbol" type="email" placeholder="Email Address"  wire:model.defer="email"/>
        </div>

        @auth
            <div class="col-span-1 sm:col-span-2">
                <fieldset>
                    <legend class="sr-only">Pricing plans</legend>
                    <div class="relative bg-white rounded-md -space-y-px">
                        @foreach ($attachments as $attachment)
                            @if ($loop->first)
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label class="rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                      <span class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                          <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label" class="ml-3 font-medium">{{ $attachment->name }}</span>
                                      </span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <a href="{{ $attachment->url }}" target="_blank" class="ml-6 text-sm md:ml-0 md:pl-0 md:text-right">
                                            @if($attachment->mime_type === 'application/pdf')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-pdf-749513.svg') }}" alt="{{ $attachment->name }}">
                                            @elseif($attachment->mime_type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-docx-1126811.svg') }}" alt="{{ $attachment->name }}">
                                            @else
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-document-4996788.svg') }}" alt="{{ $attachment->name }}">
                                            @endif
                                        </a>
                                    </label>
                            @elseif ($loop->last)
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                    <label class="rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
                                      <span class="flex items-center text-sm">
                                                                        <input type="radio" name="pricing-plan" value="Startup" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                          <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label" class="ml-3 font-medium">{{ $attachment->name }}</span>
                                      </span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <a href="{{ $attachment->url }}" target="_blank" class="ml-6 text-sm md:ml-0 md:pl-0 md:text-right">
                                            @if($attachment->mime_type === 'application/pdf')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-pdf-749513.svg') }}" alt="{{ $attachment->name }}">
                                            @elseif($attachment->mime_type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-docx-1126811.svg') }}" alt="{{ $attachment->name }}">
                                            @else
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-document-4996788.svg') }}" alt="{{ $attachment->name }}">
                                            @endif
                                        </a>
                                    </label>
                            @else

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                    <label class="relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-2 focus:outline-none">
       <span class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
           <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label" class="ml-3 font-medium">{{ $attachment->name }}</span>
                                      </span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <a href="{{ $attachment->url }}" target="_blank" class="ml-6 text-sm md:ml-0 md:pl-0 md:text-right">
                                            @if($attachment->mime_type === 'application/pdf')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-pdf-749513.svg') }}" alt="{{ $attachment->name }}">
                                            @elseif($attachment->mime_type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-docx-1126811.svg') }}" alt="{{ $attachment->name }}">
                                            @else
                                                <img class="inline-block h-8 w-8 text-gray-700" src="{{ asset('images/noun-document-4996788.svg') }}" alt="{{ $attachment->name }}">
                                            @endif
                                        </a>
                                    </label>
                            @endif





                        @endforeach



                    </div>
                </fieldset>

            </div>
        @endauth



        <div class="col-span-1 sm:col-span-2">
            <div class="relative flex items-start">
                <div class="flex items-center h-5">
                    <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="text-gray-500">You accept our</label>
                    <span id="terms-description" class="text-{{ app_color() }}-700 hover:underline">Terms and Conditions and Privacy Policy.</span>
                </div>
            </div>
        </div>

    </div>


    <button type="submit" class="uppercase mt-8 w-full bg-{{ app_color() }}-600 border border-transparent py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">Become a team member now!</button>



</div>
