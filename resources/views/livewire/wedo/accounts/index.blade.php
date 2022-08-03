<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <x-nav-link :href="route('accounts.index')" :active="request()->routeIs('accounts.index')">
                    <x-heroicon-o-phone-missed-call class="flex-shrink-0 -ml-1 mr-3 h-6 w-6 @if(request()->routeIs('accounts.index')) text-{{ app_color() }}-500 @else text-gray-400 group-hover:text-gray-500 @endif"/>
                    <span class="truncate"> My Profile </span>
                </x-nav-link>
                <x-nav-link :href="route('accounts.show', 1)" :active="request()->routeIs('accounts.show', 1)">
                    <x-heroicon-o-key class="flex-shrink-0 -ml-1 mr-3 h-6 w-6 @if(request()->routeIs('accounts.show', 1)) text-{{ app_color() }}-500 @else text-gray-400 group-hover:text-gray-500 @endif"/>
                    <span class="truncate"> Password </span>
                </x-nav-link>
            </nav>
        </aside>

        <!-- Payment details -->
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <x-wedo.form-section submit="updateProfileInformation">
                <x-slot name="title">
                    {{ __('Profil') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('This information will be displayed publicly so be careful what you share.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-4">
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden"
                                   autocomplete="off"
                                   accept="image/png, image/jpg, image/jpeg"
                                   wire:model="photo"
                                   x-ref="photo"
                                   x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                            <x-wedo.label for="photo" value="{{ __('Photo') }}" />

                            <!-- Current Profile Photo -->
                            <div class="mt-2" x-show="! photoPreview">
                                <img src="{{ $editing->profile_photo_url }}" alt="{{ $editing->name }}" class="rounded-full h-20 w-20 object-cover">
                            </div>

                            <!-- New Profile Photo Preview -->
                            <div class="mt-2" x-show="photoPreview" style="display: none;">
                                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>

                            <x-wedo.secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-wedo.secondary-button>

                            @if ($editing->profile_photo_path)
                                <x-wedo.secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-wedo.secondary-button>
                            @endif

                            <x-wedo.input.error for="photo" class="mt-2" />
                        </div>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-wedo.input.group for="name" :error="$errors->first('editing.name')" isRequired inline>

                            <x-wedo.input.text value="{{ $editing->name }}" type="text" name="editing.name" id="name" placeholder="{{ __('Name') }}" autocomplete="off" required/>

                        </x-wedo.input.group>
                    </div>

                    <div class="col-span-4 sm:col-span-2">
                        <x-wedo.input.group for="email" :error="$errors->first('editing.email')" isRequired inline>

                            <x-wedo.input.text value="{{ $editing->email }}" type="email" name="editing.email" id="email" placeholder="{{ __('Email address') }}" autocomplete="off" required/>

                        </x-wedo.input.group>
                    </div>

                    <div class="col-span-4">
                        <div wire:ignore x-data="internationalNumber('#phone')" class="col-span-1 sm:col-span-2">
                            <x-wedo.input.group label="{{ __('Phone number') }}" for="editing.phone" :error="$errors->first('editing.phone')" isRequired>

                                <x-wedo.input.text wire:model.lazy="editing.phone" type="tel" name="editing.phone" id="phone" required></x-wedo.input.text>

                            </x-wedo.input.group>
                        </div>
                        @if ($errors->first('editing.phone'))
                            <p class="mt-1 text-sm text-rose-500 dark:text-rose-400">{{ $errors->first('editing.phone') }}</p>
                        @endif
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-wedo.button type="submit">
                        <x-wedo.loader wire:loading wire:target="updateProfileInformation"></x-wedo.loader>
                        Save
                    </x-wedo.button>
                </x-slot>
            </x-wedo.form-section>
        </div>
    </div>
</main>

