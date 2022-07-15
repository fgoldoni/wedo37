<section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
    <h2 id="filter-heading" class="sr-only">Filters</h2>
    <div
        x-data="{ openFilters: false }"

        aria-labelledby="filter-heading"

        class="relative z-10 border-t border-b border-secondary-200 grid items-center">

        <div class="relative col-start-1 row-start-1 py-4">
            <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-6 lg:px-8">
                <div>
                    <button  @click="openFilters = !openFilters" type="button" class="group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
                        <!-- Heroicon name: solid/filter -->
                        <svg class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                        </svg>
                        2 Filters
                    </button>
                </div>
                <div class="pl-6">
                    <button type="button" class="text-gray-500">Clear all</button>
                </div>
            </div>
        </div>
        <div

            x-show="openFilters"

            x-transition:enter="transition-opacity ease-linear duration-300"

            x-transition:enter-start="opacity-0"

            x-transition:enter-end="opacity-100"

            x-transition:leave="transition-opacity ease-linear duration-300"

            x-transition:leave-start="opacity-100"

            x-transition:leave-end="opacity-0"

            x-cloak

            class="border-t border-secondary-200 bg-secondary-200 py-10" id="disclosure-1">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
                <div class="grid grid-cols-1 gap-y-10 auto-rows-min md:grid-cols-2 md:gap-x-6">
                    <fieldset>
                        <legend class="block font-medium">Price</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="price-0" name="price[]" value="0" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="price-0" class="ml-3 min-w-0 flex-1 text-gray-600"> $0 - $25 </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="price-1" name="price[]" value="25" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="price-1" class="ml-3 min-w-0 flex-1 text-gray-600"> $25 - $50 </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="price-2" name="price[]" value="50" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="price-2" class="ml-3 min-w-0 flex-1 text-gray-600"> $50 - $75 </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="price-3" name="price[]" value="75" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="price-3" class="ml-3 min-w-0 flex-1 text-gray-600"> $75+ </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="block font-medium">Color</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-0" name="color[]" value="white" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="color-0" class="ml-3 min-w-0 flex-1 text-gray-600"> White </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-1" name="color[]" value="beige" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="color-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Beige </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-2" name="color[]" value="blue" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked>
                                <label for="color-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Blue </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-3" name="color[]" value="brown" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="color-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Brown </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-4" name="color[]" value="green" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="color-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Green </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="color-5" name="color[]" value="purple" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="color-5" class="ml-3 min-w-0 flex-1 text-gray-600"> Purple </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="grid grid-cols-1 gap-y-10 auto-rows-min md:grid-cols-2 md:gap-x-6">
                    <fieldset>
                        <legend class="block font-medium">Size</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-0" name="size[]" value="xs" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="size-0" class="ml-3 min-w-0 flex-1 text-gray-600"> XS </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-1" name="size[]" value="s" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500" checked>
                                <label for="size-1" class="ml-3 min-w-0 flex-1 text-gray-600"> S </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-2" name="size[]" value="m" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="size-2" class="ml-3 min-w-0 flex-1 text-gray-600"> M </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-3" name="size[]" value="l" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="size-3" class="ml-3 min-w-0 flex-1 text-gray-600"> L </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-4" name="size[]" value="xl" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="size-4" class="ml-3 min-w-0 flex-1 text-gray-600"> XL </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="size-5" name="size[]" value="2xl" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="size-5" class="ml-3 min-w-0 flex-1 text-gray-600"> 2XL </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="block font-medium">Category</legend>
                        <div class="pt-6 space-y-6 sm:pt-4 sm:space-y-4">
                            <div class="flex items-center text-base sm:text-sm">
                                <input id="category-0" name="category[]" value="all-new-arrivals" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="category-0" class="ml-3 min-w-0 flex-1 text-gray-600"> All New Arrivals </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="category-1" name="category[]" value="tees" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="category-1" class="ml-3 min-w-0 flex-1 text-gray-600"> Tees </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="category-2" name="category[]" value="objects" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="category-2" class="ml-3 min-w-0 flex-1 text-gray-600"> Objects </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="category-3" class="ml-3 min-w-0 flex-1 text-gray-600"> Sweatshirts </label>
                            </div>

                            <div class="flex items-center text-base sm:text-sm">
                                <input id="category-4" name="category[]" value="pants-and-shorts" type="checkbox" class="flex-shrink-0 h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                <label for="category-4" class="ml-3 min-w-0 flex-1 text-gray-600"> Pants &amp; Shorts </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-1 py-4">
            <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <x-dropdown>
                    <x-slot name="trigger">
                        <div class="flex">
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sort
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </x-slot>

                    <x-dropdown.item label="Most Popular" />
                    <x-dropdown.item separator label="Best Rating" />
                    <x-dropdown.item separator label="Newest" />
                </x-dropdown>
            </div>
        </div>

    </div>
</section>
