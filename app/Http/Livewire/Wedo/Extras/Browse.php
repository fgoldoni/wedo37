<?php
namespace App\Http\Livewire\Wedo\Extras;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithDiscount;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\Str;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

    use WithDiscount;

    use Actions;

    public ?int $event_id = null;

    private readonly ApiInterface $api;

    protected $queryString = ['event_id'];

    protected $listeners = ['refreshComponent' => '$refresh'];

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

    public function continue()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function apiExtras()
    {
        return app()->make(ApiInterface::class)->get('/events-extras/' . $this->event_id)->data;
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

    public function getCartsProperty()
    {
        return session('cart-' . request()->ip());
    }

    public function getRowsProperty()
    {
        return $this->apiExtras();
    }

    public function render()
    {
        return view('livewire.wedo.extras.browse', [
            'rows' => $this->rows,
            'carts' => $this->carts,
            'hasExtra' => $this->hasExtra
        ]);
    }
}
