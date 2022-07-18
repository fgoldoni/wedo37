@props([
    'formAction' => false,
    'headerClasses' => 'p-4 sm:px-6 sm:py-4 border-b border-secondary-100 dark:border-secondary-700',
    'contentClasses' => 'relative p-4 sm:px-6 sm:px-5',
    'footerClasses' => 'flex flex-row justify-end px-6 py-4 text-right bg-secondary-100',
])

<div class="bg-white dark:bg-secondary-800">
    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
            @endif
            <div class="{{ $headerClasses }}">
                @if(isset($title))
                    <h3 class="flex items-center text-lg leading-6 font-medium text-secondary-900 dark:text-white">
                        {{ $title }}
                    </h3>
                @endif

                @if(isset($subtitle))
                    <div class="mt-2">
                        <p class="text-sm leading-5 text-secondary-500 dark:text-secondary-400">
                            {{ $subtitle }}
                        </p>
                    </div>
                @endif
            </div>

            @if(isset($content))
                <div class="{{ $contentClasses }}">
                    {{ $content }}
                </div>
            @endif

            <div class="{{ $footerClasses }}">
                {{ $buttons ?? null }}
            </div>
            @if($formAction)
                </form>
            @endif
</div>
