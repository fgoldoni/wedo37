<?php

namespace App\Http\Livewire\Wedo\Modals\Popup;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use LivewireUI\Modal\ModalComponent;

class Application extends ModalComponent
{
    use WithCachedRows;

    public string $phone;

    public string $message;

    public array $attachments = [];

    public int $attachment;

    public string $upload;

    public string $email;

    public function mount()
    {
        if (auth()->check()) {
            $this->attachments = $this->cache(
                fn () => app()->make(ApiInterface::class)->get('/resumes')->data,
                config('app.system.cache.keys.resumes')
            );
        }
    }
    public function render()
    {
        return view('livewire.wedo.modals.popup.application');
    }
}
