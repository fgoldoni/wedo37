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
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
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
                    <div id="tabs-1-panel-1" class="pt-10 pb-8 px-4 space-y-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                        <div class="space-y-4">
                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            New Arrivals
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            Basic Tees
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            Accessories
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="women-shoes-heading-mobile" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                <ul role="list" aria-labelledby="women-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sneakers </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Boots </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Flats </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sandals </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Heels </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Socks </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="women-collection-heading-mobile" class="font-medium text-gray-900">Shop Collection</p>
                                <ul role="list" aria-labelledby="women-collection-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Everything </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Core </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> New Arrivals </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sale </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Accessories </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">All Clothing</p>
                                <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Basic Tees </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Artwork Tees </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Tops </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Bottoms </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Swimwear </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Underwear </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">All Accessories</p>
                                <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Watches </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Wallets </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Bags </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sunglasses </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Hats </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Belts </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Full Nelson </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> My Way </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Re-Arranged </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Counterfeit </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Significant Other </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 'Men' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-2" class="pt-10 pb-8 px-4 space-y-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                        <div class="space-y-4">
                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            Accessories
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            New Arrivals
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-center object-cover group-hover:opacity-75">
                                <div class="flex flex-col justify-end">
                                    <div class="p-4 bg-white bg-opacity-60 text-base sm:text-sm">
                                        <a href="#" class="font-medium text-gray-900">
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            Artwork Tees
                                        </a>
                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="men-shoes-heading-mobile" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                <ul role="list" aria-labelledby="men-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sneakers </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Boots </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sandals </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Socks </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="men-collection-heading-mobile" class="font-medium text-gray-900">Shop Collection</p>
                                <ul role="list" aria-labelledby="men-collection-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Everything </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Core </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> New Arrivals </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sale </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">All Clothing</p>
                                <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Basic Tees </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Artwork Tees </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Pants </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Hoodies </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Swimsuits </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">All Accessories</p>
                                <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Watches </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Wallets </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Bags </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Sunglasses </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Hats </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Belts </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <div>
                                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Re-Arranged </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Counterfeit </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> Full Nelson </a>
                                    </li>

                                    <li class="flow-root">
                                        <a href="#" class="-m-2 p-2 block text-gray-500"> My Way </a>
                                    </li>
                                </ul>
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

                <div class="border-t border-gray-200 py-6 px-4">
                    <a href="#" class="-m-2 p-2 flex items-center">
                        <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="w-5 h-auto block flex-shrink-0">
                        <span class="ml-3 block text-base font-medium text-gray-900"> CAD </span>
                        <span class="sr-only">, change currency</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="relative bg-white">
        <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="h-16 flex items-center justify-between">
                    <div class="flex-1 flex items-center lg:hidden">
                        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                        <button type="button" class="-ml-2 bg-white p-2 rounded-md text-gray-400">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Search</span>
                            <!-- Heroicon name: outline/search -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:flex-1 lg:block lg:self-stretch">
                        <div class="h-full flex space-x-8">
                            <div class="flex">
                                <div class="relative flex">
                                    <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                                    <button type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false">
                                        Women
                                        <!-- Open: "bg-indigo-600", Closed: "" -->
                                        <span class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px" aria-hidden="true"></span>
                                    </button>
                                </div>

                                <!--
                                  'Women' flyout menu, show/hide based on flyout menu state.

                                  Entering: "transition ease-out duration-200"
                                    From: "opacity-0"
                                    To: "opacity-100"
                                  Leaving: "transition ease-in duration-150"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <div class="absolute z-10 top-full inset-x-0">
                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                    <div class="relative bg-white">
                                        <div class="max-w-7xl mx-auto px-8">
                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                                <div class="grid grid-rows-1 grid-cols-2 gap-8 text-sm">
                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden col-span-2 aspect-w-2">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    New Arrivals
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    Basic Tees
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    Accessories
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-y-10 gap-x-8 text-sm text-gray-500">
                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="women-shoes-heading" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                                            <ul role="list" aria-labelledby="women-shoes-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sneakers </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Boots </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Flats </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sandals </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Heels </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Socks </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div>
                                                            <p id="women-collection-heading" class="font-medium text-gray-900">Shop Collection</p>
                                                            <ul role="list" aria-labelledby="women-collection-heading" class="mt-4 space-y-4">
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

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Accessories </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="women-clothing-heading" class="font-medium text-gray-900">All Clothing</p>
                                                            <ul role="list" aria-labelledby="women-clothing-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Basic Tees </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Artwork Tees </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Tops </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Bottoms </a>
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
                                                            <p id="women-accessories-heading" class="font-medium text-gray-900">All Accessories</p>
                                                            <ul role="list" aria-labelledby="women-accessories-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Watches </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Wallets </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Bags </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sunglasses </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Hats </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Belts </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="women-brands-heading" class="font-medium text-gray-900">Brands</p>
                                                            <ul role="list" aria-labelledby="women-brands-heading" class="mt-4 space-y-4">
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
                            </div>

                            <div class="flex">
                                <div class="relative flex">
                                    <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                                    <button type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium" aria-expanded="false">
                                        Men
                                        <!-- Open: "bg-indigo-600", Closed: "" -->
                                        <span class="absolute bottom-0 inset-x-0 h-0.5 transition-colors ease-out duration-200 sm:mt-5 sm:transform sm:translate-y-px" aria-hidden="true"></span>
                                    </button>
                                </div>

                                <!--
                                  'Men' flyout menu, show/hide based on flyout menu state.

                                  Entering: "transition ease-out duration-200"
                                    From: "opacity-0"
                                    To: "opacity-100"
                                  Leaving: "transition ease-in duration-150"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <div class="absolute z-10 top-full inset-x-0">
                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                    <div class="relative bg-white">
                                        <div class="max-w-7xl mx-auto px-8">
                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                                <div class="grid grid-rows-1 grid-cols-2 gap-8 text-sm">
                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden col-span-2 aspect-w-2">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    Accessories
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    New Arrivals
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden">
                                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-center object-cover group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="p-4 bg-white bg-opacity-60 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    Artwork Tees
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-y-10 gap-x-8 text-sm text-gray-500">
                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="men-shoes-heading" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                                            <ul role="list" aria-labelledby="men-shoes-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sneakers </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Boots </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sandals </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Socks </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div>
                                                            <p id="men-collection-heading" class="font-medium text-gray-900">Shop Collection</p>
                                                            <ul role="list" aria-labelledby="men-collection-heading" class="mt-4 space-y-4">
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
                                                    </div>

                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="men-clothing-heading" class="font-medium text-gray-900">All Clothing</p>
                                                            <ul role="list" aria-labelledby="men-clothing-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Basic Tees </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Artwork Tees </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Pants </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Hoodies </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Swimsuits </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div>
                                                            <p id="men-accessories-heading" class="font-medium text-gray-900">All Accessories</p>
                                                            <ul role="list" aria-labelledby="men-accessories-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Watches </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Wallets </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Bags </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Sunglasses </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Hats </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Belts </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="space-y-10">
                                                        <div>
                                                            <p id="men-brands-heading" class="font-medium text-gray-900">Brands</p>
                                                            <ul role="list" aria-labelledby="men-brands-heading" class="mt-4 space-y-4">
                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Re-Arranged </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Counterfeit </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> Full Nelson </a>
                                                                </li>

                                                                <li class="flex">
                                                                    <a href="#" class="hover:text-gray-800"> My Way </a>
                                                                </li>
                                                            </ul>
                                                        </div>
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

                    <!-- Logo -->
                    <a href="#" class="flex">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                    </a>

                    <div class="flex-1 flex items-center justify-end">
                        <a href="#" class="hidden text-gray-700 hover:text-gray-800 lg:flex lg:items-center">
                            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="w-5 h-auto block flex-shrink-0">
                            <span class="ml-3 block text-sm font-medium"> CAD </span>
                            <span class="sr-only">, change currency</span>
                        </a>

                        <!-- Search -->
                        <a href="#" class="hidden ml-6 p-2 text-gray-400 hover:text-gray-500 lg:block">
                            <span class="sr-only">Search</span>
                            <!-- Heroicon name: outline/search -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>

                        <!-- Account -->
                        <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                            <span class="sr-only">Account</span>
                            <!-- Heroicon name: outline/user -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="#" class="group -m-2 p-2 flex items-center">
                                <!-- Heroicon name: outline/shopping-bag -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto sm:pt-16 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto lg:max-w-none">
            <!-- Product -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <!-- Image gallery -->
                <div class="flex flex-col-reverse">
                    <!-- Image selector -->
                    <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
                        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-2-tab-1" class="relative h-24 bg-white rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50" aria-controls="tabs-2-panel-1" role="tab" type="button">
                                <span class="sr-only"> Angled view </span>
                                <span class="absolute inset-0 rounded-md overflow-hidden">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="" class="w-full h-full object-center object-cover">
                </span>
                                <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                <span class="ring-transparent absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none" aria-hidden="true"></span>
                            </button>

                            <!-- More images... -->
                        </div>
                    </div>

                    <div class="w-full aspect-w-1 aspect-h-1">
                        <!-- Tab panel, show/hide based on tab state. -->
                        <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="Angled front view with bag zipped and handles upright." class="w-full h-full object-center object-cover sm:rounded-lg">
                        </div>

                        <!-- More images... -->
                    </div>
                </div>

                <!-- Product info -->
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Zip Tote Basket</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">$140</p>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-3">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!--
                                  Heroicon name: solid/star

                                  Active: "text-indigo-500", Inactive: "text-gray-300"
                                -->
                                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Description</h3>

                        <div class="text-base text-gray-700 space-y-6">
                            <p>The Zip Tote Basket is the perfect midpoint between shopping tote and comfy backpack. With convertible straps, you can hand carry, should sling, or backpack this convenient and spacious bag. The zip top and durable canvas construction keeps your goods protected for all-day use.</p>
                        </div>
                    </div>

                    <form class="mt-6">
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm text-gray-600">Color</h3>

                            <fieldset class="mt-2">
                                <legend class="sr-only">Choose a color</legend>
                                <div class="flex items-center space-x-3">
                                    <!--
                                      Active and Checked: "ring ring-offset-1"
                                      Not Active and Checked: "ring-2"
                                    -->
                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                                        <input type="radio" name="color-choice" value="Washed Black" class="sr-only" aria-labelledby="color-choice-0-label">
                                        <span id="color-choice-0-label" class="sr-only"> Washed Black </span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-700 border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <!--
                                      Active and Checked: "ring ring-offset-1"
                                      Not Active and Checked: "ring-2"
                                    -->
                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                        <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-1-label">
                                        <span id="color-choice-1-label" class="sr-only"> White </span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                    </label>

                                    <!--
                                      Active and Checked: "ring ring-offset-1"
                                      Not Active and Checked: "ring-2"
                                    -->
                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-500">
                                        <input type="radio" name="color-choice" value="Washed Gray" class="sr-only" aria-labelledby="color-choice-2-label">
                                        <span id="color-choice-2-label" class="sr-only"> Washed Gray </span>
                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-500 border border-black border-opacity-10 rounded-full"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <div class="mt-10 flex sm:flex-col1">
                            <button type="submit" class="max-w-xs flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">Add to bag</button>

                            <button type="button" class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                <!-- Heroicon name: outline/heart -->
                                <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <span class="sr-only">Add to favorites</span>
                            </button>
                        </div>
                    </form>

                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>

                        <div class="border-t divide-y divide-gray-200">
                            <div>
                                <h3>
                                    <!-- Expand/collapse question button -->
                                    <button type="button" class="group relative w-full py-6 flex justify-between items-center text-left" aria-controls="disclosure-1" aria-expanded="false">
                                        <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                                        <span class="text-gray-900 text-sm font-medium"> Features </span>
                                        <span class="ml-6 flex items-center">
                      <!--
                        Heroicon name: outline/plus-sm

                        Open: "hidden", Closed: "block"
                      -->
                      <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                      </svg>
                                            <!--
                                              Heroicon name: outline/minus-sm

                                              Open: "block", Closed: "hidden"
                                            -->
                      <svg class="hidden h-6 w-6 text-indigo-400 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                      </svg>
                    </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1">
                                    <ul role="list">
                                        <li>Multiple strap configurations</li>

                                        <li>Spacious interior with top zip</li>

                                        <li>Leather handle and tabs</li>

                                        <li>Interior dividers</li>

                                        <li>Stainless strap loops</li>

                                        <li>Double stitched construction</li>

                                        <li>Water-resistant</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- More sections... -->
                        </div>
                    </section>
                </div>
            </div>

            <section aria-labelledby="related-heading" class="mt-10 border-t border-gray-200 py-16 px-4 sm:px-0">
                <h2 id="related-heading" class="text-xl font-bold text-gray-900">Customers also bought</h2>

                <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <div>
                        <div class="relative">
                            <div class="relative w-full h-72 rounded-lg overflow-hidden">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="w-full h-full object-center object-cover">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                <p class="mt-1 text-sm text-gray-500">White and black</p>
                            </div>
                            <div class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden">
                                <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                                <p class="relative text-lg font-semibold text-white">$140</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="relative flex bg-gray-100 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-gray-900 hover:bg-gray-200">Add to bag<span class="sr-only">, Zip Tote Basket</span></a>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </section>
        </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-200 py-20">
                <div class="grid grid-cols-1 md:grid-cols-12 md:grid-flow-col md:gap-x-8 md:gap-y-16 md:auto-rows-min">
                    <!-- Image section -->
                    <div class="col-span-1 md:col-span-2 lg:row-start-1 lg:col-start-1">
                        <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                    </div>

                    <!-- Sitemap sections -->
                    <div class="mt-10 col-span-6 grid grid-cols-2 gap-8 sm:grid-cols-3 md:mt-0 md:row-start-1 md:col-start-3 md:col-span-8 lg:col-start-2 lg:col-span-6">
                        <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Products</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Bags </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Tees </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Objects </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Home Goods </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Accessories </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                                    </li>

                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600"> Sustainability </a>
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
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Contact </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Shipping </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Returns </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Warranty </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Secure Payments </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> FAQ </a>
                                </li>

                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600"> Find a store </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter section -->
                    <div class="mt-12 md:mt-0 md:row-start-2 md:col-start-3 md:col-span-8 lg:row-start-1 lg:col-start-9 lg:col-span-4">
                        <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                        <form class="mt-2 flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                            <div class="ml-4 flex-shrink-0">
                                <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 py-10 text-center">
                <p class="text-sm text-gray-500">&copy; 2021 Workflow, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
