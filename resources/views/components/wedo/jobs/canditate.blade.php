@props(['applicant'])
<!-- Section 1 -->
<section class="box-border relative block overflow-hidden leading-6 text-left bg-no-repeat bg-cover bg-blue-50">
    <div class="w-full px-4 px-8 mx-auto leading-6 text-left xl:px-0 max-w-7xl xl:px-24 border-t border-b border-blue-200 ">
        <div class="flex flex-wrap px-12 pt-4 pb-8 -mx-4 opacity-100 xl:px-0">
            <div class="relative w-full px-4 leading-6 text-left xl:flex-grow-0 xl:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0"></div>
            <div class="absolute w-full px-4 mt-2 -ml-10 leading-6 text-left md:flex-grow-0 md:flex-shrink-0">
                <svg class="text-indigo-200 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24"><path d="M9.983 3v7.391C9.983 16.095 6.252 19.961 1 21l-.995-2.151C2.437 17.932 4 15.211 4 13H0V3h9.983zM24 3v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151C16.437 17.932 18 15.211 18 13h-3.983V3H24z"></path></svg>
            </div>
            <div class="relative w-full px-4 leading-6 text-left xl:flex-grow-0 xl:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0">
                <div class="box-border pt-2 text-lg text-indigo-700 md:text-xl">
                    {{ $applicant->message }}
                </div>
                <div class="box-border flex items-center mt-5 text-indigo-700">
                    <img src=" {{ $applicant->candidate?->profile_photo_url }}" class="w-16 h-16 leading-6 text-left align-middle border-none rounded-full">
                    <div class="ml-4 text-sm font-semibold text-left text-gray-700 uppercase">
                        {{ $applicant->candidate?->name }} ( {{ $applicant->phone }} )
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
