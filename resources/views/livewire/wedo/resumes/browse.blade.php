<div class="max-w-7xl mx-auto sm:px-6 lg:p-8">
    <x-wedo.pages.layouts.heading>

        <x-slot name="title">

            {{ __('Resumes') }}

        </x-slot>

        <x-slot name="action">

            <div class="flex space-x-3">

                <span class="shadow-sm rounded-md">

                    <x-wedo.input.avatar-upload wire:model="upload" id="photo"></x-wedo.input.avatar-upload>

                </span>

            </div>

        </x-slot>

    </x-wedo.pages.layouts.heading>
    @livewire('wedo.datatables.resumes-table')
</div>
