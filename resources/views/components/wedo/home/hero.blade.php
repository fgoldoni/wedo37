<section class="relative flex flex-col-reverse w-full px-6 py-16 bg-gray-900 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-gray-900 transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice"><path d="M50 0H80L50 120H0L50 0Z"></path></svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="{{ asset('images/tenor2.jpg') }}" alt="">
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
            <p class="flex inline-block text-sm font-semibold tracking-wider text-{{ app_color() }}-200 uppercase rounded-full mb-7">
                Sonntag, 04.12.2022, 18:00
            </p>
            <h1 class="uppercase mb-5 font-sans text-3xl font-bold tracking-tight text-white sm:text-6xl sm:leading-none">
                Black Mamba<br class="hidden md:block">
                <span class="inline-block text-{{ app_color() }}-500">Presente</span>
                <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-100 to-{{ app_color() }}-500">

                </span>
                <span class="block"><x-wedo.home.typing-effect></x-wedo.home.typing-effect>&nbsp;</span>
            </h1>
            <p class="mb-5 text-base text-gray-300 sm:pr-10 md:text-lg">
                Learn how we are tranforming the world of web design. These state-of-the-art innovative tools will remind you of why you got into design in the first place.
            </p>
            <div class="uppercase flex flex-col items-center pt-2 sm:flex-row sm:pt-4">
                <a href="{{ route('tickets.index') }}" class="inline-flex items-center justify-center w-full h-12 px-6 mb-4 font-medium tracking-wide text-white rounded shadow-md sm:w-auto sm:mr-4 sm:mb-0 hover:-translate-y-1 hover:ease-in-out duration-200 bg-{{ app_color() }}-500 hover:bg-{{ app_color() }}-700 hover:bg-deep-{{ app_color() }}-accent-700 focus:shadow-outline focus:outline-none">
                    <x-heroicon-o-ticket class="-ml-1 mr-2 h-6 w-6 text-white"/>
                    Book Tickets
                </a>
                <a href="/" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 bg-gray-700 rounded shadow-md sm:w-auto hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                    Learn More | 2250x1500
                </a>
            </div>
        </div>
    </div>
</section>
