<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class OrdersController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Orders - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('orders.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.orders.index');
    }

    public function show()
    {
        return view('wedo.orders.show');
    }
}
