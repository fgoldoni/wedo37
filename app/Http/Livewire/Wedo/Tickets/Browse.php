<?php
namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\Applicants\Item;
use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\Modals\Popup\Add;
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
    }

    public function show(int $id)
    {
        $this->show = $id;

    }

    public function add(int $id)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => Ticket::$apiModel,
            'id' => $id,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->emit('openModal', 'wedo.modals.popup.add');
    }

    public function continue(int $id)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => Ticket::$apiModel,
            'id' => $id,
        ]);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        return $this->redirectRoute('carts.index');
    }

    public function resetFilters()
    {
        $this->reset('filters', 'show');
    }

    public function getRowsQueryProperty()
    {
        return Ticket::query()
            ->when($this->filters['events'], fn($query, $events) => $query->whereIn('event_id', $events))
            ->get();
    }

    public function getRowProperty()
    {
        return $this->show ? Ticket::find($this->show) : null;
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.browse', ['rows' => $this->rows, 'ticket' => $this->row]);
    }
}
