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
}
