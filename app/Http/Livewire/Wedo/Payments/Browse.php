<?php
namespace App\Http\Livewire\Wedo\Payments;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithStripeCheckout;
use App\Http\Middleware\EnsureTeamMiddleware;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use Actions;

    use WithStripeCheckout;

    public ?string $name = null;



    public function mount()
    {
        $this->name = auth()->user()->name;

    }

    public function continue()
    {

    }

    public function save()
    {
        $checkoutSession = $this->checkoutSession();

        session()->put('checkout-session-id', $checkoutSession->id);

        return $this->redirect($checkoutSession->url);
    }

    public function sofort()
    {
        $checkoutSession = $this->checkoutSession(['sofort']);

        session()->put('checkout-session-id', $checkoutSession->id);

        return $this->redirect($checkoutSession->url);
    }

    public function getHasExtraProperty()
    {
        $items = EnsureTeamMiddleware::sessionCart()?->items;

        if ($items) {
            foreach ($items as $item) {
                if ($item->associatedModel === \App\Models\Extra::$apiModel) {
                    return true;
                }
            }
        }

        return false;
    }

    public function getRowsProperty()
    {
        if (!session()->has(app_cart_id())) {
            $response = app()->make(ApiInterface::class)->get('/carts');

            app_session_cart_store($response->data);
        }


        return app_session_cart();
    }

    public function render()
    {
        return view('livewire.wedo.payments.browse', [
            'carts' => $this->rows,
            'hasExtra' => $this->hasExtra
        ]);
    }
}
