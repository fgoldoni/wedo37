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
        try {
            $response = app()->make(ApiInterface::class)->post('/paypal', [
                'authorizationId' => $authorizationId,
            ]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage() != '' ? $e->getMessage() : 'Unable to process payment');
            return $this->redirectRoute('payments.index');
        }
        return view('wedo.payments.index');
    }
}
