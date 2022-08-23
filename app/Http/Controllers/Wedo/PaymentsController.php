<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('wedo.payments.index');
    }
}
