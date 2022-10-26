<?php
namespace App\Http\Livewire\Wedo\Paypal;

use App\Http\Livewire\Wedo\Carts\Bag;
use App\Http\Middleware\EnsureTeamMiddleware;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use Actions;

    private string $clientId;

    protected $listeners = ['setPaypalPayment'];

    private mixed $carts;

    public function setPaypalPayment($authorizationId)
    {
        $cartId = EnsureTeamMiddleware::cartId();

        try {
            $response = app()->make(ApiInterface::class)->post('/paypal', [
                'authorizationId' => $authorizationId,
                'cartId' => $cartId,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage() != '' ? $e->getMessage() : 'Unable to process payment');
            return $this->redirectRoute('payments.index');
        }

        EnsureTeamMiddleware::resetCartId();

        $this->emitTo(Bag::class, 'refreshComponent');

        $this->notification()->success(__('Updated'), $response->message);

        return redirect()->route('payments.success');
    }

    public function mount()
    {
        $this->clientId = app_team()?->paypal_id ?? env('PAYPAL_ID');

        $this->carts = app_session_cart();
    }

    public function ui()
    {
        $this->clientId = app_team()->paypal_id ?? env('PAYPAL_ID');

        $orders = json_encode([
            'purchase_units' => [[
                'description' => app_team_name() . '-' . app_event()->name . ':' . app_event()->id,
                'items' => array_map(fn ($item) => [
                    'name' => $item->name,
                    'quantity' => $item->quantity,
                    'unit_amount' => [
                        'value' => $item->price,
                        'currency_code' => 'EUR',
                    ],
                ], (array) $this->carts->items),
                'amount' => [
                    'value' => $this->carts->total,
                    'currency_code' => 'EUR',
                    'breakdown' => [
                        'item_total' => [
                            'value' => $this->carts->total,
                            'currency_code' => 'EUR',
                        ],
                    ]
                ]
            ],

            ]]);

        return <<<HTML
             <!-- Replace "test" with your own sandbox Business account app client ID &enable-funding=paylater-->
            <script src="https://www.paypal.com/sdk/js?client-id={$this->clientId}&currency=EUR&intent=authorize&enable-funding=paylater"></script>
            <!-- Set up a container element for the button -->
            <div id="paypal-button-container"></div>
            <script>
              paypal.Buttons({
                style: {
                    layout: 'horizontal',
                    color:  'gold',
                    shape:  'rect',
                    label:  'paypal',
                    tagline:  false,
                    height:  50
                  },
                // Sets up the transaction when a payment button is clicked
                createOrder: (data, actions) => {
                  return actions.order.create({$orders});
                },
                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                  actions.order.authorize().then(function(authorization) {
                     const authorizationId = authorization.purchase_units[0].payments.authorizations[0].id
                     Livewire.emit('setPaypalPayment', authorizationId)
                  });
                }
              }).render('#paypal-button-container');
            </script>
        HTML;
    }

    public function render()
    {
        return view('livewire.wedo.paypal.browse', ['payment' => $this->ui()]);
    }
}
