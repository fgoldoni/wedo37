<?php

namespace App\Http\Livewire\Wedo\Payments;

use App\Http\Livewire\Wedo\Carts\Bag;
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
        try {
            $response = app()->make(ApiInterface::class)->post('/payments', [
                'paymentMethod' => $paymentMethod,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirectRoute('payments.index');
        }

        session()->forget('cart-' . request()->ip());

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->success(__('Updated'), $response->message);

        return $this->redirectRoute('confirmation.index', ['orderId' => $response->orderId]);
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
