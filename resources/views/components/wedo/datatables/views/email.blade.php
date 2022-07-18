<div>
    <div class="flex items-center">
        @if($row->email_verified_at)
            <x-heroicon-s-shield-check class="w-5 h-5 text-green-500" />
        @else
            <x-heroicon-s-shield-exclamation class="w-5 h-5 text-red-500" />
        @endif
        <span class="ml-1.5 text-secondary-500">{{ $row->email }}</span>
    </div>
    @if(!$row->hasVerifiedEmail())
        <x-g-job.button link="javascript:;" class="text-xs" wire:click="sendEmailVerificationNotification({{$row->id}})">
            Re-send link
        </x-g-job.button>
    @endif
</div>
