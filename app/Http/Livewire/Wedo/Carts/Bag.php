<?php
namespace App\Http\Livewire\Wedo\Carts;

use App\Http\Middleware\EnsureTeamMiddleware;
use Livewire\Component;

class Bag extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function getRowsProperty()
    {
        return session()->get(EnsureTeamMiddleware::cartId());
    }

    public function render()
    {
        return view('livewire.wedo.carts.bag', ['carts' => $this->rows]);
    }
}
