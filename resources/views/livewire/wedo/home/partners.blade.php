<!-- Section 1 -->
<section class="w-full py-16 bg-white lg:py-24">
    <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">
        <div class="space-y-12 md:text-left">
            <div class="mb-20 space-y-5 sm:mx-auto sm:max-w-xl md:max-w-2xl sm:space-y-4 lg:max-w-5xl">
                <h2 class="relative text-4xl font-extrabold tracking-tight sm:text-5xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">SPONSORS</span> 🤝
                </h2>
            </div>
            <div class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">

                @forelse ($rows as $row)
                    <div class="space-y-6 text-center lg:ml-0 md:ml-10">
                        <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                            <img class="relative z-20 w-full h-full rounded-xl" src="{{ $row->avatar_url }}" alt="">
                            <svg class="absolute inset-0 w-full h-full text-{{ app_color() }}-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M41.4,-70.8C54.1,-64.5,65,-54.1,70.7,-41.7C76.5,-29.2,77.1,-14.6,76.9,-0.1C76.6,14.3,75.5,28.6,68.8,39.5C62.1,50.3,49.9,57.7,37.5,63.5C25.1,69.3,12.5,73.5,-0.6,74.4C-13.6,75.4,-27.3,73.1,-37.6,66.1C-47.9,59.1,-54.8,47.4,-63.1,35.6C-71.4,23.8,-81,11.9,-83.2,-1.3C-85.4,-14.4,-80.1,-28.8,-70.3,-38C-60.5,-47.1,-46.1,-51.1,-33.6,-57.5C-21.2,-64,-10.6,-73,1.9,-76.3C14.4,-79.6,28.8,-77.2,41.4,-70.8Z" transform="translate(100 100)"></path></svg>
                        </div>
                        <div class="space-y-2">
                            <div class="space-y-1 text-lg font-medium leading-6">
                                <h3>{{ $row->name }}</h3>
                                <p class="text-{{ app_color() }}-400">{{ $row->job }}</p>
                            </div>
                            <div class="relative flex items-center justify-center space-x-3">
                                <a href="{{ $row->site }}" target="_blank" class="text-gray-300 hover:text-gray-400">
                                    <x-heroicon-o-globe class="w-6 h-6 fill-current"></x-heroicon-o-globe>
                                </a>
                                <a href="{{ $row->facebook }}"  target="_blank" class="text-gray-300 hover:text-gray-400">
                                    <svg
                                        class="w-6 h-6 fill-current"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                                        />
                                    </svg>
                                </a>
                                <a href="{{ $row->twitter }}"  target="_blank" class="text-gray-300 hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </div>
</section>
