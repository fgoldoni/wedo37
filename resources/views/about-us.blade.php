<x-guest-layout>
    <!-- Hero Section -->
    <x-wedo.pages.header :title="__('About Us')"></x-wedo.pages.header>

    <div class="relative bg-white py-16">
        <div class="absolute inset-x-0 top-0 hidden h-1/2 bg-gray-50 lg:block" aria-hidden="true"></div>
        <div class="mx-auto max-w-7xl bg-{{ app_color() }}-600 lg:bg-transparent lg:px-8">
            <div class="lg:grid lg:grid-cols-12">
                <div class="relative z-10 lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:bg-transparent lg:py-16">
                    <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
                            <img class="rounded-3xl object-cover object-center shadow-2xl" src="https://images.unsplash.com/photo-1507207611509-ec012433ff52?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=934&q=80" alt="">
                        </div>
                    </div>
                </div>

                <div class="relative bg-{{ app_color() }}-600 lg:col-span-10 lg:col-start-3 lg:row-start-1 lg:grid lg:grid-cols-10 lg:items-center lg:rounded-3xl">
                    <div class="absolute inset-0 hidden overflow-hidden rounded-3xl lg:block" aria-hidden="true">
                        <svg class="absolute bottom-full left-full translate-y-1/3 -translate-x-2/3 transform xl:bottom-auto xl:top-0 xl:translate-y-0" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-{{ app_color() }}-500" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                        <svg class="absolute top-full -translate-y-1/3 -translate-x-1/3 transform xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-{{ app_color() }}-500" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                    </div>
                    <div class="relative mx-auto max-w-md space-y-6 py-12 px-4 sm:max-w-3xl sm:py-16 sm:px-6 lg:col-span-6 lg:col-start-4 lg:max-w-none lg:p-0">
                        <h2 class="text-3xl font-bold tracking-tight text-white" id="join-heading">Sell - First </h2>
                        <p class="text-lg text-white whitespace-pre-line">
                            Wir teilen Ihren Wunsch, die besten Veranstaltungen aller Zeiten zu haben. Deshalb entwickelt Sell-First die tägliche Digitalisierungsroutine mit den fortschrittlichsten, zugänglichen Optimierungen und Prozessen für Veranstaltungen jeder Größe weiter.

                            Unsere Platform und die vereinfachte und trendige Ausrichtung bringen das einzigartige Erlebnis für Events - für ein unschlagbares Wohlbefinden, einen einfachen Start zu 95% Zeitersparnis und Ideen und Tipps für die Produktivität sind die zugänglichen ganzheitlichen Rituale, nach denen sich unsere Sell-First-Community sehnt.
                        </p>
                        <a class="block w-full rounded-md border border-transparent bg-white py-3 px-5 text-center text-base font-medium text-{{ app_color() }}-700 shadow-md hover:bg-gray-50 sm:inline-block sm:w-auto" href="#">Jetzt starten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <x-wedo.home.footer></x-wedo.home.footer>
</x-guest-layout>
