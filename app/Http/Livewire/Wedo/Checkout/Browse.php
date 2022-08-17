<?php

namespace App\Http\Livewire\Wedo\Checkout;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use App\Rules\Phone;
use App\Rules\RealEmail;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;

    use Actions;

    use WithCachedRows;

    public ?string $name;

    public ?string $email;

    public ?string $phone;

    public ?string $address;

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', new RealEmail()],
            'phone' => ['nullable', 'min:6', new Phone()],
            'address' => ['required', 'min:4'],
        ];
    }

    public function mount()
    {
        $this->name = 'Full name';

        $this->email = 'test@test.com';

        $this->phone = '015888888888';

        $this->address = 'Niendorfer Straße 43, 22529 Hamburg';

    }

    public function save()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/checkouts', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        $this->notification()->success(__('Great'), $response->message);

        return $this->redirectRoute('login.token', [
            'token' => $response->token,
            'to' => route('checkout.index'),
        ]);

    }

    public function getRowsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.checkout.browse', ['carts' => $this->rows]);
    }
}
