<div class="py-3 whitespace-no-wrap text-sm leading-5 text-secondary-500 dark:text-secondary-400 text-right">
    {{ $row->hasRole(config('gjob.system.users.roles.administrator')) ? __('Full') : __('Limited') }}
</div>
