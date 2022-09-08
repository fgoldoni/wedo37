<?php


namespace App\Http\Livewire\Wedo;

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
        \Stripe\Stripe::setApiKey('sk_test_rUdbY7nHw15cCHJdFy0JJOzl');

        \Stripe\Stripe::setApiVersion('2022-08-01');

        return \Stripe\Checkout\Session::create([
            'mode' => 'payment',
            'billing_address_collection' => 'required',
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
            ],
            'success_url' => url('/'),
            'cancel_url' => url('/'),
        ]);
    }
}
