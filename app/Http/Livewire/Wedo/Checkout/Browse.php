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

    public ?int $ticketId = null;

    public ?Ticket $ticket = null;

    public ?string $name;

    public ?string $email;

    public ?string $phone;

    public ?string $address;

    protected $queryString = ['ticketId'];

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

        $this->ticket = Ticket::find($this->ticketId);
    }

    public function save()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/carts', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'ticketId' => $this->ticketId,
        ]);

        return $this->redirectRoute('login.token', [
            'token' => $response->token,
            'to' => route('checkout.index', ['ticketId' => $this->ticketId]),
        ]);

        dd($response);

        $this->notification()->success(__('Updated'), $response->message);
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
