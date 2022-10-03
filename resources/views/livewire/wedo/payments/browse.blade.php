<main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($carts?->total_quantity)
        <x-wedo.basket :carts="$carts" :back="route('checkout.index')" :back-name="__('Contact information')" :link="__('layout.navigation.payments')"></x-wedo.basket>

        <h2 class="sr-only">Payment</h2>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">

            <div class="lg:col-span-3">
                <x-wedo.partials.alert></x-wedo.partials.alert>
            </div>

            <div class="lg:col-span-2">
                <div class="grid grid-cols-1">
                    <section class="relative w-full">
                        <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url('https://cdn.devdojo.com/images/september2021/mesh-bg.jpeg')"></div>

                        <x-wedo.disclosure title="{{ __('Secure payment') }}" open>
                            <div class="flex items-center justify-center pt-4 relative cursor-pointer" wire:click="save">
                                <x-wedo.loader wire:loading></x-wedo.loader>
                                <svg height="4rem" style="height:4rem;" version="1.1" id="cartslidesecureicons" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 172 27" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"> <style type="text/css"> 	#cartslidesecureicons .stcartslidesecureicons0{fill:#EDEDED;enable-background:new    ;} 	#cartslidesecureicons .stcartslidesecureicons1{fill:#585858;} 	#cartslidesecureicons .stcartslidesecureicons2{fill:#FFFFFF;} 	#cartslidesecureicons .stcartslidesecureicons3{fill:#494949;} 	#cartslidesecureicons .stcartslidesecureicons4{fill:#AAAAAA;} 	#cartslidesecureicons .stcartslidesecureicons5{fill:#858585;} 	#cartslidesecureicons .stcartslidesecureicons6{fill:#2B2B2B;} 	#cartslidesecureicons .stcartslidesecureicons7{fill:url(#SVGID_1cartslidesecureicons_);} </style> <g id="Amex_00000142169732594405284200000016907451536884493501_"> 	<path class="stcartslidesecureicons0" d="M166.3,1.6h-32c-1.7,0-3,1.3-3,3v18c0,1.7,1.4,3,3,3h32c1.7,0,3-1.3,3-3v-18C169.3,2.9,167.9,1.6,166.3,1.6z"></path> 	<path class="stcartslidesecureicons1" d="M166.3,2.6c1.1,0,2,0.9,2,2v18c0,1.1-0.9,2-2,2h-32c-1.1,0-2-0.9-2-2v-18c0-1.1,0.9-2,2-2H166.3"></path> 	<path class="stcartslidesecureicons2" d="M140.2,11.9l0.8,1.9h-1.5L140.2,11.9z M156.3,12h-3v0.8h2.9V14h-2.9V15h3v0.7l2.1-2.2l-2.1-2.3L156.3,12 		L156.3,12z M142.2,9.6h4l0.9,1.9l0.8-1.9h10.4l1.1,1.2l1.1-1.2h4.8l-3.5,3.9l3.5,3.8h-4.8l-1.1-1.2l-1.1,1.2h-16.9l-0.5-1.2h-1.1 		l-0.5,1.2h-3.9l3.3-7.7h3.4L142.2,9.6z M150.9,10.7h-2.2l-1.5,3.5l-1.6-3.5h-2.2v4.8l-2.1-4.8h-2l-2.4,5.5h1.6l0.5-1.2h2.6l0.5,1.2 		h2.7v-3.9l1.8,3.9h1.2l1.7-3.9v3.9h1.5L150.9,10.7L150.9,10.7z M160.2,13.5l2.5-2.8h-1.8l-1.6,1.7l-1.5-1.7h-5.9v5.5h5.8l1.6-1.7 		l1.5,1.7h1.9L160.2,13.5L160.2,13.5z"></path> </g> <g id="Mastercard_00000117677295888574220990000005249669035380549040_"> 	<path class="stcartslidesecureicons0" d="M37.3,1.6h-32c-1.7,0-3,1.3-3,3v18c0,1.7,1.4,3,3,3h32c1.7,0,3-1.3,3-3v-18C40.3,2.9,38.9,1.6,37.3,1.6z"></path> 	<path class="stcartslidesecureicons2" d="M37.3,2.6c1.1,0,2,0.9,2,2v18c0,1.1-0.9,2-2,2h-32c-1.1,0-2-0.9-2-2v-18c0-1.1,0.9-2,2-2H37.3"></path> 	<circle class="stcartslidesecureicons3" cx="18" cy="13.5" r="7"></circle> 	<circle class="stcartslidesecureicons4" cx="26" cy="13.5" r="7"></circle> 	<path class="stcartslidesecureicons5" d="M25,13.5c0-2.4-1.2-4.5-3-5.7c-1.8,1.3-3,3.4-3,5.7s1.2,4.5,3,5.7C23.8,18,25,15.9,25,13.5z"></path> </g> <g id="Visa_00000134245419195564110270000005733439062207947398_"> 	<path class="stcartslidesecureicons0" d="M80.3,1.6h-32c-1.7,0-3,1.3-3,3v18c0,1.7,1.4,3,3,3h32c1.7,0,3-1.3,3-3v-18C83.3,2.9,81.9,1.6,80.3,1.6z"></path> 	<path class="stcartslidesecureicons2" d="M80.3,2.6c1.1,0,2,0.9,2,2v18c0,1.1-0.9,2-2,2h-32c-1.1,0-2-0.9-2-2v-18c0-1.1,0.9-2,2-2H80.3"></path> 	<path id="Visa_00000171707307898411063850000015704465902833052329_" class="stcartslidesecureicons6" d="M61,10.3l-3.5,8.2h-2.2L53.5,12 		c-0.1-0.4-0.2-0.5-0.5-0.7c-0.5-0.3-1.4-0.5-2.1-0.7l0.1-0.2h3.6c0.5,0,0.9,0.3,1,0.9l0.9,4.8l2.2-5.6L61,10.3L61,10.3z M69.8,15.9 		c0-2.2-3-2.3-3-3.3c0-0.3,0.3-0.6,0.9-0.7c0.3,0,1.2-0.1,2.1,0.4l0.4-1.8c-0.5-0.2-1.2-0.4-2-0.4c-2.1,0-3.6,1.1-3.6,2.7 		c0,1.2,1.1,1.8,1.8,2.2c0.8,0.4,1.1,0.7,1.1,1c0,0.5-0.7,0.8-1.3,0.8c-1.1,0-1.7-0.3-2.2-0.5l-0.4,1.8c0.5,0.2,1.4,0.4,2.4,0.4 		C68.3,18.7,69.8,17.6,69.8,15.9 M75.3,18.6h2l-1.7-8.2h-1.8c-0.4,0-0.8,0.2-0.9,0.6l-3.2,7.7h2.2l0.5-1.2h2.7L75.3,18.6z M73,15.6 		l1.1-3.1l0.6,3.1H73z M64,10.3l-1.8,8.2h-2.1l1.8-8.2L64,10.3z"></path> </g> <g id="CB_00000037671082468508675600000006016272699968820871_"> 	<path class="stcartslidesecureicons0" d="M123.3,1.6h-32c-1.7,0-3,1.3-3,3v18c0,1.7,1.4,3,3,3h32c1.7,0,3-1.3,3-3v-18C126.3,2.9,124.9,1.6,123.3,1.6z"></path> 	<linearGradient id="SVGID_1cartslidesecureicons_" gradientUnits="userSpaceOnUse" x1="107.2526" y1="2.6187" x2="107.2526" y2="24.6187"> 		<stop offset="0" style="stop-color:#272727"></stop> 		<stop offset="0.3515" style="stop-color:#272727"></stop> 		<stop offset="0.4737" style="stop-color:#484848"></stop> 		<stop offset="0.5515" style="stop-color:#606060"></stop> 		<stop offset="0.5925" style="stop-color:#606060"></stop> 		<stop offset="0.6315" style="stop-color:#5F5F5F"></stop> 		<stop offset="0.6697" style="stop-color:#5E5E5E"></stop> 		<stop offset="0.7074" style="stop-color:#5D5D5D"></stop> 		<stop offset="0.7448" style="stop-color:#5A5A5A"></stop> 		<stop offset="0.7819" style="stop-color:#575757"></stop> 		<stop offset="0.8181" style="stop-color:#535353"></stop> 		<stop offset="0.8485" style="stop-color:#4E4E4E"></stop> 		<stop offset="1" style="stop-color:#4E4E4E"></stop> 	</linearGradient> 	<path class="stcartslidesecureicons7" d="M123.3,2.6c1.1,0,2,0.9,2,2v18c0,1.1-0.9,2-2,2h-32c-1.1,0-2-0.9-2-2v-18c0-1.1,0.9-2,2-2H123.3"></path> 	<path class="stcartslidesecureicons2" d="M100.4,13h7.4c0-1.5-0.4-3-1.6-3.9c-1.3-1.2-3.7-1.6-5.8-1.6c-2.2,0-4.6,0.5-6,1.7C93.3,10.3,93,12,93,13.5 		c0,1.6,0.5,3.5,1.8,4.5c1.3,1.1,3.5,1.5,5.6,1.5c2,0,4.2-0.3,5.6-1.4c1.3-1.1,1.8-2.9,1.8-4.6l0,0h-7.4V13z"></path> 	<path class="stcartslidesecureicons2" d="M108.2,13.5v5.8h10.2l0,0c1.5-0.1,2.7-1.3,2.7-2.8s-1.2-2.8-2.7-2.9l0,0H108.2z"></path> 	<path class="stcartslidesecureicons2" d="M121,10.4c0-1.5-1.2-2.6-2.6-2.6c-0.1,0-0.2,0-0.3,0h-9.8V13h10.3C119.9,12.9,121,11.7,121,10.4z"></path> </g> </svg>
                            </div>
                            <x-wedo.divider label="{{ __('Or with Paypal') }}" class="py-8"></x-wedo.divider>
                            @livewire('wedo.paypal.browse')
                        </x-wedo.disclosure>

                        <x-wedo.carts.mobile-summary :carts="$carts" :has-extra="$hasExtra" id="card-button"  :continue="false"></x-wedo.carts.mobile-summary>
                    </section>
                </div>
            </div>
            <x-wedo.carts.summary :carts="$carts" :has-extra="$hasExtra"></x-wedo.carts.summary>
        </div>
    @else
        <x-wedo.pages.layouts.empty-state>
            <div class="text-center p-8">
                <img src="{{ asset('images/svg/tickets.svg') }}" alt="{{ app_event()->name }}" class="mx-auto h-16 w-16 text-gray-400"></img>

                <h3 class="mt-2 text-sm font-medium text-gray-900">No Tickets</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new Ticket.</p>
                <div class="mt-6">
                    <a href="{{ url('/') }}" class="btn-base inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-{{ app_color() }}-600 hover:bg-{{ app_color() }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ app_color() }}-500">
                        <x-heroicon-o-home class="-ml-1 mr-2 h-4 w-4"></x-heroicon-o-home>
                        {{ __('layout.navigation.home') }}
                    </a>
                </div>
            </div>
        </x-wedo.pages.layouts.empty-state>
    @endif

    @pushOnce('scripts')
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

    <script src="https://js.stripe.com/v3/"></script>
    @endPushOnce
</main>
