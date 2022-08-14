<?php

namespace App\Http\Livewire\Wedo\Carts;

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

    public ?string $name = null;

    public ?string $email = null;

    public ?string $phone = null;

    public ?string $address = null;

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
        $this->name = auth()->user()?->name;

        $this->email = auth()->user()?->email;

        $this->phone = auth()->user()?->phone;

        $this->address = auth()->user()?->address;

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

        session()->put('cart-' . $response->user_id, $response->data);
        session()->put('intent-' . $response->user_id, $response->intent);

        return $this->redirectRoute('login.token', [
            'token' => $response->token,
            'to' => route('checkout.index'),
        ]);
    }

    public function render()
    {
        return view('livewire.wedo.carts.browse');
    }
}
