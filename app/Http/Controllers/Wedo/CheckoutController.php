<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        SEOTools::setTitle('Contact information - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('checkout.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.checkout.index');
    }
}
