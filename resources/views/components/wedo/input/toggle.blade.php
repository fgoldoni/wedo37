@props([
    'label' => false,
])

<div class="flex items-center" x-data="{
     isEnabled: @entangle($attributes->wire('model'))
}">
    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
    <button type="button" x-on:click="isEnabled = !isEnabled"  :class="{ 'bg-indigo-600': isEnabled, 'bg-gray-200': !(isEnabled) }" class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" role="switch" aria-checked="true">
        <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
        <span aria-hidden="true" :class="{ 'translate-x-5': isEnabled, 'translate-x-0': !(isEnabled) }" class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
    </button>
    @if($label)
        <span class="ml-3">
            <span class="text-sm font-medium text-gray-900">{{$label}} </span>
          </span>
    @endif

</div>
