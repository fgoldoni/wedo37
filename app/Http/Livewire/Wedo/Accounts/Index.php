<?php

namespace App\Http\Livewire\Wedo\Accounts;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\WedoUser;
use App\Rules\Phone;
use App\Rules\RealEmail;
use App\Services\WedoAuthService;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Index extends Component
{
    use WithFileUploads;

    use Actions;

    use WithCachedRows;

    public WedoUser $editing;

    public ?string $photo = null;

    public function mount(): void
    {
        $this->editing = auth()->user();
    }

    public function rules(): array
    {
        return [
            'editing.id' => ['required', 'integer'],
            'editing.name' => ['required', 'string', 'max:255'],
            'editing.email' => ['required', 'email', new RealEmail()],
            'editing.phone' => ['required', 'min:6', new Phone()],
            'photo' => ['nullable'],
        ];
    }
    public function updatedPhoto($file)
    {
        app()->make(ApiInterface::class)->attach($file)->post('/attachments/profile');

        $this->forget(WedoAuthService::cacheKey(session('token')));

        $this->notification()->info(__('Updated'), __('Photo has been successfully updated!'));
    }

    public function updateProfileInformation()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->put('/users/' . $this->editing->id, [
            'name' => $this->editing->name,
            'email' => $this->editing->email,
            'phone' => $this->editing->phone
        ]);

        $this->forget(WedoAuthService::cacheKey(session('token')));

        $this->notification()->success(__('Updated'), $response->message);
    }

    public function render()
    {
        return view('livewire.wedo.accounts.index');
    }
}
