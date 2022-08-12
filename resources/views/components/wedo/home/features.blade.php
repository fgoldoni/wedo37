
<!-- Section 1 -->
<section class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">

        <h1 class="mb-1 text-4xl font-extrabold leading-none text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900 lg:text-5xl xl:text-6xl sm:mb-3"><a href="#_">VIP LOUNGE</a></h1>
        <div class="flex grid h-full grid-cols-12 gap-8 sm:gap-10 pb-10 mt-8 sm:mt-16">

            @if(isset(app_event()?->tickets[0]))
                <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/quench-satisfying.jpg')">
                    </a>
                    <div class="relative z-20 w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 px-7">
                        <a href="#_" class="hover:scale-125 ease-in-out duration-150 inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">Continue ...</a>
                        <h2 class="uppercase mb-5 text-5xl font-bold"><a href="#_">{{ Str::limit(app_event()?->tickets[0]->name, 18, '...') }}</a></h2>
                        <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">FROM {{ app_event()?->tickets[0]->price }} Euro</p>
                    </div>
                </div>
            @endif

            @if(isset(app_event()?->tickets[1]))
                <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                    <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                    </a>
                    <div class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                        <a href="#_" class="hover:scale-125 ease-in-out duration-150 inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Continue ...</a>
                        <h2 class="uppercase mb-5 text-5xl font-bold"><a href="#_">{{ Str::limit(app_event()?->tickets[1]->name, 18, '...') }}</a></h2>
                        <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">FROM {{ app_event()?->tickets[1]->price }} Euro</p>
                    </div>
                </div>
            @endif

            @if(isset(app_event()?->tickets[2]))
                    <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group sm:col-span-12 xl:col-span-4 sm:flex-row xl:flex-col">
                        <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/gbc.jpg')"></a>
                        <div class="relative z-20 flex flex-col items-start justify-center w-full h-auto py-8 text-white bg-yellow-400 border-t-0 border-yellow-200 sm:h-full xl:h-auto px-7">
                            <a href="#_" class="hover:scale-125 ease-in-out duration-150 inline-block text-xs font-semibold absolute sm:mb-5 xl:mb-0 sm:relative xl:absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-yellow-400 bg-white">Continue ...</a>
                            <h2 class="uppercase mb-5 text-5xl font-bold"><a href="#_">{{ Str::limit(app_event()?->tickets[2]->name, 18, '...') }}</a></h2>
                            <p class="mb-2 text-lg font-normal opacity-100 text-yellow-50">FROM {{ app_event()?->tickets[2]->price }} Euro</p>
                        </div>
                    </div>
            @endif
        </div>
    </div>
</section>


@if(isset(app_event()?->tickets[3]))
    <!-- Section 1 -->
    <section class="w-full py-20 bg-gray-100">

    <div class="max-w-3xl px-10 mx-auto">
        <h2 class="mb-10 text-xl text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">SINGLE PASS</h2>

        <div class="relative flex flex-col overflow-hidden bg-gray-900 rounded-xl">
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500"></div>
            <div class="flex flex-col items-center p-10 md:flex-row">
                <div class="w-full text-white md:w-2/3">
                    <div class="flex items-center">
                        <p class="flex items-start text-lg font-bold leading-none text-transparent text-7xl bg-clip-text bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500"><span class="mt-2 text-4xl">€</span>25</p>
                    </div>

                </div>

                <div class="flex items-center w-full mt-8 md:w-2/3 md:justify-end md:mt-0">
                    <a href="#_" class="uppercase w-full px-10 py-5 text-xl font-semibold text-center text-white rounded-lg bg-gradient-to-br from-{{ app_color() }}-100 to-{{ app_color() }}-500 md:w-auto">Continue ...</a>
                </div>

            </div>
            <div class="px-10 py-8 bg-gray-900 border-t border-gray-700 bg-gradient-to-b from-gray-800 to-gray-900">
                <h3 class="text-xl font-medium leading-tight text-gray-200">{{ app_event()?->tickets[3]->name }}</h3>
                <p class="my-1 text-gray-400 whitespace-pre-wrap">{{ app_event()?->tickets[3]->description }}</p>
            </div>

        </div>

    </div>

</section>
@endif

<!-- Section 1 -->
<section class="w-full py-16 bg-white lg:py-24">
    <div class="px-12 mx-auto text-center max-w-7xl">
        <div class="space-y-12 md:text-left">
            <div class="mb-20 space-y-5 sm:mx-auto sm:max-w-xl md:max-w-2xl sm:space-y-4 lg:max-w-5xl">
                <h2 class="relative text-4xl font-extrabold tracking-tight sm:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">PARTNERS & SPONSORS 🤝</h2>
            </div>
            <div class="mx-auto space-y-16 sm:grid sm:grid-cols-2 sm:gap-16 sm:space-y-0 lg:grid-cols-3 lg:max-w-5xl">

                <div class="space-y-6 text-center lg:ml-0 md:ml-10 ">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-05.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full text-pink-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M34.2,-54.9C47,-51.8,62,-48.1,70.2,-38.9C78.4,-29.6,79.9,-14.8,80,0.1C80.2,14.9,78.9,29.9,70.8,39.3C62.6,48.7,47.6,52.6,34.7,57.1C21.7,61.6,10.9,66.7,-1.7,69.7C-14.3,72.7,-28.7,73.6,-42.4,69.6C-56.1,65.5,-69.2,56.5,-74.9,44.1C-80.6,31.7,-79,15.8,-77.6,0.8C-76.2,-14.2,-75,-28.4,-70.1,-42.3C-65.2,-56.2,-56.7,-69.8,-44.4,-73.2C-32.1,-76.6,-16.1,-69.9,-2.7,-65.2C10.7,-60.5,21.3,-58,34.2,-54.9Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Mike Jones</h3>
                            <p class="text-pink-500">Founder &amp; CEO</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 text-center lg:mr-0 md:mr-10">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-17.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full mt-2 text-green-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M42.7,-73.4C55,-67,64.3,-54.7,69.9,-41.5C75.5,-28.3,77.5,-14.2,76.5,-0.6C75.4,12.9,71.3,25.8,64.6,37.3C57.9,48.7,48.8,58.6,37.6,63.1C26.4,67.5,13.2,66.5,0.8,65.2C-11.6,63.8,-23.2,62.1,-34.9,57.9C-46.6,53.7,-58.4,47.1,-67.1,37.1C-75.9,27,-81.6,13.5,-83.1,-0.9C-84.6,-15.2,-81.9,-30.5,-73.2,-40.7C-64.6,-51,-50.1,-56.4,-36.9,-62.3C-23.8,-68.2,-11.9,-74.6,1.7,-77.5C15.2,-80.4,30.5,-79.8,42.7,-73.4Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Kari Miller</h3>
                            <p class="text-green-500">Co-Founder</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 text-center lg:ml-0 md:ml-10">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-08.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full text-yellow-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M41.4,-70.8C54.1,-64.5,65,-54.1,70.7,-41.7C76.5,-29.2,77.1,-14.6,76.9,-0.1C76.6,14.3,75.5,28.6,68.8,39.5C62.1,50.3,49.9,57.7,37.5,63.5C25.1,69.3,12.5,73.5,-0.6,74.4C-13.6,75.4,-27.3,73.1,-37.6,66.1C-47.9,59.1,-54.8,47.4,-63.1,35.6C-71.4,23.8,-81,11.9,-83.2,-1.3C-85.4,-14.4,-80.1,-28.8,-70.3,-38C-60.5,-47.1,-46.1,-51.1,-33.6,-57.5C-21.2,-64,-10.6,-73,1.9,-76.3C14.4,-79.6,28.8,-77.2,41.4,-70.8Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Lindsey Cole</h3>
                            <p class="text-yellow-400">Marketing Manager</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="space-y-6 text-center lg:mr-0 md:mr-10">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-03.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full text-yellow-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M41.4,-70.8C54.1,-64.5,65,-54.1,70.7,-41.7C76.5,-29.2,77.1,-14.6,76.9,-0.1C76.6,14.3,75.5,28.6,68.8,39.5C62.1,50.3,49.9,57.7,37.5,63.5C25.1,69.3,12.5,73.5,-0.6,74.4C-13.6,75.4,-27.3,73.1,-37.6,66.1C-47.9,59.1,-54.8,47.4,-63.1,35.6C-71.4,23.8,-81,11.9,-83.2,-1.3C-85.4,-14.4,-80.1,-28.8,-70.3,-38C-60.5,-47.1,-46.1,-51.1,-33.6,-57.5C-21.2,-64,-10.6,-73,1.9,-76.3C14.4,-79.6,28.8,-77.2,41.4,-70.8Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>John Carlson</h3>
                            <p class="text-yellow-400">Lead Developer</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="space-y-6 text-center lg:ml-0 md:ml-10 ">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-18.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full text-pink-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M34.2,-54.9C47,-51.8,62,-48.1,70.2,-38.9C78.4,-29.6,79.9,-14.8,80,0.1C80.2,14.9,78.9,29.9,70.8,39.3C62.6,48.7,47.6,52.6,34.7,57.1C21.7,61.6,10.9,66.7,-1.7,69.7C-14.3,72.7,-28.7,73.6,-42.4,69.6C-56.1,65.5,-69.2,56.5,-74.9,44.1C-80.6,31.7,-79,15.8,-77.6,0.8C-76.2,-14.2,-75,-28.4,-70.1,-42.3C-65.2,-56.2,-56.7,-69.8,-44.4,-73.2C-32.1,-76.6,-16.1,-69.9,-2.7,-65.2C10.7,-60.5,21.3,-58,34.2,-54.9Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Sandy Mckenzie</h3>
                            <p class="text-pink-500">Lead Designer</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 text-center lg:mr-0 md:mr-10">
                    <div class="relative w-48 h-48 p-2 mx-auto md:w-56 md:h-56">
                        <img class="relative z-20 w-full h-full rounded-xl" src="https://cdn.devdojo.com/images/june2021/avt-16.jpg" alt="">
                        <svg class="absolute inset-0 w-full h-full mt-2 text-green-500 transform scale-150 fill-current opacity-10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path d="M42.7,-73.4C55,-67,64.3,-54.7,69.9,-41.5C75.5,-28.3,77.5,-14.2,76.5,-0.6C75.4,12.9,71.3,25.8,64.6,37.3C57.9,48.7,48.8,58.6,37.6,63.1C26.4,67.5,13.2,66.5,0.8,65.2C-11.6,63.8,-23.2,62.1,-34.9,57.9C-46.6,53.7,-58.4,47.1,-67.1,37.1C-75.9,27,-81.6,13.5,-83.1,-0.9C-84.6,-15.2,-81.9,-30.5,-73.2,-40.7C-64.6,-51,-50.1,-56.4,-36.9,-62.3C-23.8,-68.2,-11.9,-74.6,1.7,-77.5C15.2,-80.4,30.5,-79.8,42.7,-73.4Z" transform="translate(100 100)"></path></svg>
                    </div>
                    <div class="space-y-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                            <h3>Sarah Smith</h3>
                            <p class="text-green-500">Developer &amp; Designer</p>
                        </div>
                        <div class="relative flex items-center justify-center space-x-3">
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                            </a>
                            <a href="#_" class="text-gray-300 hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- Section 1 -->
<section class="py-16 bg-gray-50 xl:px-0 px-8">
    <div class="w-full max-w-6xl mx-auto">
        <div class="w-full relative md:pr-48">
            <img class="rounded-t-2xl md:rounded-2xl aspect-video object-cover" src="{{ app_event()?->image }}" alt="{{ app_event()?->name }}">
            <div class="md:absolute relative lg:w-96 w-full md:max-w-md right-0 top-0 md:py-8 lg:py-12 h-full">
                <div class="w-full h-full flex flex-col items-start justify-between rounded-b-2xl md:rounded-2xl p-8 bg-white shadow-xl">
                    <div class="bg-gray-50 mb-3 lg:flex flex md:hidden border border-gray-100 text-{{ app_color() }}-500 px-3.5 space-x-1 items-center py-1.5 text-xs rounded-full inline-block font-bold">
                        <svg class="w-3.5 -ml-1 h-3.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span class="">OUR CARD</span>
                    </div>
                    <div class="relative">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-800">SKYLINE BAR</h3>
                        <p class="text-gray-500 text-sm py-5 lg:py-3 lg:text-base">Here you get an insight on offered cocktails, long drinks and spirits.The full map is also available as a PDF download.</p>
                    </div>
                    <a href="{{ route('tickets.index') }}" class="bg-{{ app_color() }}-500 px-6 py-3 text-sm font-semibold rounded-full text-white">Continue ...</a>
                </div>
            </div>
        </div>
    </div>
</section>







