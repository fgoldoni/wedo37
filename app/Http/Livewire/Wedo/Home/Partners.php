<?php
namespace App\Http\Livewire\Wedo\Home;

use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Partners extends Component
{
    public function getRowsProperty()
    {
        return app()->make(ApiInterface::class)->get('/brands')->data;
    }

    public function render()
    {
        return view('livewire.wedo.home.partners', ['rows' => $this->rows]);
    }
}
