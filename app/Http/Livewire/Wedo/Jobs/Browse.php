<?php
namespace App\Http\Livewire\Wedo\Jobs;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Browse extends Component
{
    use WithCachedRows;

    private ApiInterface $api;

    protected $queryString = ['filters', 'show'];

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

        $this->useCachedRows();

        $this->job = $this->show ? $this->cache(fn () => $this->showQuery, 'current-job-' . $this->show) : null;
    }

    public function updatedShow($value)
    {
        $this->useCachedRows();

        $this->job = $this->cache(fn () => $this->showQuery, 'current-job-' . $value);
    }

    public function resetFilters()
    {
        $this->reset('filters', 'show');
    }

    public function getShowQueryProperty()
    {
        return app()->make(ApiInterface::class)->get('/jobs/' . $this->show)->data;
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
