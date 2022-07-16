<?php

namespace App\Http\Livewire\Wedo\Jobs;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithPerPagePagination;
use App\Http\Livewire\Wedo\WithSorting;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Browse extends Component
{
    use WithSorting;

    use WithCachedRows;

    use WithPerPagePagination;

    private ApiInterface $api;

    public function mount(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function getRowsQueryProperty()
    {
        return $this->api->get('/jobs',
            [
                'search' => ''
            ]
        );
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.jobs.browse', ['rows' => $this->rows]);
    }
}
