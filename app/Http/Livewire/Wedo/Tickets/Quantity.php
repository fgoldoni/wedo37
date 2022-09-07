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

    public ?string $model = null;

    public ?string $item = null;

    public ?int $quantity = null;

    public  $row = null;

    public function mount()
    {
        $row = (array) json_decode($this->item);

        $this->quantity = $this->getQuantity($row);

        $this->row = $row;
    }

    public function updatedQuantity($value)
    {
        if ((int)$value === 0) {
            return $this->remove();
        }

        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => $this->model,
            'id' => $this->getRowId(),
            'quantity' => (int) $value,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->emitTo(Browse::class, 'refreshComponent');

        $this->emitTo(\App\Http\Livewire\Wedo\Extras\Browse::class, 'refreshComponent');

        $this->emitTo(Ticket::class, 'refreshComponent');

        $this->notification()->success(__('Great!!'), $response->message);
    }

    public function remove()
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure ?',
            'description' => 'Remove item from Basket',
            'icon' => 'error',
            'accept' => [
                'label' => 'Yes, remove it',
                'method' => 'delete',
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    public function delete()
    {
        $prefix = $this->getPrefix();

        $response = app()->make(ApiInterface::class)->delete('/carts/' . $prefix . $this->row['id']);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->emitTo(Browse::class, 'refreshComponent');

        $this->emitTo(\App\Http\Livewire\Wedo\Extras\Browse::class, 'refreshComponent');

        $this->emitTo(Ticket::class, 'refreshComponent');

        $this->notification()->success(__('Great!!'), $response->message);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.quantity');
    }

    private function getQuantity(array $row): int
    {
        $items = session('cart-' . request()->ip())?->items;

        if ($items) {
            $item = collect($items)->first(fn ($item) => $item->id === $this->getPrefix() . $row['id']);
            if ($item) {
                return $item->quantity;
            }
        }

        return 0;
    }

    private function getPrefix(): string
    {
        $array = explode('\\', (string) $this->model);

        return Str::lower($array[count($array) - 1]) . '-';
    }

    private function getRowId(): int
    {
        return Str::replace($this->getPrefix(), '', $this->row['id']);
    }
}
