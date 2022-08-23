<?php
namespace App\Http\Livewire\Wedo\Extras;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\Str;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

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

    public function add(int $id)
    {
        $response = app()->make(ApiInterface::class)->post('/carts', [
            'model' => \App\Models\Extra::$apiModel,
            'id' => $id,
        ]);
        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->success(__('Great!!'), $response->message);
    }

    public function remove(array $item)
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure ?',
            'description' => 'Remove item from Basket',
            'icon' => 'error',
            'accept' => [
                'label' => 'Yes, remove it',
                'method' => 'delete',
                'params' => $item,
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    public function delete(array $item)
    {
        $array = explode('\\', (string) $item['model']);

        $prefix = Str::lower($array[count($array) - 1]) . '-';

        $response = app()->make(ApiInterface::class)->delete('/carts/' . $prefix . $item['id']);

        session()->put('cart-' . request()->ip(), $response->data);

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->info(__('Great!!'), $response->message);
    }

    public function basket()
    {
        return $this->redirectRoute('carts.index');
    }

    public function resetFilters()
    {
        $this->reset('filters');
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
            'orders' => $this->rows,
            'carts' => $this->carts,
            'hasExtra' => $this->hasExtra,
        ]);
    }
}
