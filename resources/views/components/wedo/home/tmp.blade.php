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

    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto pt-16">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Shopping Cart</h1>

                <form class="mt-12">
                    <section aria-labelledby="cart-heading">
                        <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                        <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                            <li class="flex py-6 sm:py-10">
                                <div class="flex-shrink-0">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-03.jpg" alt="Insulated bottle with white base and black snap lid." class="w-24 h-24 rounded-lg object-center object-cover sm:w-32 sm:h-32">
                                </div>

                                <div class="relative ml-4 flex-1 flex flex-col justify-between sm:ml-6">
                                    <div>
                                        <div class="flex justify-between sm:grid sm:grid-cols-2">
                                            <div class="pr-6">
                                                <h3 class="text-sm">
                                                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> Nomad Tumbler </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">White</p>
                                            </div>

                                            <p class="text-sm font-medium text-gray-900 text-right">$35.00</p>
                                        </div>

                                        <div class="mt-4 flex items-center sm:block sm:absolute sm:top-0 sm:left-1/2 sm:mt-0">
                                            <label for="quantity-0" class="sr-only">Quantity, Nomad Tumbler</label>
                                            <select id="quantity-0" name="quantity-0" class="block max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>

                                            <button type="button" class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3">
                                                <span>Remove</span>
                                            </button>
                                        </div>
                                    </div>

                                    <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>In stock</span>
                                    </p>
                                </div>
                            </li>

                            <li class="flex py-6 sm:py-10">
                                <div class="flex-shrink-0">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-01.jpg" alt="Front of men&#039;s Basic Tee in sienna." class="w-24 h-24 rounded-lg object-center object-cover sm:w-32 sm:h-32">
                                </div>

                                <div class="relative ml-4 flex-1 flex flex-col justify-between sm:ml-6">
                                    <div>
                                        <div class="flex justify-between sm:grid sm:grid-cols-2">
                                            <div class="pr-6">
                                                <h3 class="text-sm">
                                                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> Basic Tee </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Sienna</p>

                                                <p class="mt-1 text-sm text-gray-500">Large</p>
                                            </div>

                                            <p class="text-sm font-medium text-gray-900 text-right">$32.00</p>
                                        </div>

                                        <div class="mt-4 flex items-center sm:block sm:absolute sm:top-0 sm:left-1/2 sm:mt-0">
                                            <label for="quantity-1" class="sr-only">Quantity, Basic Tee</label>
                                            <select id="quantity-1" name="quantity-1" class="block max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>

                                            <button type="button" class="ml-4 text-sm font-medium text-indigo-600 hover:text-indigo-500 sm:ml-0 sm:mt-3">
                                                <span>Remove</span>
                                            </button>
                                        </div>
                                    </div>

                                    <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>In stock</span>
                                    </p>
                                </div>
                            </li>

                            <!-- More products... -->
                        </ul>
                    </section>

                    <!-- Order summary -->
                    <section aria-labelledby="summary-heading" class="mt-10 sm:ml-32 sm:pl-6">
                        <div class="bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8">
                            <h2 id="summary-heading" class="sr-only">Order summary</h2>

                            <div class="flow-root">
                                <dl class="-my-4 text-sm divide-y divide-gray-200">
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Subtotal</dt>
                                        <dd class="font-medium text-gray-900">$99.00</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Shipping</dt>
                                        <dd class="font-medium text-gray-900">$5.00</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Tax</dt>
                                        <dd class="font-medium text-gray-900">$8.32</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-base font-medium text-gray-900">Order total</dt>
                                        <dd class="text-base font-medium text-gray-900">$112.32</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Checkout</button>
                        </div>

                        <div class="mt-6 text-sm text-center text-gray-500">
                            <p>
                                or <a href="#" class="text-indigo-600 font-medium hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></a>
                            </p>
                        </div>
                    </section>
                </form>
            </div>
        </div>

        <!-- Policy grid -->
        <section aria-labelledby="policies-heading" class="mt-24 bg-gray-50 border-t border-gray-200">
            <h2 id="policies-heading" class="sr-only">Our policies</h2>

            <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 sm:py-32 lg:px-8">
                <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                            <h3 class="text-base font-medium text-gray-900">Free returns</h3>
                            <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.</p>
                        </div>
                    </div>

                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                            <h3 class="text-base font-medium text-gray-900">Same day delivery</h3>
                            <p class="mt-3 text-sm text-gray-500">We offer a delivery service that has never been done before. Checkout today and receive your products within hours.</p>
                        </div>
                    </div>

                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                            <h3 class="text-base font-medium text-gray-900">All year discount</h3>
                            <p class="mt-3 text-sm text-gray-500">Looking for a deal? You can use the code &quot;ALLYEAR&quot; at checkout and get money off all year round.</p>
                        </div>
                    </div>

                    <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                        <div class="md:flex-shrink-0">
                            <div class="flow-root">
                                <img class="-my-1 h-24 w-auto mx-auto" src="https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg" alt="">
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
                            <h3 class="text-base font-medium text-gray-900">For the planet</h3>
                            <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and restoration of the natural environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-gray-50">
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
