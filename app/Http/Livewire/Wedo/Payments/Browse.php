<?php
namespace App\Http\Livewire\Wedo\Payments;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Livewire\Wedo\WithStripeCheckout;
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



    public function setPayment($paymentMethod)
    {
        try {
            $response = app()->make(ApiInterface::class)->post('/payments', [
                'paymentMethod' => $paymentMethod,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirectRoute('payments.index');
        }

        session()->forget('cart-' . request()->ip());

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->success(__('Updated'), $response->message);

        return $this->redirectRoute('confirmation.index', ['orderId' => $response->orderId]);
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

    public function getRowsProperty()
    {
        if (!session()->has('cart-' . request()->ip())) {
            $response = app()->make(ApiInterface::class)->get('/carts');

            session()->put('cart-' . request()->ip(), $response->data);
        }


        return session()->get('cart-' . request()->ip());
    }

    public function render()
    {
        return view('livewire.wedo.payments.browse', [
            'carts' => $this->rows,
            'hasExtra' => $this->hasExtra
        ]);
    }
}
