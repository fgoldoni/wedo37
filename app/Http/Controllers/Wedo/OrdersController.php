<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('wedo.orders.index');
    }

    public function show()
    {
        return view('wedo.orders.show');
    }
}
