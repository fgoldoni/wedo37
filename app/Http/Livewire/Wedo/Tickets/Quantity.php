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

    public ?string $prefix = null;

    public ?string $model = null;

    public ?string $item = null;

    public  $row = null;

    public function mount()
    {
        $row = (array) json_decode($this->item);

        if (!isset($row['quantity'])) {
            $row['quantity'] = 0;
        }

        $this->row = $row;
    }

    public function updatedRow($value, $item)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => $this->model,
            'id' => Str::replace($this->prefix, '', $this->row['id']),
            'quantity' => (int) $value,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->success(__('Great!!'), $response->message);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.quantity');
    }
}
