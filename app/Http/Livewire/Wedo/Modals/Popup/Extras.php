<?php

namespace App\Http\Livewire\Wedo\Modals\Popup;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Livewire\Wedo\WithDiscount;
use App\Http\Services\Contracts\ApiInterface;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class Extras extends ModalComponent
{
    use Actions;

    private readonly ApiInterface $api;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public array $filters = [
    ];

    public function mount()
    {
    }

    public function continue()
    {
        return $this->redirectRoute('checkout.index');
    }

    public function apiExtras()
    {
        return app()->make(ApiInterface::class)->get('/events-extras/' . app_event()->id)->data;
    }

    public function getHasExtraProperty()
    {
        $items = app_session_cart()?->items;

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
        return app_session_cart();
    }

    public function getRowsProperty()
    {
        return $this->apiExtras();
    }

    public function render()
    {
        return view('livewire.wedo.modals.popup.extras', [
            'rows' => $this->rows,
            'carts' => $this->carts,
            'hasExtra' => $this->hasExtra
        ]);
    }
}
