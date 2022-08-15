<section class="w-full py-16 overflow-hidden bg-white relative">
    <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-64 left-0 top-0"></div>
    <div class="w-1/2 h-full bg-gray-50 md:block hidden absolute transform -translate-x-24 -skew-x-[30deg] -skew-x-12 left-0 top-0"></div>
    <div class="max-w-6xl relative mx-auto flex sm:px-0 px-10 flex-col items-start sm:items-center justify-center">
        <h2 class="text-gray-900 text-3xl font-bold">Payment methods</h2>
        <a href="javascript:;" class="text-green-500 font-bold text-lg mt-5 flex items-center group">
            <span>100% secure payment</span>
            <svg class="btn-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
        <div class="flex flex-wrap justify-start sm:grid sm:grid-cols-3 gap-6 mt-8">
            <div class="h-20 w-20 bg-white rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                <img  class="w-12 h-12" src="{{ asset('images/svg/paypal.svg') }}" alt="paypal">
            </div>
            <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                <img  class="w-12 h-12" src="{{ asset('images/svg/visa-credit-card.svg') }}" alt="paypal">
            </div>
            <div class="h-20 w-20 bg-white sm:translate-x-12 md:translate-x-0 rounded-2xl hover:scale-125 transition-all ease-out cursor-pointer duration-200 border border-gray-200 flex items-center justify-center">
                <img  class="w-12 h-12" src="{{ asset('images/svg/mastercard.svg') }}" alt="paypal">
            </div>
        </div>
    </div>
</section>
