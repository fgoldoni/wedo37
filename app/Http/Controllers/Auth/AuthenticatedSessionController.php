<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\WedoAuthService;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        SEOTools::setTitle(__('layout.navigation.sign_in') . ' - ' . app_team_name(), false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('accounts.index'));
        SEOTools::setCanonical(route('accounts.index'));
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('auth.login');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        WedoAuthService::forgetCache();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
