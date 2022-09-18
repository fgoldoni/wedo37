<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Artesaos\SEOTools\Facades\SEOTools;

class TicketsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        SEOTools::setTitle('Tickets - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('tickets.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.tickets.index');
    }

    public function show(Ticket $ticket)
    {
        SEOTools::setTitle($ticket->name . ' - ' . app_team_name(), false);
        SEOTools::setDescription($ticket->description);
        SEOTools::opengraph()->setUrl(route('tickets.show', $ticket->id));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.tickets.item', compact('ticket'));
    }
}
