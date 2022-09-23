<?php

namespace App\Http\Livewire\Wedo\Home;

use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Footer extends Component
{
    public function getRowsProperty()
    {
        return app()->make(ApiInterface::class)->get('/footers')->data;
    }

    public function render()
    {
        return view('livewire.wedo.home.footer', ['rows' => $this->rows]);
    }
}
