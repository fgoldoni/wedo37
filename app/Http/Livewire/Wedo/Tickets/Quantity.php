<?php

namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use Livewire\Component;
use WireUi\Traits\Actions;

class Quantity extends Component
{
    use Actions;

    public ?int $itemId = null;

    public $item = null;

    public function mount () {

        $this->item = (array) collect(session('cart-' . request()->ip())->items)->filter(function ($item) {
            return $item->id == $this->itemId;
        })->first();
    }

    public function updatedItem($value, $item)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => Ticket::$apiModel,
            'id' => $this->item['id'],
            'quantity' => (int) $value,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->emitTo(\App\Http\Livewire\Wedo\Carts\Browse::class, 'refreshComponent');

        $this->notification()->success(__('Great!!'), $response->message);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.quantity');
    }
}
