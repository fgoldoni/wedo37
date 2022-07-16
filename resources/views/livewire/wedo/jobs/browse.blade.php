<!-- This example requires Tailwind CSS v2.0+ -->
<div class="grid grid-cols-1 sm:grid-cols-3">

    <div class="col-span-1 sm:col-span-3 py-4">
        <div class="px-4 space-y-2 sm:px-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
            <div class="flex sm:items-baseline sm:space-x-4">
                <h1 class="text-base font-medium tracking-tight text-gray-500 sm:text-xl">About 122 results ...</h1>
                <a href="#" class="hidden text-sm font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500 sm:block">Quickly apply to thousands of jobs<span aria-hidden="true"> &rarr;</span></a>
            </div>
            <p class="text-sm text-gray-600">Order placed <time datetime="2021-03-22" class="font-medium text-gray-900">March 22, 2021</time></p>
            <a href="#" class="text-sm font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500 sm:hidden">Quickly apply to thousands of jobs<span aria-hidden="true"> &rarr;</span></a>
        </div>
    </div>

    <div class="col-span-1 sm:col-span-1">
        <div class="grid grid-cols-1">
            <x-wedo.jobs.list :rows="$rows->data"></x-wedo.jobs.list>
        </div>
    </div>

    <div class="hidden sm:block col-span-1 sm:col-span-2">

        <!-- This example requires Tailwind CSS v2.0+ -->
        <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
                    <title id="svg-workcation">Workcation</title>
                    <defs>
                        <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
                </svg>

                <div class="relative">
                    <img class="mx-auto h-8" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600-mark-gray-800-and-indigo-600-text.svg" alt="Workcation">
                    <blockquote class="mt-10">
                        <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                            <p>&ldquo;Do you want to speed up your job search? Post your resume on Monster and let employers know you’re open to opportunities. Plus, receive relevant job recommendations in your inbox.&rdquo;</p>
                        </div>
                        <footer class="mt-8">
                            <div class="md:flex md:items-center md:justify-center">
                                <div class="md:flex-shrink-0">
                                    <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                    <div class="text-base font-medium text-gray-900">Judith Black</div>

                                    <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M11 0h3L9 20H6l5-20z" />
                                    </svg>

                                    <div class="text-base font-medium text-gray-500">CEO, Workcation</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </section>


    </div>

</div>
