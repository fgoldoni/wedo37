@props(['ticket'])
<div class="bg-gray-900">
    <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
        <div class="text-center">
            <h2 class="text-xl leading-6 font-semibold text-gray-300">{{ app_team_name() }}</h2>
            <p class="uppercase mt-2 text-3xl tracking-tight font-extrabold sm:text-4xl sm:tracking-tight lg:text-5xl lg:tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-900">{{ app_event()->artist }}</p>
            <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl whitespace-pre-wrap">{{ $ticket->description }}</p>
        </div>
    </div>
    <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
        <div class="relative z-0">
            <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative">
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="relative p-10 mt-10 bg-white rounded-lg shadow-xl md:mt-0">
                            <div class="pointer-events-none absolute inset-0 rounded-lg border-t border-gray-600" aria-hidden="true"></div>
                            <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                <div class="flex justify-center transform -translate-y-1/2">
                                    <span class="uppercase inline-flex rounded-full bg-gray-600 px-4 py-1 text-base font-semibold text-gray-300"> Available </span>
                                </div>
                            </div>
                            <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                <div>
                                    <h3 class="uppercase text-center text-3xl tracking-tight font-semibold text-transparent bg-clip-text bg-gradient-to-r from-{{ $ticket->color }}-500 to-{{ $ticket->color }}-900 sm:-mx-6" id="tier-growth">{{ $ticket->name }}</h3>
                                    <div class="mt-4 flex items-center justify-center">
                                        <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl sm:tracking-tight">
                                          <span class="mt-2 mr-2 text-4xl tracking-tight font-medium"> € </span>
                                          <span class="font-bold"> {{ $ticket->price }} </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;" wire:click="add({{ $ticket->id }})" class="uppercase hover:scale-105 hover:shadow-2xl ease-in-out duration-150 hidden lg:flex items-center justify-center w-full px-6 py-3 my-8 text-lg rounded-md text-white bg-gradient-to-r from-{{ $ticket->color }}-500 via-{{ $ticket->color }}-600 to-{{ $ticket->color }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ $ticket->color }}-300 dark:focus:ring-{{ $ticket->color }}-800 sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="add({{ $ticket->id }})"></x-wedo.loader>
                                {{ __('Add to Basket') }}
                            </a>
                            <a href="javascript:;" wire:click="continue({{ $ticket->id }})" class="lg:hidden uppercase hover:scale-105 hover:shadow-2xl ease-in-out duration-150 flex items-center justify-center w-full px-6 py-3 my-8 text-lg rounded-md text-white bg-gradient-to-r from-{{ $ticket->color }}-500 via-{{ $ticket->color }}-600 to-{{ $ticket->color }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ $ticket->color }}-300 dark:focus:ring-{{ $ticket->color }}-800 sm:w-auto">
                                <x-wedo.loader wire:loading wire:target="continue({{ $ticket->id }})"></x-wedo.loader>
                                {{ __('Add to Basket') }}
                            </a>
                            <div class="space-y-4 lg:pl-2">
                                <p class="mb-3 text-lg font-semibold text-gray-800">Everything in Basic, plus...</p>
                                <div class="flex items-start">
                                    <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                    <p class="text-gray-700">Unlimited Projects, Tasks, and Alerts</p>
                                </div>
                                <div class="flex items-start">
                                    <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                    <p class="text-gray-700">Unlimited User and Admin Accounts</p>
                                </div>
                                <div class="flex items-start">
                                    <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                    <p class="text-gray-700">One-on-one Coaching Call</p>
                                </div>
                                <div class="flex items-start">
                                    <x-heroicon-s-check-circle class="flex-none w-6 h-6 p-px mt-px mr-2 text-{{ $ticket->color }}-500"></x-heroicon-s-check-circle>
                                    <p class="text-gray-700">Access to Private Discord Group</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <x-wedo.disclosure title="Extra" class="mt-8" open>
                        <section aria-labelledby="cart-heading">
                            <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                            <ul role="list" class="border-t border-b border-gray-200 divide-y divide-gray-200">
                                <li class="flex py-6">
                                    <div class="flex-shrink-0">
                                        <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-03-product-04.jpg" alt="Front of mint cotton t-shirt with wavey lines pattern." class="btn-img w-24 h-24 rounded-md object-center object-cover sm:w-32 sm:h-32">
                                    </div>

                                    <div class="ml-4 flex-1 flex flex-col sm:ml-6">
                                        <div>
                                            <div class="flex justify-between">
                                                <h4 class="text-sm">
                                                    <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> Artwork Tee </a>
                                                </h4>
                                                <p class="ml-4 text-sm font-medium text-gray-900">€ 32.00</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">Mint</p>
                                            <p class="mt-1 text-sm text-gray-500">Medium</p>
                                        </div>

                                        <div class="mt-4 flex-1 flex items-end justify-between">
                                            <label for="quantity-0" class="sr-only">Quantity, Basic Tee</label>
                                            <select id="quantity-0" name="quantity-0" class="max-w-full rounded-md border border-gray-300 py-1.5 text-base leading-5 font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                            <div class="ml-4">
                                                <button type="button" class="uppercase btn text-sm font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">
                                                    <span>Add to Basket</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!-- Order summary -->
                        <section aria-labelledby="summary-heading" class="mt-10">
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
                                <button wire:click="continue({{ $ticket->id }})" type="button" class="btn w-full bg-{{ app_color() }}-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white bg-gradient-to-r from-{{ app_color() }}-500 via-{{ app_color() }}-600 to-{{ app_color() }}-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-{{ app_color() }}-300 dark:focus:ring-{{ app_color() }}-800">
                                    <x-wedo.loader wire:loading wire:target="continue({{ $ticket->id }})"></x-wedo.loader>
                                    Go to Basket
                                </button>
                            </div>
                        </section>
                    </x-wedo.disclosure>
                </div>
            </div>
        </div>
    </div>
</div>
