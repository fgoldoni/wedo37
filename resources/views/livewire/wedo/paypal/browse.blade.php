<div>
    <div class="px-4 py-5 sm:p-6">
        <div class="sm:flex sm:items-start sm:justify-between">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    <x-wedo.loader wire:loading></x-wedo.loader>

                    Manage subscription
                </h3>
                <div class="mt-2 max-w-xl text-sm text-gray-500">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus corrupti atque repudiandae nam.</p>
                </div>
            </div>
            <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                {!! $payment !!}
            </div>
        </div>
    </div>
</div>
