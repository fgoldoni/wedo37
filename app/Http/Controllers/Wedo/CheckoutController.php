<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('wedo.checkout.index');
    }

    public function show(Ticket $ticket)
    {
        return view('wedo.tickets.item', compact('ticket'));
    }
}
