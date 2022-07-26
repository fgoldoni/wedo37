<div class="w-full mx-auto space-y-8 sm:px-0">
    @foreach($rows as $row)
        <section aria-labelledby="4376-heading" class="bg-white p-8">
            <div class="space-y-1 md:flex md:items-baseline md:space-y-0 md:space-x-4">
                <h2 id="4376-heading" class="text-lg font-medium text-gray-900 md:flex-shrink-0">Applied Nr: #00{{ $row->id }}</h2>
                <div class="space-y-5 md:flex-1 md:min-w-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
                    <p class="text-sm font-medium text-gray-500">Closing on {{ $row->job->closing_to }}</p>
                    <div class="flex text-sm font-medium">
                        <a href="javascript:;" class="text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">{{ $row->company?->name }}</a>
                        <div class="border-l border-gray-200 ml-4 pl-4 sm:ml-6 sm:pl-6">
                            <a href="javascript:;" class="text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">{{ __('2 Position(s)') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 -mb-6 flow-root border-t border-gray-200 divide-y divide-gray-200">
                <div class="py-6 sm:flex">
                    <div class="flex space-x-4 sm:min-w-0 sm:flex-1 sm:space-x-6 lg:space-x-8">
                        <img src="{{ $row->job->avatar_url }}" alt="{{ $row->job->name }}" class="flex-none w-20 h-20 rounded-md object-center object-cover sm:w-48 sm:h-48">
                        <div class="pt-1.5 min-w-0 flex-1 sm:pt-0">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">{{ $row->job->name }}</a>
                            </h3>
                            <p class="text-sm text-gray-500 truncate">
                                <button type="button" class="-ml-2 -my-2 flex rounded-full px-3 py-2 inline-flex items-center text-left text-gray-400 group">
                                    <x-heroicon-o-map class="-ml-1 h-5 w-5 mr-2 group-hover:text-gray-500"/>
                                    <span class="text-sm text-gray-500 group-hover:text-gray-600">{{ $row->job->address }}</span>
                                </button>
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <button type="button" class="-ml-2 -my-2 flex rounded-full px-3 py-2 inline-flex items-center text-left text-gray-400 group">
                                    <x-heroicon-o-paper-clip class="-ml-1 h-5 w-5 mr-2 group-hover:text-gray-500"/>
                                    <span class="text-sm text-gray-500 group-hover:text-gray-600">{{ count($row->attachments) }} Files</span>
                                </button>
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <button type="button" class="-ml-2 -my-2 rounded-full px-3 py-2 inline-flex items-center text-left text-gray-400 group">
                                    <x-heroicon-o-clock class="-ml-1 h-5 w-5 mr-2 group-hover:text-gray-500"/>
                                    <span class="text-sm text-gray-500 group-hover:text-gray-600">{{ $row->created_at }}</span>
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 space-y-4 sm:mt-0 sm:ml-6 sm:flex-none sm:w-40">
                        <x-wedo.button link="{{ route('applicants.show', $row->id) }}">
                            <span>{{__('Details')}}</span>
                            <x-heroicon-o-arrow-right class="-mr-1 ml-2 h-5 w-5 text-white"/>
                        </x-wedo.button>
                        <x-wedo.outline-button class="cursor-not-allowed w-full items-center">
                            <svg class="-ml-0.5 mr-1.5 h-2 w-2 @if ($row->status === 'approved') text-green-400 @elseif($row->status === 'rejected') text-rose-400 @else text-yellow-400 @endif" fill="currentColor" viewBox="0 0 8 8">
                                <circle cx="4" cy="4" r="3" />
                            </svg>
                            <span class="@if ($row->status === 'approved') text-green-400 @elseif($row->status === 'rejected') text-rose-400 @else text-yellow-400 @endif">{{ $row->status }}</span>
                        </x-wedo.outline-button>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</section>
