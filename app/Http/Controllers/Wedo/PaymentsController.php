<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('wedo.payments.index');
    }

    public function stripe()
    {
        session()->forget('cart-' . request()->ip());
        session()->forget('cart-id');

        return redirect()->route('payments.success');
    }

    public function success()
    {
        return view('wedo.payments.success')->with('payment', 'Payment successful');
    }
}
