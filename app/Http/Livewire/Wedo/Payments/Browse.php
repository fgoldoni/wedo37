<?php

namespace App\Http\Livewire\Wedo\Payments;

use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use Actions;

    public ?string $name;

    public function mount()
    {
        $this->name = auth()->user()->name;
    }

    public function setPayment($paymentMethod)
    {
        $response = app()->make(ApiInterface::class)->post('/payments', [
            'paymentMethod' => $paymentMethod,
        ]);

        $this->notification()->success(__('Updated'), $response->message);
    }

    public function getRowsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.payments.browse', ['carts' => $this->rows]);
    }
}
