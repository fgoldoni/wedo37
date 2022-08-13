<?php
namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

    use Actions;

    private ApiInterface $api;

    protected $queryString = ['filters', 'show'];

    private ?Ticket $ticket = null;

    public ?int $show = null;

    public array $filters = [
        'search' => null,
        'category' => null,
        'events' => [],
        'categories' => [],
        'countries' => [],
        'divisions' => [],
        'cities' => [],
        'days' => null,
        'latest' => null,
        'oldest' => null,
    ];

    public function mount()
    {
        $this->useCachedRows();

        $this->ticket = $this->show ? $this->cache(fn () => $this->showQuery, 'current-ticket-' . $this->show) : null;
    }

    public function updatedShow($value)
    {
        $this->useCachedRows();

        $this->ticket = $this->cache(fn () => $this->showQuery, 'current-job-' . $value);
    }

    public function resetFilters()
    {
        $this->reset('filters', 'show');
    }

    public function getShowQueryProperty()
    {
        return Ticket::query()
            ->find($this->show);
    }

    public function getRowsQueryProperty()
    {
        return Ticket::query()
            ->when($this->filters['events'], fn($query, $events) => $query->whereIn('event_id', $events))
            ->get();
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.browse', ['rows' => $this->rows, 'ticket' => $this->ticket]);
    }
}
