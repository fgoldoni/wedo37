<main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <x-nav-link :href="route('accounts.index')" :active="request()->routeIs('accounts.index')">
                    <x-heroicon-o-phone-missed-call class="flex-shrink-0 -ml-1 mr-3 h-6 w-6 @if(request()->routeIs('accounts.index')) text-{{ app_color() }}-500 @else text-gray-400 group-hover:text-gray-500 @endif"/>
                    <span class="truncate"> My Profile </span>
                </x-nav-link>
                <x-nav-link :href="route('billings.index')" :active="request()->routeIs('billings.index')">
                    <x-heroicon-o-credit-card class="flex-shrink-0 -ml-1 mr-3 h-6 w-6 @if(request()->routeIs('billings.index')) text-{{ app_color() }}-500 @else text-gray-400 group-hover:text-gray-500 @endif"/>
                    <span class="truncate"> Plan & Billing </span>
                </x-nav-link>
            </nav>
        </aside>

        <!-- Payment details -->
        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <h2 class="sr-only">Billing Summary</h2>

            <div class="bg-white py-6 px-4 sm:px-6 sm:rounded-lg lg:px-8 lg:py-8 lg:grid lg:grid-cols-12 lg:gap-x-8">
                <dl class="grid grid-cols-2 gap-6 text-sm sm:grid-cols-2 md:gap-x-8 lg:col-span-7">
                    <div>
                        <dt class="font-medium text-gray-900">Billing address</dt>
                        <dd class="mt-3 text-gray-500">
                            <span class="block">Floyd Miles</span>
                            <span class="block">7363 Cynthia Pass</span>
                            <span class="block">Toronto, ON N3Y 4H8</span>
                        </dd>
                    </div>
                    <div>
                        <dt class="font-medium text-gray-900">Payment information</dt>
                        <dd class="-ml-4 -mt-1 flex flex-wrap">
                            <div class="ml-4 mt-4 flex-shrink-0">
                                <svg aria-hidden="true" width="36" height="24" viewBox="0 0 36 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-auto">
                                    <rect width="36" height="24" rx="4" fill="#224DBA" />
                                    <path d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" fill="#fff" />
                                </svg>
                                <p class="sr-only">Visa</p>
                            </div>
                            <div class="ml-4 mt-4">
                                <p class="text-gray-900">Ending with 4242</p>
                                <p class="text-gray-600">Expires 02 / 24</p>
                            </div>
                        </dd>
                    </div>
                </dl>

                <dl class="mt-8 divide-y divide-gray-200 text-sm lg:mt-0 lg:col-span-5">
                    <div class="pb-4 flex items-center justify-between">
                        <dt class="text-gray-600">Subtotal</dt>
                        <dd class="font-medium text-gray-900">$72</dd>
                    </div>
                    <div class="py-4 flex items-center justify-between">
                        <dt class="text-gray-600">Shipping</dt>
                        <dd class="font-medium text-gray-900">$5</dd>
                    </div>
                    <div class="py-4 flex items-center justify-between">
                        <dt class="text-gray-600">Tax</dt>
                        <dd class="font-medium text-gray-900">$6.16</dd>
                    </div>
                    <div class="pt-4 flex items-center justify-between">
                        <dt class="font-medium text-gray-900">Order total</dt>
                        <dd class="font-medium text-indigo-600">$83.16</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</main>

