<?php
namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\Str;
use Livewire\Component;
use WireUi\Traits\Actions;

class Quantity extends Component
{
    use Actions;

    public ?int $itemId = null;

    public ?string $prefix = null;

    public ?string $model = null;

    public $item = null;

    public function mount()
    {
        $array = explode('\\', $this->model);
        $this->prefix = Str::lower($array[count($array) - 1]) . '-';

        $this->item = (array) collect(session('cart-' . request()->ip())->items)->filter(fn ($item) => $item->id == $this->prefix . $this->itemId)->first();
    }

    public function updatedItem($value, $item)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => $this->model,
            'id' => Str::replace($this->prefix, '', $this->item['id']),
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
