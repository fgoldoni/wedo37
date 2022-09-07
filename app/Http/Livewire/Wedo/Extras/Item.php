<?php
namespace App\Http\Livewire\Wedo\Extras;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithDiscount;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\Str;
use Livewire\Component;
use WireUi\Traits\Actions;

class Item extends Component
{
    use WithCachedRows;

    use WithDiscount;

    use Actions;

    public int $quantity = 1;

    public  $item = null;

    private readonly ApiInterface $api;

    public function mount()
    {
    }

    public function add(int $id)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => \App\Models\Extra::$apiModel,
            'quantity' => $this->quantity,
            'id' => $id,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');
        $this->emitup(Browse::class, 'refreshComponent');

        $this->emit('openModal', 'wedo.modals.popup.extra');
    }

    public function basket()
    {
        return $this->redirectRoute('carts.index');
    }

    public function render()
    {
        return view('livewire.wedo.extras.item', ['row' => json_decode($this->item)]);
    }
}
