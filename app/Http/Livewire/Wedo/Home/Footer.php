<?php

namespace App\Http\Livewire\Wedo\Home;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Footer extends Component
{
    use WithCachedRows;

    public function getRowsQueryProperty(): array
    {
        return app()->make(ApiInterface::class)->get('/footers')->data;
    }

    public function getRowsProperty(): array
    {
        return $this->cache(fn () => $this->rowsQuery, 'footers');
    }

    public function render()
    {
        $this->useCachedRows();

        return view('livewire.wedo.home.footer', ['rows' => $this->rows]);
    }
}
