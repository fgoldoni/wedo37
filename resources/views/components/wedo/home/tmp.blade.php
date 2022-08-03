<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-white">
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 flex z-40">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 pt-5 pb-2 flex">
                    <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex px-4 space-x-8" aria-orientation="horizontal" role="tablist">
                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                            <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

                            <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                            <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                        </div>
                    </div>

                    <!-- 'Women' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-1" class="px-4 pt-10 pb-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                            <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                <div>
                                    <p id="mobile-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="mobile-featured-heading-0" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Sleep </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Swimwear </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Underwear </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Basic Tees </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Artwork Tees </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Bottoms </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Underwear </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Accessories </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                <div>
                                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Everything </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Core </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> New Arrivals </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Sale </a>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Full Nelson </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> My Way </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Re-Arranged </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Counterfeit </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Significant Other </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 'Men' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-2" class="px-4 pt-10 pb-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-1 items-start gap-y-10 gap-x-6">
                            <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                <div>
                                    <p id="mobile-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                    <ul role="list" aria-labelledby="mobile-featured-heading-1" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Casual </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Boxers </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Outdoor </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p id="mobile-categories-heading" class="font-medium text-gray-900">Categories</p>
                                    <ul role="list" aria-labelledby="mobile-categories-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Artwork Tees </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Pants </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Accessories </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Boxers </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Basic Tees </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-y-10 gap-x-6">
                                <div>
                                    <p id="mobile-collection-heading" class="font-medium text-gray-900">Collection</p>
                                    <ul role="list" aria-labelledby="mobile-collection-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Everything </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Core </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> New Arrivals </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Sale </a>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <p id="mobile-brand-heading" class="font-medium text-gray-900">Brands</p>
                                    <ul role="list" aria-labelledby="mobile-brand-heading" class="mt-6 space-y-6">
                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Significant Other </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> My Way </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Counterfeit </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Re-Arranged </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="text-gray-500"> Full Nelson </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                    <!-- Currency selector -->
                    <form>
                        <div class="inline-block">
                            <label for="mobile-currency" class="sr-only">Currency</label>
                            <div class="-ml-2 group relative border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                <select id="mobile-currency" name="currency" class="bg-none border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-gray-700 group-hover:text-gray-800 focus:outline-none focus:ring-0 focus:border-transparent">
                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>
                                </select>
                                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-500">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="relative">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
                    <!-- Currency selector -->
                    <form class="hidden lg:block lg:flex-1">
                        <div class="flex">
                            <label for="desktop-currency" class="sr-only">Currency</label>
                            <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                                <select id="desktop-currency" name="currency" class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                                    <option>CAD</option>

                                    <option>USD</option>

                                    <option>AUD</option>

                                    <option>EUR</option>

                                    <option>GBP</option>
                                </select>
                                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>

                    <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Get free delivery on orders over $100</p>

                    <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                        <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                        <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                    </div>
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="border-b border-gray-200">
                        <div class="h-16 flex items-center justify-between">
                            <!-- Logo (lg+) -->
                            <div class="hidden lg:flex lg:items-center">
                                <a href="#">
                                    <span class="sr-only">Workflow</span>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                                </a>
                            </div>

                            <div class="hidden h-full lg:flex">
                                <!-- Mega menus -->
                                <div class="ml-8">
                                    <div class="h-full flex justify-center space-x-8">
                                        <div class="flex">
                                            <div class="relative flex">
                                                <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px" aria-expanded="false">Women</button>
                                            </div>

                                            <!--
                                              'Women' mega menu, show/hide based on flyout menu state.

                                              Entering: "transition ease-out duration-200"
                                                From: "opacity-0"
                                                To: "opacity-100"
                                              Leaving: "transition ease-in duration-150"
                                                From: "opacity-100"
                                                To: "opacity-0"
                                            -->
                                            <div class="absolute top-full inset-x-0 text-gray-500 sm:text-sm">
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="max-w-7xl mx-auto px-8">
                                                        <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-featured-heading-0" class="font-medium text-gray-900">Featured</p>
                                                                    <ul role="list" aria-labelledby="desktop-featured-heading-0" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Sleep </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Swimwear </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Underwear </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div>
                                                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Basic Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Artwork Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Bottoms </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Underwear </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Accessories </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Everything </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Core </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> New Arrivals </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Sale </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div>
                                                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Full Nelson </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> My Way </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Re-Arranged </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Counterfeit </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Significant Other </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="relative flex">
                                                <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px" aria-expanded="false">Men</button>
                                            </div>

                                            <!--
                                              'Men' mega menu, show/hide based on flyout menu state.

                                              Entering: "transition ease-out duration-200"
                                                From: "opacity-0"
                                                To: "opacity-100"
                                              Leaving: "transition ease-in duration-150"
                                                From: "opacity-100"
                                                To: "opacity-0"
                                            -->
                                            <div class="absolute top-full inset-x-0 text-gray-500 sm:text-sm">
                                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                                <div class="relative bg-white">
                                                    <div class="max-w-7xl mx-auto px-8">
                                                        <div class="grid grid-cols-2 items-start gap-y-10 gap-x-8 pt-10 pb-12">
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-featured-heading-1" class="font-medium text-gray-900">Featured</p>
                                                                    <ul role="list" aria-labelledby="desktop-featured-heading-1" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Casual </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Boxers </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Outdoor </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div>
                                                                    <p id="desktop-categories-heading" class="font-medium text-gray-900">Categories</p>
                                                                    <ul role="list" aria-labelledby="desktop-categories-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Artwork Tees </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Pants </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Accessories </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Boxers </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Basic Tees </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8">
                                                                <div>
                                                                    <p id="desktop-collection-heading" class="font-medium text-gray-900">Collection</p>
                                                                    <ul role="list" aria-labelledby="desktop-collection-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Everything </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Core </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> New Arrivals </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Sale </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div>
                                                                    <p id="desktop-brand-heading" class="font-medium text-gray-900">Brands</p>
                                                                    <ul role="list" aria-labelledby="desktop-brand-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Significant Other </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> My Way </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Counterfeit </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Re-Arranged </a>
                                                                        </li>

                                                                        <li class="flex">
                                                                            <a href="#" class="hover:text-gray-800"> Full Nelson </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile menu and search (lg-) -->
                            <div class="flex-1 flex items-center lg:hidden">
                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                <button type="button" class="-ml-2 bg-white p-2 rounded-md text-gray-400">
                                    <span class="sr-only">Open menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>

                                <!-- Search -->
                                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <!-- Heroicon name: outline/search -->
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Logo (lg-) -->
                            <a href="#" class="lg:hidden">
                                <span class="sr-only">Workflow</span>
                                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                            </a>

                            <div class="flex-1 flex items-center justify-end">
                                <div class="flex items-center lg:ml-8">
                                    <div class="flex space-x-8">
                                        <div class="hidden lg:flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Search</span>
                                                <!-- Heroicon name: outline/search -->
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex">
                                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Account</span>
                                                <!-- Heroicon name: outline/user -->
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                                    <div class="flow-root">
                                        <a href="#" class="group -m-2 p-2 flex items-center">
                                            <!-- Heroicon name: outline/shopping-cart -->
                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                            <span class="sr-only">items in cart, view bag</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-3xl mx-auto px-4 py-16 sm:px-6 sm:pt-24 sm:pb-32 lg:px-8">
        <div class="max-w-xl">
            <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Your Orders</h1>
            <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and discover similar products.</p>
        </div>

        <div class="mt-12 space-y-16 sm:mt-16">
            <section aria-labelledby="4376-heading">
                <div class="space-y-1 md:flex md:items-baseline md:space-y-0 md:space-x-4">
                    <h2 id="4376-heading" class="text-lg font-medium text-gray-900 md:flex-shrink-0">Order #4376</h2>
                    <div class="space-y-5 md:flex-1 md:min-w-0 sm:flex sm:items-baseline sm:justify-between sm:space-y-0">
                        <p class="text-sm font-medium text-gray-500">Delivered on January 22, 2021</p>
                        <div class="flex text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Manage order</a>
                            <div class="border-l border-gray-200 ml-4 pl-4 sm:ml-6 sm:pl-6">
                                <a href="#" class="text-indigo-600 hover:text-indigo-500">View Invoice</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 -mb-6 flow-root border-t border-gray-200 divide-y divide-gray-200">
                    <div class="py-6 sm:flex">
                        <div class="flex space-x-4 sm:min-w-0 sm:flex-1 sm:space-x-6 lg:space-x-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/order-history-page-07-product-01.jpg" alt="Brass puzzle in the shape of a jack with overlapping rounded posts." class="flex-none w-20 h-20 rounded-md object-center object-cover sm:w-48 sm:h-48">
                            <div class="pt-1.5 min-w-0 flex-1 sm:pt-0">
                                <h3 class="text-sm font-medium text-gray-900">
                                    <a href="#">Machined Brass Puzzle</a>
                                </h3>
                                <p class="text-sm text-gray-500 truncate">
                                    <span>Brass</span>
                                    <span class="mx-1 text-gray-400" aria-hidden="true">&middot;</span>
                                    <span>3&quot; x 3&quot; x 3&quot;</span>
                                </p>
                                <p class="mt-1 font-medium text-gray-900">$95.00</p>
                            </div>
                        </div>
                        <div class="mt-6 space-y-4 sm:mt-0 sm:ml-6 sm:flex-none sm:w-40">
                            <button type="button" class="w-full flex items-center justify-center bg-indigo-600 py-2 px-2.5 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-full sm:flex-grow-0">Buy again</button>
                            <button type="button" class="w-full flex items-center justify-center bg-white py-2 px-2.5 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-full sm:flex-grow-0">Shop similar</button>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </section>

            <!-- More orders... -->
        </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-200">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-20 grid grid-cols-2 gap-8 sm:gap-y-0 sm:grid-cols-2 lg:grid-cols-4">
                <div class="grid grid-cols-1 gap-y-10 lg:col-span-2 lg:grid-cols-2 lg:gap-y-0 lg:gap-x-8">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Account</h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Manage Account </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Saved Items </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Orders </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Redeem Gift card </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Service</h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Shipping &amp; Returns </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Warranty </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> FAQ </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Find a store </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Get in touch </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-y-10 lg:col-span-2 lg:grid-cols-2 lg:gap-y-0 lg:gap-x-8">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Company</h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Press </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Careers </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Terms &amp; Conditions </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Privacy </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Connect</h3>
                        <ul role="list" class="mt-6 space-y-6">
                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Instagram </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Pinterest </a>
                            </li>

                            <li class="text-sm">
                                <a href="#" class="text-gray-500 hover:text-gray-600"> Twitter </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 py-10 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center justify-center text-sm text-gray-500">
                    <p>Shipping to Canada ($CAD)</p>
                    <p class="ml-3 border-l border-gray-200 pl-3">English</p>
                </div>
                <p class="mt-6 text-sm text-gray-500 text-center sm:mt-0">&copy; 2021 Clothing Company, Ltd.</p>
            </div>
        </div>
    </footer>
</div>
