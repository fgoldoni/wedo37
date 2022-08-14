<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('wedo.carts.index');
    }
}
