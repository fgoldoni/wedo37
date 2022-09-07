<?php

namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\WithDiscount;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class Ticket extends Component
{
    use WithDiscount;

    use Actions;

    public ?string $item = null;

    private readonly ApiInterface $api;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
    }

    public function continue()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function getHasExtraProperty()
    {
        $items = session('cart-' . request()->ip())?->items;

        if ($items) {
            foreach ($items as $item) {
                if ($item->associatedModel === \App\Models\Extra::$apiModel) {
                    return true;
                }
            }
        }

        return false;
    }

    public function getCartsProperty()
    {
        return session()->get('cart-' . request()->ip());
    }
    public function render()
    {
        return view('livewire.wedo.tickets.ticket', [
            'row' => json_decode($this->item),
            'carts' => $this->carts,
            'hasExtra' => $this->hasExtra
        ]);
    }

}
