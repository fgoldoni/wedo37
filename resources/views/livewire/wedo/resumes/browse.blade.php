<div class="max-w-7xl mx-auto sm:px-6 lg:p-8">
    <x-wedo.pages.layouts.heading>

        <x-slot name="title">

            {{ __('Resumes') }}

        </x-slot>

        <x-slot name="action">

            <div class="flex space-x-3">

                <span class="shadow-sm rounded-md">

                    <x-wedo.input.avatar-upload wire:model="upload" id="upload" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf"></x-wedo.input.avatar-upload>

                    {{ $errors->first('upload') }}

                </span>

            </div>

        </x-slot>

    </x-wedo.pages.layouts.heading>
    @livewire('wedo.datatables.resumes-table')
</div>
