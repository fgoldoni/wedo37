<?php
namespace App\Http\Livewire\Wedo\Orders;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;

    use Actions;

    use WithCachedRows;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function rules(): array
    {
        return [
        ];
    }

    public function remove(int $id)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure ?',
            'description' => 'Remove item from Basket',
            'icon' => 'error',
            'accept' => [
                'label' => 'Yes, remove it',
                'method' => 'delete',
                'params' => $id,
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    public function delete(int $id)
    {
        $this->dialog();
        $response = app()->make(ApiInterface::class)->delete('/carts/' . $id);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->info(__('Great!!'), $response->message);
    }

    public function getRowsProperty()
    {
        return app()->make(ApiInterface::class)->get('/orders')->data;
    }

    public function checkout()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function render()
    {
        return view('livewire.wedo.orders.browse', ['orders' => $this->rows]);
    }
}
