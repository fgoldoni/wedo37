<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class BrowseList extends Component
{
    use WithCachedRows;

    public function getRowsQueryProperty(): array
    {
        if (auth()->check()) {
            return app()->make(ApiInterface::class)->get('/applicants')->data;
        }

        return [];
    }

    public function getRowsProperty(): array
    {
        return $this->cache(fn () => $this->rowsQuery, config('app.system.cache.keys.applicants_browse'));
    }


    public function render()
    {
        $this->useCachedRows();

        return view('livewire.wedo.applicants.browse-list', ['rows' => $this->rows]);
    }
}
