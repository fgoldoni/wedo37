<?php

namespace App\Http\Livewire\Wedo\Carts;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use App\Rules\Phone;
use App\Rules\RealEmail;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;

    use Actions;

    use WithCachedRows;

    protected $listeners = [ 'refreshComponent' => '$refresh'];

    public function rules(): array
    {
        return [
        ];
    }

    public function remove(array $item)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure ?',
            'description' => 'Remove item from Basket',
            'icon' => 'error',
            'accept' => [
                'label' => 'Yes, remove it',
                'method' => 'delete',
                'params' => $item,
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    public function delete(array $item)
    {

        $array = explode('\\', $item['model']);
        $prefix = Str::lower($array[count($array) - 1 ]) . '-';

        $response = app()->make(ApiInterface::class)->delete('/carts/' . $prefix . $item['id']);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->emitSelf( 'refreshComponent');

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
