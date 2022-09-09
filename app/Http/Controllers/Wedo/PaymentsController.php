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

    public function success()
    {
        session()->forget('cart-id');
        session()->forget('cart-' . request()->ip());

        return redirect()->route('extras.index', ['event_id' => app_event()->id])->with('payment', 'Payment successful');
    }
}
