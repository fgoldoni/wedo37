<x-app-layout>
    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-wedo.basket :back="route('orders.index')" :back-name="__('layout.navigation.browse_orders')" :link="__('Confirmation')" :title="__('Purchase confirmation')"></x-wedo.basket>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="lg:col-span-3">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            {{ __('Congratulations! Your order has been registered') }}
                        </h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>
                                {{ __('It is confirmed and will be processed immediately. You will receive a confirmation email when your order is complete.') }}
                            </p>
                        </div>
                        <div class="mt-3 text-sm">
                            <a href="#" class="font-medium text-{{ app_color() }}-600 hover:text-{{ app_color() }}-500">
                                {{ __('layout.navigation.browse_orders') }}
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-3">
                <div class="px-4 py-5 sm:p-6">
                    <h2 class="btn-title text-3xl font-bold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-500 to-{{ app_color() }}-900">{{ app_event()?->name }}</h2>

                    <div class="mt-2 border-b border-gray-200 pb-5 text-sm sm:flex sm:justify-between">
                        <dl class="flex">
                            <dt class="text-gray-500">{{ __('Order Number') }}&nbsp;</dt>
                            <dd class="font-medium text-gray-900"> #{{ app_session_order()->id }}</dd>
                        </dl>
                        <div class="mt-4 sm:mt-0">
                            <dl class="flex">
                                <dt>
                                    <span class="sr-only">Date</span>
                                    <span class="sm:mx-2 text-gray-400" aria-hidden="true">&middot;</span>
                                </dt>
                            </dl>
                        </div>
                    </div>
                </div>

                <!--title -->
                <div class="relative w-full bg-gray-50 py-10">
                    <div class="absolute inset-0 w-full h-full bg-cover opacity-20" style="background-image:url({{ asset('images/svg/glamorous.svg') }});"></div>


                    <div class="max-w-5xl mx-auto grid sm:grid-cols-2 gap-10 px-4">

                        <div class="visible-print text-center">
                            {!! QrCode::size(250)->generate(env('API_URL') . '/admin/orders/' . app_session_order()->id . '/edit'); !!}
                        </div>

                        <div class="flex flex-col gap-8">
                            <p class="text-2xl font-medium tracking-wider capitalize">{{ auth()->user()->name }}</p>

                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Organizer') }}</p>
                                <p class="text-gray-400 text-sm">
                                    {{ app_team_name() }}
                                </p>
                                <p class="text-{{ app_color() }}-400 text-sm relative underline">
                                    <a href="tel: {{ app_team()->phone }}">{{ app_team()->phone }}</a>
                                </p>
                            </div>


                            <div class="flex flex-col gap-1">
                                <p class="font-medium">{{ __('Date & address') }}:</p>
                                <p class="text-gray-400 text-sm">
                                    {{ \Carbon\Carbon::parse(app_event()?->start)->format('d M, Y h:m') }} -  {{ \Carbon\Carbon::parse(app_event()?->end   )->format('d M, Y h:m') }}
                                </p>
                                <p class="text-gray-400 text-sm">
                                    {{ app_event()->address }}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="bg-white shadow sm:rounded-lg mt-8">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    {{ __('layout.card.summary') }}
                </h3>
                <div class="mt-2 w-full text-sm text-gray-500">
                    @if(app_session_order())
                    <ul role="list" class="mt-6 divide-y divide-gray-200 border-t border-gray-200 text-sm font-medium text-gray-500">
                        @foreach(app_session_order()?->items as $item)
                            @if($item->associatedModel === \App\Models\Ticket::$apiModel)
                                <li class="flex space-x-6 py-6">
                                    <img src="{{ $item->attributes->avatar_url }}" alt="{{ $item->attributes->name }}" class="btn-img h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center">
                                    <div class="flex-auto space-y-1">
                                        <h3 class="text-gray-900">
                                            <a href="javascript:;" class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ $item->attributes->color }}-400 to-{{ $item->attributes->color }}-900">{{ $item->quantity }} x {{ $item->name }}</a>
                                        </h3>
                                        <ul class="pt-2 space-y-3">
                                            @php
                                                $tags = is_array($item->attributes->tags) ? $item->attributes->tags : json_decode($item->attributes->tags);
                                            @endphp
                                            <li class="flex font-medium text-gray-500">
                                                <x-heroicon-s-check-circle class="w-5 h-5 mr-1.5 text-{{ $item->attributes->color }}-400"></x-heroicon-s-check-circle>
                                                {{ $item->attributes->attendees }} Person(s)
                                            </li>

                                            @foreach($tags as $tag)
                                                <li class="flex items-center font-medium text-gray-500">
                                                    <x-heroicon-s-check-circle class="w-5 h-5 mr-1.5 text-{{ $item->attributes->color }}-400"></x-heroicon-s-check-circle>
                                                    {{ $tag }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <p class="flex-none font-medium text-gray-900">{{ $item->quantity }} * € {{ $item->price }}</p>
                                </li>
                            @endif
                        @endforeach

                            @foreach(app_session_order()?->items as $item)
                                @if($item->associatedModel === \App\Models\Extra::$apiModel)
                                    <li class="flex space-x-6 py-6">
                                        <div class="flex-auto space-y-1">
                                            <h3 class="text-gray-900">
                                                <a href="javascript:;" class="uppercase btn-title truncate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-{{ app_color() }}-400 to-{{ app_color() }}-900">{{ $item->quantity }} x {{ $item->name }}</a>
                                            </h3>
                                        </div>
                                        <p class="flex-none font-medium text-gray-900">{{ $item->quantity }} * € {{ $item->price }}</p>
                                    </li>
                                @endif
                            @endforeach
                    </ul>

                    <dl class="space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-500">
                        <div class="flex justify-between">
                            <dt>{{ __('Subtotal') }}</dt>
                            <dd class="text-gray-900">€ {{ app_session_order()?->sub_total }}</dd>
                        </div>

                        <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-gray-900">
                            <dt class="text-base">{{ __('Total') }}</dt>
                            <dd class="text-base">€ {{ app_session_order()?->total }}</dd>
                        </div>
                    </dl>
                    @endif
                    <div class="mt-16 border-t border-gray-200 py-6 text-right">
                        <a href="{{ route('tickets.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            {{ __('layout.navigation.browse_tickets') }}
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <x-wedo.home.footer></x-wedo.home.footer>
</x-app-layout>
