<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Middleware\EnsureTeamMiddleware;
use App\Http\Services\Contracts\ApiInterface;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('wedo.payments.index');
    }

    public function stripe(string $id)
    {
        EnsureTeamMiddleware::resetCartId();

        return redirect()->route('payments.success', ['id' => $id]);
    }

    public function success(string $id)
    {
        return view('wedo.payments.success', compact('id'))->with('payment', 'Payment successful');
    }
}
