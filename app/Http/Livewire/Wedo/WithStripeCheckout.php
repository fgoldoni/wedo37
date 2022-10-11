<?php


namespace App\Http\Livewire\Wedo;

use App\Http\Middleware\EnsureTeamMiddleware;

/**
 * Class WithStripeCheckout
 *
 * @package \App\Http\Livewire\Wedo
 */
trait WithStripeCheckout
{
    public function mountWithStripeCheckout()
    {

    }

    public function checkoutSession($method = ['card']): \Stripe\Checkout\Session
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiVersion('2022-08-01');

        $list = [];

        foreach (app_session_cart()->items as $item) {
            $list[] = ' ( ' . $item->quantity . 'X' . $item->name . ' )';
        }

        $description = implode(' | ', $list);

        return \Stripe\Checkout\Session::create([
            'payment_method_types' => $method,
            'mode' => 'payment',
            'line_items' => [
                array_map(fn ($item) => [
                    'quantity' => $item->quantity,
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $item->name
                        ],
                        'unit_amount' => $item->price * 100
                    ],
                ], (array) app_session_cart()->items)
            ],
            'metadata' => [
                'id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'cart-id' => EnsureTeamMiddleware::cartId(),
                'event-id' => app_event()->id,
                'user-id' => auth()->user()->id,
                'team-id' => EnsureTeamMiddleware::teamId(),
            ],
            'success_url' => route('payments.stripe'),
            'cancel_url' => route('payments.index'),
        ]);
    }
}
