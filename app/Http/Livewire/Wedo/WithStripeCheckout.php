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

    public function checkoutSession()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiVersion('2022-08-01');

        $list = [];

        foreach (session('cart-' . request()->ip())->items as $item) {
            $list[] = ' ( ' . $item->quantity . 'X' . $item->name . ' )';
        }

        $description = implode(' | ', $list);

        return \Stripe\Checkout\Session::create([
            'mode' => 'payment',
            'line_items' => [
                array_map(fn ($item) => [
                    'quantity' => $item->quantity,
                    'price_data' => [
                        'currency' => 'EUR',
                        'product_data' => [
                            'name' => $item->name
                        ],
                        'unit_amount' => $item->price * 100
                    ],
                ], (array) session('cart-' . request()->ip())->items)
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
