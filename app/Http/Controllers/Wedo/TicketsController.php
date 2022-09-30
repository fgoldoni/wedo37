<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;

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
        SEOTools::setTitle( Str::upper($ticket->name)  . ' - ' . app_team_name(), false);
        SEOTools::setDescription($ticket->description);
        SEOTools::opengraph()->setUrl(route('tickets.show', $ticket->id));
        SEOTools::opengraph()->addImage($ticket->avatar_url, ['height' => 300, 'width' => 300]);
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('locale', app()->getLocale());
        SEOTools::opengraph()->addProperty('locale:alternate', ['de', 'en-us']);
        SEOTools::setCanonical(url('/'));
        SEOTools::twitter()->setTitle(Str::upper($ticket->name)  . ' - ' . app_team_name());
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->setTitle(Str::upper($ticket->name)  . ' - ' . app_team_name());
        SEOTools::jsonLd()->addImage($ticket->avatar_url, ['height' => 300, 'width' => 300]);
        SEOMeta::addKeyword(['billets', 'events', 'tickets']);

        return view('wedo.tickets.item', compact('ticket'));
    }
}
