<div class="w-full mx-auto px-4 py-16 sm:px-6 sm:pt-24 sm:pb-32 lg:px-8">
    <div class="mt-12 space-y-16 sm:mt-16">
        @foreach($rows as $row)
            <section aria-labelledby="4376-heading" class="bg-white p-8">
                <div class="space-y-1 md:flex md:items-baseline md:space-y-0 md:space-x-4">
                    <h2 id="4376-heading" class="text-lg font-medium text-gray-900 md:flex-shrink-0">Nr: #00{{ $row->id }}</h2>
                    <div class="space-y-5 md:flex-1 md:min-w-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
                        <p class="text-sm font-medium text-gray-500">Closing on {{ $row->job->closing_to }}</p>
                        <div class="flex text-sm font-medium">
                            <a href="#" class="text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">Manage order</a>
                            <div class="border-l border-gray-200 ml-4 pl-4 sm:ml-6 sm:pl-6">
                                <a href="#" class="text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">View Invoice</a>
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
                                    <span>Brass</span>
                                    <span class="mx-1 text-gray-400" aria-hidden="true">&middot;</span>
                                    <span>3&quot; x 3&quot; x 3&quot;</span>
                                </p>
                                <p class="mt-1 font-medium text-gray-900">$95.00</p>
                            </div>
                        </div>
                        <div class="mt-6 space-y-4 sm:mt-0 sm:ml-6 sm:flex-none sm:w-40">
                            <button type="button" class="w-full flex items-center justify-center bg-{{ app_color() }}-600 py-2 px-2.5 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 sm:w-full sm:flex-grow-0">
                                {{__('Details')}}</button>
                            <button type="button" class="w-full flex items-center justify-center bg-white py-2 px-2.5 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500 sm:w-full sm:flex-grow-0">Shop similar</button>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </section>
        @endforeach
    </div>
</section>
