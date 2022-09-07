<?php
namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithDiscount;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

    use WithDiscount;

    use Actions;

    private readonly ApiInterface $api;

    protected $queryString = ['filters', 'show'];

    protected $listeners = ['refreshComponent' => '$refresh'];

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

    public function continue()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function resetFilters()
    {
        $this->reset('filters', 'show');
    }

    public function getHasExtraProperty()
    {
        $items = session('cart-' . request()->ip())?->items;

        if ($items) {
            foreach ($items as $item) {
                if ($item->associatedModel === \App\Models\Extra::$apiModel) {
                    return true;
                }
            }
        }

        return false;
    }


    public function getRowsQueryProperty()
    {
        return Ticket::query()
            ->when($this->filters['events'], fn ($query, $events) => $query->whereIn('event_id', $events))
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

    public function getCartsProperty()
    {
        return session()->get('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.tickets.browse', [
            'rows' => $this->rows,
            'ticket' => $this->row,
            'carts' => $this->carts,
            'hasExtra' => $this->hasExtra
        ]);
    }
}
