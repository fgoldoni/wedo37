<x-guest-layout>
    <div class="bg-white min-h-full px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
        <div class="max-w-max mx-auto">
            <main class="sm:flex">
                <p class="text-4xl font-extrabold text-{{ app_color() }}-600 sm:text-5xl">{{ $exception->getStatusCode() }}</p>
                <div class="sm:ml-6">
                    <div class="sm:border-l sm:border-gray-200 sm:pl-6">
                        <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Server Error</h1>
                        <p class="mt-1 text-base text-gray-500">{{ $exception->getMessage() }}</p>
                    </div>
                    <div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
                        <a href="{{ url('') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500"> Go back home </a>
                        <a href="{{ url('') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-{{ app_color() }}-700 bg-{{ app_color() }}-100 hover:bg-{{ app_color() }}-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500"> Contact support </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-guest-layout>
