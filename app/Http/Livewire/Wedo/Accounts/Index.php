<?php

namespace App\Http\Livewire\Wedo\Accounts;

use App\Models\WedoUser;
use App\Rules\Phone;
use App\Rules\RealEmail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public WedoUser $editing;

    public ?string $photo = null;

    public function mount(): void
    {
        $this->editing = auth()->user();
    }

    public function rules(): array
    {
        return [
            'editing.name' => ['required', 'string', 'max:255'],
            'editing.email' => ['required', 'email', new RealEmail()],
            'editing.phone' => ['required', 'min:6', new Phone()],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }
    public function updateProfileInformation()
    {
        dd('ok');
    }

    public function render()
    {
        return view('livewire.wedo.accounts.index');
    }
}
