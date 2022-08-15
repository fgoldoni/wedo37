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

    public function rules(): array
    {
        return [
        ];
    }

    public function mount()
    {
    }

    public function remove(int $id)
    {
        $response = app()->make(ApiInterface::class)->delete('/carts/' . $id);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->info(__('Great!!'), $response->message);
    }

    public function getRowsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function checkout()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function render()
    {
        return view('livewire.wedo.carts.browse', ['carts' => $this->rows]);
    }
}
