<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class ConfirmationController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Confirmation - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('confirmation.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.confirmation.index');
    }
}
