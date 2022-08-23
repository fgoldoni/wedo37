<?php
namespace App\Http\Livewire\Wedo\Carts;

use Livewire\Component;

class Bag extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function getRowsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.carts.bag', ['carts' => $this->rows]);
    }
}
