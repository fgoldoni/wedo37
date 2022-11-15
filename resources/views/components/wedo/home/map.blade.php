@if(app_event()->iframe)
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div class="lg:col-span-3 px-4 sm:px-0">
            <div class="flex items-center justify-center">
                {!! app_event()->iframe !!}
            </div>
        </div>
    </div>
@endif

