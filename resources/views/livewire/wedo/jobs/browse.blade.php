<!-- This example requires Tailwind CSS v2.0+ -->
<div class="grid grid-cols-1 space-x-6 sm:grid-cols-3">


    <div class="col-span-1">
        <div class="grid grid-cols-1">
            <x-wedo.jobs.list :rows="$rows->data"></x-wedo.jobs.list>
        </div>
    </div>

    <div class="col-span-2">
        <div class="grid grid-cols-1 gap-4">
            Item
        </div>
    </div>

</div>
