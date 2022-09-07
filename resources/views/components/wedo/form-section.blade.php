@props(['submit'])

<section>
    <form wire:submit.prevent="{{ $submit }}">
        <div class="sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <x-wedo.section-title>
                    <x-slot name="title">
                        @if (isset($title))
                            {{ $title }}
                        @endif
                    </x-slot>

                    <x-slot name="description">{{ $description }}</x-slot>
                </x-wedo.section-title>

                <div {{ $attributes->merge(['class' => 'mt-6 grid grid-cols-4 gap-6']) }}>
                    {{ $form }}
                </div>
            </div>
            @if (isset($actions))
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    {{ $actions }}
                </div>
            @endif

        </div>
    </form>
</section>
