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
