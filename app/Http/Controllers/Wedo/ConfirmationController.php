<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;

class ConfirmationController extends Controller
{
    public function index()
    {
        return view('wedo.confirmation.index');
    }

    public function stripe()
    {
        session()->put('cart-id', uniqid());
        session()->forget('cart-' . request()->ip());

        return view('wedo.confirmation.stripe');
    }
}
