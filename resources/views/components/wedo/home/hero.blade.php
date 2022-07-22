<section class="relative object-cover bg-center" style="background-image: url({{ app_team()->image }})">
    <div class="absolute inset-0 bg-gradient-to-bl from-slate-900"></div>

    <div class="relative z-20 px-4 py-24 mx-auto text-center text-white max-w-7xl lg:py-32">
        <div class="flex flex-wrap text-white">
            <div class="relative w-full px-4 mx-auto text-center xl:flex-grow-0 xl:flex-shrink-0">

                <h1 class="mt-0 mb-2 text-4xl font-bold text-white sm:text-5xl lg:text-7xl">{{ __('pages/home.hero.header', ['team' => app_team_name()]) }}</h1>
                <p class="mt-0 mb-4 text-base text-white sm:text-lg lg:text-xl">
                    {{ __('pages/home.hero.description') }}
                </p>

            </div>
        </div>
    </div>

    <div class="relative z-30 h-48 px-10 lg:h-56">
        @livewire('wedo.home.search-form')
    </div>

</section>
