<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('wedo.tickets.index');
    }

    public function show(int $id = null)
    {
        return view('wedo.tickets.index');
    }
}
