@props(['orders'])

<div id="disclosure-1">
    <ul role="list" class="divide-y divide-gray-200 border-b border-gray-200">
        @forelse($orders as $order)
            <li class="flex py-6 space-x-6">
                <img src="{{ asset('images/extra.jpg') }}" alt="{{ $order->name }}" class="btn-img flex-none w-40 h-40 object-center object-cover bg-gray-200 rounded-md">
                <div class="flex flex-col justify-between space-y-4">
                    <div class="text-sm font-medium space-y-1">
                        <h3 class="text-gray-900 btn-title">{{ $order->name }}</h3>
                        <p class="text-gray-900">€ {{ $order->price }}</p>
                    </div>
                    <div class="flex space-x-4">
                        <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                        <div class="flex border-l border-gray-300 pl-4">
                            <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <div class="text-center">
                <span class="mx-auto h-12 w-12 text-gray-400">🍾</span>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Extras</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new project.</p>
                <div class="mt-6">
                    <a href="{{ route('tickets.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/plus -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        New Extras
                    </a>
                </div>
            </div>

        @endforelse
    </ul>
</div>
