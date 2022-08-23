<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('wedo.tickets.index');
    }

    public function show(Ticket $ticket)
    {
        return view('wedo.tickets.item', compact('ticket'));
    }
}
