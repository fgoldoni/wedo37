<fieldset class="space-y-5">
    <legend class="sr-only">Notifications</legend>
    <div class="relative flex items-start">
        <div class="flex items-center h-5">
            <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="comments" class="font-medium text-gray-700">New comments</label>
            <span id="comments-description" class="text-gray-500"><span class="sr-only">New comments </span>so you always know what's happening.</span>
        </div>
    </div>
    <div class="relative flex items-start">
        <div class="flex items-center h-5">
            <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="candidates" class="font-medium text-gray-700">New candidates</label>
            <span id="candidates-description" class="text-gray-500"><span class="sr-only">New candidates </span>who apply for any open postings.</span>
        </div>
    </div>
    <div class="relative flex items-start">
        <div class="flex items-center h-5">
            <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
            <label for="offers" class="font-medium text-gray-700">Offers</label>
            <span id="offers-description" class="text-gray-500"><span class="sr-only">Offers </span>when they are accepted or rejected by candidates.</span>
        </div>
    </div>
</fieldset>
