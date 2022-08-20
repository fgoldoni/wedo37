<?php

namespace App\Http\Livewire\Wedo\Extras;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

    use Actions;

    public ?int $show = null;

    public ?int $event_id = null;

    private ApiInterface $api;

    protected $queryString = ['event_id'];

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

    public function apiExtras()
    {
        return app()->make(ApiInterface::class)->get('/events-extras/' . $this->event_id)->data;
    }
    public function getRowProperty()
    {
        return $this->show;
    }


    public function getRowsProperty()
    {
        return $this->apiExtras();
    }

    public function render()
    {
        return view('livewire.wedo.extras.browse', ['orders' => $this->rows, 'order' => $this->row]);
    }
}
