<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Middleware\EnsureTeamMiddleware;
use App\Http\Services\Contracts\ApiInterface;
use Artesaos\SEOTools\Facades\SEOTools;

class PaymentsController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Payments - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('payments.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.payments.index');
    }

    public function stripe()
    {
        EnsureTeamMiddleware::resetCartId();

        return redirect()->route('payments.success');
    }

    public function success()
    {
        SEOTools::setTitle('Purchase confirmation - ' . app_event()->name, false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('orders.index'));
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(app_team_avatar());

        $id = EnsureTeamMiddleware::successOrder();

        return view('wedo.payments.success', compact('id'))->with('payment', 'Payment successful');
    }
}
