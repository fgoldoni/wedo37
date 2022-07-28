<?php

namespace App\Http\Livewire\Wedo\Applicants;

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

    public int $total = 0;

    protected $listeners = ['onRefreshBrowse' => 'refreshTotal'];

    public function mount()
    {
        $this->useCachedRows();

        $this->total = is_countable($this->rows) ? count($this->rows) : 0;
    }

    public function getRowsQueryProperty(): array
    {
        if (auth()->check()) {
            return app()->make(ApiInterface::class)->get('/applicants')->data;
        }

        return [];
    }

    public function getRowsProperty(): array
    {
        return $this->cache(fn () => $this->rowsQuery, cache_path('applicants_browse'));
    }

    public function refreshTotal()
    {
        $this->forget(cache_path('applicants_browse'));
    }

    public function render()
    {
        return view('livewire.wedo.applicants.browse');
    }
}
