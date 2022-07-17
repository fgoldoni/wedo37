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

    protected $queryString = ['filters'];

    private ?\stdClass $job = null;

    public ?int $show = null;

    public array $filters = [
        'search' => null,
        'category' => null,
        'categories' => [],
        'countries' => [],
        'divisions' => [],
        'cities' => [],
        'days' => null,
        'latest' => null,
        'oldest' => null,
    ];

    public function mount(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function updatedShow($value)
    {
        $this->useCachedRows();

        $this->job = app()->make(ApiInterface::class)->get( '/jobs/' . $value)->data;
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty()
    {
        return app()->make(ApiInterface::class)->get(
            '/jobs',
            [
                'search' => '',
                'filters' => $this->filters,
            ]
        );
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.jobs.browse', ['rows' => $this->rows, 'job' => $this->job]);
    }
}
