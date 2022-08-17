<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('wedo.payments.index');
    }
}
