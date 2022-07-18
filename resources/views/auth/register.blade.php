<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Section 1 -->
        <form method="POST" action="{{ route('login.link') }}">
            @csrf
            <x-auth-session-status class="mt-4" :status="session('status')" />
            <x-auth-validation-errors class="mt-4" :errors="$errors" />
            <section class="w-full px-8 sm:py-24 bg-gray-100 xl:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="flex flex-col items-center md:flex-row">

                        <div class="hidden sm:block w-full space-y-5 md:w-3/5 md:pr-16">
                            <p class="font-medium text-{{ app_color() }}-500 uppercase">Welcome back to {{ app_team()->display_name }} Portal</p>
                            <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                                2,000+ companies are researching resumes on {{ app_team()->display_name }} Portal.
                            </h2>
                            <p class="text-xl text-gray-600 md:pr-16">In our recent survey, recruiters told us that resume search is the top tool they use to find the best candidates. Post your resume on {{ app_team()->display_name }} today to ensure recruiters and hiring managers can easily find you.</p>
                        </div>
                        <div class="w-full mt-16 md:mt-0 md:w-2/5">
                            <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                                <h3 class="mb-6 text-2xl font-medium text-center">Magic Login Link</h3>
                                <input type="email" name="email" :value="old('email')" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-none rounded-lg focus:ring focus:ring-{{ app_color() }}-500 focus:outline-none" placeholder="Email address" required autofocus>
                                <div class="block">
                                    <button type="submit" class="w-full px-3 py-4 font-medium text-white bg-{{ app_color() }}-600 rounded-lg">Get The Link</button>
                                </div>
                                <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" class="text-{{ app_color() }}-500 underline">Sign up here</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </form>

    </div>

    <x-wedo.home.footer class="mt-28"></x-wedo.home.footer>
</x-app-layout>
