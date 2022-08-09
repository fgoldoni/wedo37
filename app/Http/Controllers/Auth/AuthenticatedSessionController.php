<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\WedoAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
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
